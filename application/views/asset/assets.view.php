<div id="page-content">
	<div class="row">
		<div class="panel" style="padding-top:12px;padding-bottom:1px;">
			<ol class="breadcrumb">
			    <li>资产管理</li>
			    <li class="active">资产列表</a></li>
			</ol>
		</div>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-bar-chart"></i>&nbsp; 资产统计图表</h3>
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
				<h3 class="panel-title"><i class="fa fa-bar-chart"></i>&nbsp; 资产列表</h3>
			</div>
			<div id="demo-custom-toolbar2" class="table-toolbar-left" style="margin-left: 20px;margin-top: 25px;">
				<button id="add-asset" class="btn btn-primary btn-labeled fa fa-plus">添加资产</button>
			</div>
			<div class="panel-body">
				<table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>任务名称</th>
							<th>扫描类型</th>
							<th>开始时间</th>
							<th>结束时间</th>
							<th>扫描进度</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>测试任务1</td>
							<td><span class="priflag label label-success">网站扫描</span></td>
							<td>2016-04-11 01:44:54</td>
							<td>2016-04-11 01:44:54</td>
							<td><div class="progress progress-striped active" data-percent="100%"><div class="progress-bar" style="width: 100%;"></div></div></td>
							<td>___</td>
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

<?php include 'asset.view.add.php'; ?>

<!--DataTables Sample [ SAMPLE ]-->
<script src="<?=base_url().'js/demo/tables-datatables.js'?>"></script>

<script type="text/javascript">
	// 添加扫描任务
	$('#add-asset').on('click',function(){
		var _html = $('#asset-view').html();
		smarttang.modal('添加资产',_html,'关闭');

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
	        text: '风险资产占比',
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
	            name:'风险资产占比',
	            type:'pie',
	            radius : '50%',
	            data:[
	                {value:335, name:'存在'},
	                {value:310, name:'不存在'},
	            ].sort(function (a, b) { return a.value - b.value}),
	            roseType: 'angle'
	        }
	    ]
	};

	cover_option = {
	    title: {
	        text: '业务分级比重',
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
	            name:'业务分级比重',
	            type:'pie',
	            radius: ['40%', '55%'],

	            data:[
	                {value:335, name:'一级'},
	                {value:310, name:'二级'},
	                {value:234, name:'三级'}
	            ]
	        }
	    ]
	};

	var myhitChart = echarts.init(document.getElementById('asset-hit-chart'));
	var mycoverChart = echarts.init(document.getElementById('asset-class-chart'));

	myhitChart.setOption(hit_option);
	mycoverChart.setOption(cover_option);


</script>