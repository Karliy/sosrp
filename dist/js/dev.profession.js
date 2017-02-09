/*
 *
 * Copyright (c) 2017
 * Author: Smarttang
 * Github: https://github.com/smarttang/
 * ======
 * 业务的操作相关
 * 1、自动根据实际情况加载table数据
 * 2、完成添加、删除等操作，可继承
 */

;;
(function() {

	var dev = {
		init: function() {
			var that = this;

			that._cacheParam()
				._templateData()

			return that;
		},

		// 检查dom是否存在
		// 如果dom存在，则加载table数据
		checkDom: function(_name) {
			var that = this;
			if (document.getElementById(_name)){
				that.table(_name);
			}
			return that;
		},

		// 加载图表
		table: function(_name) {
			var that = this;
			
			try{
				tables._name();
			}catch(err){
				console.log('error');
			}
			

			return that;
		},

		// 存储相应的变量
		_cacheParam: function() {
			var that = this;

			that._$ids = [
				'website_protection',
				'nodelist',
				'webmon_waf'
			];
			
			return that;
		},

		// 模版数据处理
		_templateData: function() {
			var that = this;

			for (var i = 0; i< that._$ids.length; i++){
				that.checkDom(that._$ids[i]);
			}
			return that;
		}
	};


    $(function() {
        dev.init();
    });
})(this, jQuery);