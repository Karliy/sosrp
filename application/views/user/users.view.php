<div id="page-content">
	<div class="row">
		<div class="panel" style="padding-top:12px;padding-bottom:1px;">
			<ol class="breadcrumb">
			    <li>用户管理</li>
			    <li class="active">用户列表</a></li>
			</ol>
		</div>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-bar-chart"></i>&nbsp; 用户统计图表</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-5" style="padding-left:50px;margin-top:-20px;">
						<div id="asset-hit-chart" class="pull-left" style="width: 300px;height:300px;"></div>
					</div>
					<div class="col-sm-5" style="margin-left:87px;margin-top:-30px;">
						<div id="asset-class-chart" class="pull-right" style="width: 300px;height:300px;"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-bar-chart"></i>&nbsp; 用户列表</h3>
			</div>
			<div id="demo-custom-toolbar2" class="table-toolbar-left" style="margin-left: 20px;margin-top: 25px;">
				<button id="add-user" class="btn btn-primary btn-labeled fa fa-plus">添加用户</button>
			</div>
			<div class="panel-body">
				<table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>用户全称</th>
							<th>邮箱地址</th>
							<th>创建时间</th>
							<th>最后登录时间</th>
							<th>状态</th>
							<th>权限级别</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>smarttang</td>
							<td>tangyucong@11.com</td>
							<td>2016-04-11 01:44:54</td>
							<td>2016-04-11 01:44:54</td>
							<td>未授权</td>
							<td><span class="priflag label label-success">管理员</span></td>
							<td>
								<a href="#" class="add-tooltip fa fa-check-circle-o" data-placement="top" data-toggle="tooltip" data-original-title="授权"></a>
								<a href="#" class="add-tooltip fa fa-edit" data-placement="top" data-toggle="tooltip" data-original-title="修改"></a>
								<a href="#" class="add-tooltip fa fa-trash" data-placement="top" data-toggle="tooltip" data-original-title="删除"></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!--DataTables [ OPTIONAL ]-->
<script src="<?=base_url().'plugins/datatables/media/js/jquery.dataTables.js'?>"></script>
<script src="<?=base_url().'plugins/datatables/media/js/dataTables.bootstrap.js'?>"></script>
<script src="<?=base_url().'plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js'?>"></script>

<?php include 'user.view.add.php'; ?>

<!--DataTables Sample [ SAMPLE ]-->
<script src="<?=base_url().'js/demo/tables-datatables.js'?>"></script>

<script type="text/javascript">
	// 添加扫描任务
	$('#add-user').on('click',function(){
		var _html = $('#user-view').html();
		var _button = '<button data-bb-handler="info" onclick="useradd();" type="button" class="btn btn-sm btn-success">提交</button><button data-bb-handler="success" type="button" class="btn btn-sm btn-info" data-dismiss="modal">关闭</button>';
		smarttang.modal('添加用户',_html,_button);
	});

	var asset_user_id;
  //   $("#asset_user").bsSuggest('init', {
  //   	url: OBJECT_RELATED_USERS,
  //   	idField: ['id','username'],
  //   	keyField: 'username'
  //   }).on('onSetSelectValue', function (e, keyword) {
		// asset_user_id = keyword.id;
  //   });

	$('#demo-dt-basic').dataTable( {
		"responsive": true,
		"language": {
			"paginate": {
			  "previous": '<i class="fa fa-angle-left"></i>',
			  "next": '<i class="fa fa-angle-right"></i>'
			}
		},
		"dom": '<"newtoolbar">frtip'
	} );

	hit_option = {
	    title: {
	        text: '用户活动占比',
	        left: 'center',
	        top: 30,
	        textStyle: {
	            color: '#ccc'
	        }
	    },

	    tooltip : {
	        trigger: 'item',
	        formatter: "{a} <br/>{b} : {c} ({d}%)"
	    },

	    visualMap: {
	        show: false,
	        min: 80,
	        max: 600,
	        inRange: {
	            colorLightness: [0, 1]
	        }
	    },
	    series : [
	        {
	            name:'用户活动占比',
	            type:'pie',
	            radius : '50%',
	            data:[
	                {value:335, name:'已授权'},
	                {value:223, name:'未授权'},
	            ].sort(function (a, b) { return a.value - b.value}),
	            roseType: 'angle'
	        }
	    ]
	};

	cover_option = {
	    title: {
	        text: '用户权限占比',
	        left: 'center',
	        top: 30,
	        textStyle: {
	            color: '#ccc'
	        }
	    },
	    tooltip: {
	        trigger: 'item',
	        formatter: "{a} <br/>{b}: {c} ({d}%)"
	    },
	    series: [
	        {
	            name:'用户权限占比',
	            type:'pie',
	            radius: ['40%', '55%'],

	            data:[
	                {value:335, name:'管理员'},
	                {value:110, name:'未知用户'},
	                {value:24, name:'研发'},
	                {value:24, name:'桌面'},
	                {value:234, name:'运维'}
	            ]
	        }
	    ]
	};

	var myhitChart = echarts.init(document.getElementById('asset-hit-chart'));
	var mycoverChart = echarts.init(document.getElementById('asset-class-chart'));

	myhitChart.setOption(hit_option);
	mycoverChart.setOption(cover_option);

	 $("[data-toggle='tooltip']").tooltip(); 

</script>