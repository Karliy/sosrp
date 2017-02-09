;;
/**
 *  kyledong专属的javasctipt空间
 */

var kyledong;

(function() {

	kyledong = {
		init: function() {
			var that = this;

			that._cacheParam();

			return that;
		},

		// 存储相应的变量
		_cacheParam: function() {
			var that = this;

			that._$scanode_module = $('#scannode_module').html();
			that._$scanode_button = $('#scannode_button').html();
			that._$wafrule_module = $('#wafrule_module').html();
			that._$wafrule_button = $('#wafrule_button').html();
			that._$wafrule_read_module = $('#wafrule_read_module').html();

			return that;
		},

		// 扫描节点(添加视图)
		scanodeAdd_view: function()
		{
			var that = this;
	        alerts.modal({
	            title: '添加节点',
	            status: 'small',
	            body: that._$scanode_module,
	            bottom: that._$scanode_button
	        });
	        // 获得节点服务的名称和id
			// 并且加载到列表
			myajax.post({
			  remoteurl: SCAN_OBJ,
			  parames: {'obj':'node_service'},
			  success: function(msg){
			      if (msg['status'] == 1){
			      	  $('.modal-body select[name="node_service"]').html('');

			      	  var _$html = '<option value="0">未选择</option>';
			      	  for (var item in msg.data){
			      	  	_$html +='<option value="'+msg.data[item].id +'">'+msg.data[item].name+'</option>';
			      	  }

			      	  $('.modal-body select[name="node_service"]').html(_$html);
			      }
			  }
			});
	        return that;
		},

		// 添加扫描节点(执行)
		scanodeAdd_data: function(formId)
		{
			var formData = smarttang.getModal(formId);
			myajax.post({
				remoteurl: SCAN_OBJ,
				parames: {'obj':'node_add','data':formData},
				success:function(msg){
					if (msg['status'] == 1){
					  alert('添加节点状态成功!');
					  table_obj.ajax.reload();
					}else{
					  alert('添加节点状态失败!');
					}
				}

			});
		},

		// 节点状态切换
		scanodeChange_data: function(id)
		{
		  bootbox.confirm("确定切换该节点状态么?", function(result) {
		      if (result) {
		          myajax.post({
		              remoteurl: SCAN_OBJ,
		              parames: {'obj':'node_change','id':id},
		              success: function(msg){
		                  if (msg['status'] == 1){
		                      alert('切换节点状态成功!');
		                      table_obj.ajax.reload();
		                  }else{
		                      alert('切换节点状态失败!');
		                  }
		              }
		          });
		      }
		  });
		},
		// 节点删除
		scanodeDelete_data: function(id)
		{
		  bootbox.confirm("确定删除该节点状态么?", function(result) {
		      if (result) {
		          myajax.post({
		              remoteurl: SCAN_OBJ,
		              parames: {'obj':'node_delete','id':id},
		              success: function(msg){
						if (msg['status'] == 1){
						  alert('删除节点状态成功!');
						  table_obj.ajax.reload();
						}else{
						  alert('删除节点状态失败!');
						}
		              }
		          });
		      }
		  });
		},

		// 添加waf规则(添加视图)
		wafruleAdd_view: function()
		{
			var that = this;
	        alerts.modal({
	            title: '添加waf规则',
	            status: 'small',
	            body: that._$wafrule_module,
	            bottom: that._$wafrule_button
	        });

	        return that;
		},
		// 添加waf规则(执行)
		wafruleAdd_data: function(formId)
		{
			var formData = smarttang.getModal(formId);
			myajax.post({
				remoteurl: WAF_RULE,
				parames: {'obj':'waf_rule_add','data':formData},
				success: function(msg){
					if (msg['status'] == 1){
					  alert('添加waf规则成功!');
					  table_obj.ajax.reload();
					}else{
					  alert('添加waf规则失败!');
					}
				}

			});
		},
		// 查看waf规则详细
		wafruleRead_data: function(id)
		{
			var that = this;
	        alerts.modal({
	            title: 'waf规则详情',
	            status: 'small',
	            body: that._$wafrule_read_module
	        });
	        // 根据waf的id获取详情
			// 并且将数据加载到表格
			myajax.post({
			  remoteurl: WAF_RULE,
			  parames: {'obj':'waf_rule_read','id':id},
			  success: function(msg){
			      if (msg['status'] == 1){
		      	    $("input[name='id']").val(msg.data[0].id);
                    $("input[name='name']").val(msg.data[0].name);
                    $("input[name='type']").val(msg.data[0].type);
                    $("input[name='name']").val(msg.data[0].name);
                    $("input[name='createuser']").val(msg.data[0].createuser);
                    $("input[name='status']").val(msg.data[0].status);
                    $("textarea[name='reg']").val(msg.data[0].reg);
			      }
			  }
			});
	        return that;
		},
	};

    $(function() {
        kyledong.init();
    });
})(this, jQuery);