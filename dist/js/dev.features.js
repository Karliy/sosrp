/*
 *
 * Copyright (c) 2016
 * Author: Smarttang
 * Github: https://github.com/smarttang/
 * ======
 * 用语实现一些封装后的方法
 */

var myajax,alerts,huineng,smarttang;

(function(){
    
    "use strict";

    smarttang = {
        // 获得modal里面的form表单信息
        getModal: function(formId) {
            return huineng.getFormData($('.modal-body ' + formId));
        },

        // 创建按钮
        createButton: function(Btittle,Bicon,Bjquery)
        {
            return '<a data-toggle="tooltip" title="'+ Btittle +'" class="fa '+ Bicon +'" href="#" onclick="'+ Bjquery +';"></a> &nbsp;'
        }
    };

    myajax = {
        // post请求方法
        // remoteurl 远程地址
        // parames 参数
        // success() 成功后执行的内容
        post: function(obj)
        {
            if (typeof(obj.async) == "undefined"){
                obj.async = true;
            }
            $.ajax({
                type: 'POST',
                url: obj.remoteurl,
                data: obj.parames,
                async: obj.async,
                dataType: 'json',
                success:obj.success
            }); 
        },
        get: function(obj)
        {
            if (typeof(obj.async) == "undefined"){
                obj.async = true;
            }
            $.ajax({
                type: 'GET',
                url: obj.remoteurl,
                async: obj.async,
                dataType: 'json',
                success:obj.success
            })
        }
    };
    // 提示工具
    alerts = {
        // modal 视图
        modal: function(obj)
        {
            if (obj.status == 'small'){
                if ($('#modal-job').hasClass('modal-lg')){
                    $('#modal-job').removeClass('modal-lg');
                }
            }else{
                if (!$('#modal-job').hasClass('modal-lg')){
                    $('#modal-job').addClass('modal-lg');
                }
            }
            // 清空内容
            $(".modal .modal-title").html('');
            $(".modal .modal-body").html('');
            // 填充内容
            $(".modal .modal-title").html(obj.title);
            $(".modal .modal-body").html(obj.body);

            // 判断是否用bottom
            if (obj.bottom != undefined){
                $('.modal .modal-footer').html(obj.bottom);
            }else{
                $('.modal .modal-footer').html('<button data-dismiss="modal" class="btn btn-primary" type="button">关闭</button>');
            }

            // 判断当前是否开启
            // 如果开启则关闭，再开
            if ($('.modal').hasClass('in')){
                $(".modal").modal('hide');
                $(".modal").modal('show');
            }else{
                $(".modal").modal('show');
            }
        }
    };

    // 读取form
    huineng = {
        /**
         * 将queryString转换成对象返回
         * @param  {[type]}  url
         * @param  {Boolean} isDecode 是否解码
         * @return {[type]}
         */
        queryStr2Object: function(url, isDecode) {
            url = url || window.location.search;

            var query = url.substr(url.indexOf('?') + 1),
                params = query.split('&'),
                len = params.length,
                result = {},
                i = 0,
                key,
                value,
                item,
                param;

            for (; i < len; i++) {
                param = params[i].split('=');
                key = param[0];
                if (key) {
                    if (param[1]) {
                        value = !!isDecode ? decodeURIComponent(param[1]) : param[1];
                    } else {
                        value = "";
                    }
                }
                item = result[key];
                if ('undefined' == typeof item) {
                    result[key] = value;
                } else
                if ($.isArray(item)) {
                    item.push(value);
                } else {
                    result[key] = [item, value];
                }
            }

            return result;
        },
        /**
         * 获取form表单域值
         * @param  {[type]} $form form的jQuery对象
         * @return {[type]}       [description]
         */
        getFormData: function($form) {
            var formData,
                that = this,
                queryStr = $form.serialize();

            formData = huineng.queryStr2Object(queryStr, true);

            return formData;
        },
        /**
         * 合并对象
         * @param  {[type]} o1 [准备合并的对象1]
         * @param  {[type]} o2 [准备合并的对象2]
         * @return {[type]}    [description]
         */
        mergeData: function(o1,o2){
           for(var key in o2){
               o1[key]=o2[key]
           }
           return o1;
        }
    };
})(jQuery);
