-- ngx 相关的定义(正则匹配/url转义还原)
local Rmatch = ngx.re.find
local Urlescape = ngx.unescape_uri
local config = ngx.shared.config
local limit = ngx.shared.limit
local monitor = ngx.shared.monitor

-- os加载
local os = require "os"

-- 先检查redis
local redis = require 'redis'
local red = redis.new()
red:set_timeout(1000)
local ok,err = red.connect(red, config:get("REDIS_IP"), config:get("REDIS_PORT"))

--获取客户端useragent的值
function get_user_agent()
    USER_AGENT = ngx.var.http_user_agent
    if USER_AGENT == nil then
       USER_AGENT = "unknown"
    end
    return USER_AGENT
end

--WAF拦截的动作
function wipe_out(atag,url,data,ruletag)
    -- json相关的内容
    local cjson = require 'cjson'

    -- 记录行为
    local log_json_obj = {
                 client_ip = ngx.var.remote_addr,
                 local_time = ngx.localtime(),
                 server_name = ngx.var.server_name,
                 user_agent = get_user_agent(),
                 attack_tag = atag,
                 req_url = url,
                 req_data = data,
                 rule_tag = ruletag,
                 method = ngx.req.get_method(),
              }

    -- 设置写入队列
    red:select(6)
    -- 判断写入
    if not red:sadd('waf.attack.log',cjson.encode(log_json_obj)) then
        -- 如果redis写入失败，则写入tmp临时文件
        local io = require 'io'
        file = io.open(config:get("WAF_ERROR_LOG"),'a')
        file:write(cjson.encode(log_json_obj))
        file:close()
    end

    -- 判断是否开启拦截
    if config:get("CONF_INTERCEPTION") == 'ON' then
        -- 判断拦截的返回的类型
        if config:get("CONF_REDIRECT_TYPE") == 'URL' then
            ngx.redirect(config:get("CONF_REDIRECT_URL")..ngx.var.remote_addr, 301)
        else
            ngx.header.content_type = "text/html"
            ngx.say(config:get("CONF_REDIRECT_HTML"))
            ngx.exit(ngx.HTTP_FORBIDDEN)
        end
    end
end

-- 黑名单测试(IP/Useragent/cookie)
function blocks_find()
    -- 设置写入队列
    red:select(6)
    -- ip黑名单测试
    if red:sismember('waf.block.ip',ngx.var.remote_addr) == 1 then
        wipe_out('waf.block.ip',ngx.var.request_uri,"-",ngx.var.remote_addr)
        return true
    -- useragent黑名单
    elseif red:sismember('waf.block.useragent',ngx.var.http_user_agent) == 1 then
        wipe_out('waf.block.useragent',ngx.var.request_uri,"-",ngx.var.http_user_agent)
        return true
    end
    return false
end

-- ip白名单功能
function whitelist_check()
    -- 设置写入队列
    red:select(6)
    if red:sismember('waf.access.ip',ngx.var.remote_addr) == 1 then
        return true
    else
        return false
    end
end

-- 攻击防护拦截
function block_webattack()
    -- 设置写入队列
    red:select(6)
    local ARGS_RULES = red:smembers("waf.block.regex")
    local method = ngx.req.get_method()

    if method == 'GET' then
        for _,rule in pairs(ARGS_RULES) do
            rule = ngx.decode_base64(rule)
            local REQ_ARGS = ngx.req.get_uri_args()
            for key, val in pairs(REQ_ARGS) do
                if type(val) == 'table' then
                    ARGS_DATA = table.concat(val, " ")
                else
                    ARGS_DATA = val
                end
                if ARGS_DATA and type(ARGS_DATA) ~= "boolean" and rule ~="" and Rmatch(Urlescape(ARGS_DATA),rule,"jo") then
                    wipe_out('waf.block.websimple',ngx.var.request_uri,"-",rule)
                    return true
                end
            end
        end
    elseif method == 'POST' then
        ngx.req.read_body()
        local POST_ARGS = ngx.req.get_body_data()
        if POST_ARGS ~= nil then
            for _,rule in pairs(ARGS_RULES) do
                rule = ngx.decode_base64(rule)
                if rule ~="" and Rmatch(POST_ARGS,rule,"jo") then
                    wipe_out('waf.block.websimple',ngx.var.request_uri,POST_ARGS,rule)
                    return true
                end
            end
        end
    else
        return false
    end
    return false
end

-- 反爬虫功能
function block_spiders_check()
    local cjson = require "cjson"
    local Uri = ngx.var.uri
    local Ucount = monitor:get(Uri)

    -- 如果没有设置该链接的频率
    -- 有可能是动态链接
    if not Ucount then
        -- 如果没有则用正则判断是否在
        for _,v in ipairs(monitor:get_keys()) do
            if Rmatch(Uri,v,"isjo") then
                Ucount = monitor:get(v)
                if Ucount and not Rmatch(Uri,'json','isjo') then
                    Uri = v
                    break
                else
                    break
                end
            end
        end
    end

    -- 如果设置了频率
    if Ucount then
        local IP = ngx.var.remote_addr

        -- 用ip和请求地址构建一个token值
        local token = IP..":::"..Uri

        red:select(6)
        -- 判断是否是代理ip场景（一级）
        -- 如果是代理ip，默认就block
        if red:sismember('waf.block.proxy',IP) == 1 then
            wipe_out('waf.block.proxy.spider',ngx.var.request_uri,"-",IP)
            return true
        end

        -- 设置写入队列
        red:select(7)

        -- 判断访问频率的场景(二级)
        -- 指定的url访问频率不能超过阀值
        -- 这个是自动封禁，自动解禁(1小时)
        -- -------------------------
        -- 默认情况下，以5分钟为累计条件
        -- 如果超出统计，则封禁1小时，否则自动消失

        -- 切换到一个专门存储时间计数队列
        local token_count = tonumber(red:get(token))

        if token_count == nil then
            red:set(token,1)
            red:expire(token,150)
            return false
        elseif token_count < Ucount then
            red:set(token,token_count + 1)
            red:expire(token,150)
            return false
        elseif token_count == Ucount then
            red:expire(token,3600)
            wipe_out('waf.block.account.count',ngx.var.request_uri,"-","-")
            return true
        end
    end
    return false
end

-- 如果redis链接失败
if ok then
    -- 如果在白名单队列里面，则不做任何策略
    if not whitelist_check() then
        if blocks_find() then
        elseif block_spiders_check() then
        elseif block_webattack() then
        else
            return
        end
    end
end