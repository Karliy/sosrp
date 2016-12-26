<div id="page-content">
	<div class="row">
		<div class="panel" style="padding-top:12px;padding-bottom:1px;">
			<ol class="breadcrumb">
			    <li>任务管理</li>
			    <li class="active">安全扫描</a></li>
			</ol>
		</div>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-bar-chart"></i>&nbsp; 扫描任务图表</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-5" style="padding-left:50px;margin-top:-20px;">
						<div id="hit-chart" class="pull-left" style="width: 300px;height:300px;"></div>
					</div>
					<div class="col-sm-5" style="margin-left:87px;margin-top:-30px;">
						<div id="cover-chart" class="pull-right" style="width: 300px;height:300px;"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-bar-chart"></i>&nbsp; 任务列表</h3>
			</div>
			<div id="demo-custom-toolbar2" class="table-toolbar-left" style="margin-left: 20px;margin-top: 25px;">
				<button id="add-scan-task" class="btn btn-primary btn-labeled fa fa-plus">添加任务</button>
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
							<td><span class="badge badge-success">扫描中</span></td>
							<td>___</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php include 'js_css/js.php'; ?>

<?php include 'scan/scan.view.php'; ?>

<script type="text/javascript">
	// 添加扫描任务
	$('#add-scan-task').on('click',function(){
		var _html = $('#scan-view').html();
		smarttang.modal('添加扫描任务',_html,'关闭');

	});

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
	        text: '扫描命中表',
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
	            name:'扫描命中率',
	            type:'pie',
	            radius : '50%',
	            data:[
	                {value:335, name:'命中'},
	                {value:310, name:'不命中'},
	            ].sort(function (a, b) { return a.value - b.value}),
	            roseType: 'angle'
	        }
	    ]
	};

	cover_option = {
	    title: {
	        text: '风险覆盖率',
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
	            name:'风险覆盖率',
	            type:'pie',
	            radius: ['40%', '55%'],

	            data:[
	                {value:335, name:'高危'},
	                {value:310, name:'中危'},
	                {value:234, name:'低危'}
	            ]
	        }
	    ]
	};

	var myhitChart = echarts.init(document.getElementById('hit-chart'));
	var mycoverChart = echarts.init(document.getElementById('cover-chart'));

	myhitChart.setOption(hit_option);
	mycoverChart.setOption(cover_option);


</script>