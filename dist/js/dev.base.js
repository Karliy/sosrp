;;
/**
 *  业务的交互代码
 */

var base;

(function() {

	base = {
		init: function() {
			var that = this;

			that._cacheParam();

			return that;
		},

		// 存储相应的变量
		_cacheParam: function() {
			var that = this;

			that._$users_module = $('#users_module').html();
			that._$users_button = $('#users_button').html();

			return that;
		},

		// 用户(添加视图)
		userAdd_view: function()
		{
			var that = this;

	        alerts.modal({
	            title: '添加用户',
	            status: 'small',
	            body: that._$users_module,
	            bottom: that._$users_button
	        });

	        return that;
		},

		// 用户(添加数据)
		userAdd_data: function()
		{
			var that = this;

			var formData = huineng.getFormData($('.modal-body .form-horizontal'));

			myajax.post({
				remoteurl: SYSTEM,
				parames: $.extend(formData,{'jump':'users','obj':'add'}),
				success:function(msg){
					if (msg['status'] == 1){
						$('.modal').modal('hide');
						toastr.success('添加用户成功!');
						table_obj.ajax.reload();
					}else{
						toastr.error('添加用户失败! 状态号: '+msg['status']);
					}
				}
			});

	        return that;
		},

		// 用户操作行为(删除、状态切换)
		userOperat_data: function(id,jobs)
		{
			var that = this;

			myajax.post({
				remoteurl: SYSTEM,
				parames: {'jump':'users','id':id,'obj':jobs},
				success:function(msg){
					if (msg['status'] == 1){
						toastr.success('用户操作成功!');
						table_obj.ajax.reload();
					}else{
						toastr.error('用户操作失败! 状态号: '+msg['status']);
					}
				}
			});

	        return that;
		}
	};

    $(function() {
        base.init();
    });
})(this, jQuery);