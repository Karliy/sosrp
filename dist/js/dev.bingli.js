
/**
 *  bingli专属的javasctipt空间
 */

;;
var bingli;

(function() {
	bingli = {
		init: function() {
			var that = this;

			that._cacheParam();

			return that;
		},

		// 存储相应的变量
		_cacheParam: function() {
			var that = this;

			that._$webmon_module = $('#webmon_module').html();
			that._$webmon_button = $('#webmon_button').html();

			return that;
		},

		// WEB攻击防护(添加视图)
		webmonAdd_view: function()
		{
			var that = this;
			alerts.modal({
			    title: '添加监控节点',
			    status: 'small',
			    body: that._$webmon_module,
			    bottom: that._$webmon_button
			});

			// 覆盖enforcefocus功能寄存器对模态事件
			$.fn.modal.Constructor.prototype.enforceFocus = function () { };

			// 初始化下拉
			$('.modal-body select[name="module_name"]').select2();
			$('.modal-body select[name="rule_id"]').select2();

			return that;
		},

		// 添加web攻击防护(执行)
		webmonAdd_data: function(formId)
		{
			var formData = smarttang.getModal(formId);
			//console.log(formData);
			//var WAF_NODE = "http://10.1.196.112/sec-security-dashboard/index.php/bing/waf_node";
			myajax.post({
				remoteurl: WAF_NODE,
				parames: {'obj':'add','data':formData},
				success:function(msg){
					//if(msg['status'] == 1){
						console.log(msg);
					//}
				}

			});
			        // data['model_name'] = $('input[name="model_name"]').val();
			        // data['op_name'] = $('input[name="op_name"]').val();
			        // data['dev_name'] = $('input[name="dev_name"]').val();
			        // data['sec_name'] = $('input[name="sec_name"]').val();
			        // data['rule_name'] = $('input[name="rule_name"]').val();
			        // data['service_key'] = $('input[name="service_key"]').val();

			        // myajax.post({
			        //     remoteurl: "http://10.1.196.112/sec-security-dashboard/index.php/main?path=website_protection",
			        //     parames: {'obj':'add','data':data},
			        //     success: function(msg){
			        //         if (msg['status'] == 1){
			        //             // 添加成功
			        //             alert("success");
			        //         }
			        //     }
			        // });
		}
	};

$(function() {
	bingli.init();
});

})(this, jQuery);
