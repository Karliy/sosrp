;;
/**
 *  kyledong专属的javasctipt空间
 */

var main;

(function() {

	main = {
		init: function() {
			var that = this;

			that._cacheParam(),
				._loadinit();

			return that;
		},

		// 存储相应的变量
		_cacheParam: function() {
			var that = this;

			that._$sider = $('ul.list-group');

			return that;
		},

		// 初始化
		_loadinit: function() {
			var that = this;

			// 设置
	        that._$sider.on('click','.sider-item', function(e){
	                $sider.find('.sider-item').removeClass('active-link');
	                $(this).addClass('active-link');
	        });

	        return that;
		}
	};

    $(function() {
        main.init();
    });
})(this, jQuery);