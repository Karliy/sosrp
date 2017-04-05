local cjson = require "cjson"

-- 配置文件的主路径
local global_path = "/usr/local/openresty/nginx/conf/sec.security.waf/json/"

-- 建立共享
local config = ngx.shared.config
local monitor = ngx.shared.monitor

-- 获取配置
local cfile = io.open(global_path .. "config.json")
local config_data = cjson.decode(cfile:read("*all"))
cfile:close()

-- 存入共享内存(配置)
for name,value in pairs(config_data) do
	config:set(name,value)
end

-- 获取监控url
local dfile = io.open(global_path .. "denyurl.json")
local monitor_data = cjson.decode(dfile:read("*all"))
dfile:close()

-- 存入共享内存(URL)
for name,value in pairs(monitor_data) do
	monitor:set(name,value)
end