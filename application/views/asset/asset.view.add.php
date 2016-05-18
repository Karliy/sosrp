<div style="display:none;" id="asset-view">
	<form class="form-horizontal">
		<div class="panel-body form-horizontal" style="margin-left:-150px;">
			<div class="form-group">
				<label for="asset_name" class="col-md-4 control-label"> *资产名称</label>
				<div class="col-md-7">
					<input type="text" name="asset_name" class="form-control" placeholder="">
				</div>
			</div>
			<div class="form-group">
				<label for="asset_level" class="col-md-4 control-label"> *资产等级</label>
				<div class="col-md-7">
					<select class="form-control input-large" name="asset_level" id="form-field-select-1" style="height:30px;">
						<option value="0">请选择</option>
						<option value="1">一级</option>
						<option value="2">二级</option>
						<option value="3">三级</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="asset_url" class="col-md-4 control-label"> *资产URL</label>
				<div class="col-md-7">
					<input type="text" name="asset_url" class="form-control" placeholder="">
				</div>
			</div>
			<div class="form-group">
				<label for="asset_ip" class="col-md-4 control-label"> *资产IP</label>
				<div class="col-md-7">
					<input type="text" name="asset_ip" class="form-control" placeholder="">
				</div>
			</div>
			<div class="form-group">
				<label for="asset_type" class="col-md-4 control-label"> *资产类型</label>
				<div class="col-md-7">
					<div class="pad-ver" name="asset_type">
						<label class="form-radio form-normal active form-text"><input type="radio" name="def-w-label" checked=""> 内网</label>
						<label class="form-radio form-normal form-text"><input type="radio" name="def-w-label"> 外网</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="asset_type" class="col-md-4 control-label"> *资产归属人</label>
				<div class="col-md-7">
					<div class="pad-ver" name="asset_type">
	                   	<div class="input-group">
	                        <input type="text" name="asset_user" class="form-control" id="asset_user">
	                        <div class="input-group-btn">
	                            <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown"> 
	                                <span class="caret"></span> 
	                            </button> 
	                            <ul class="dropdown-menu dropdown-menu-right" role="menu"> 
	                            </ul> 
	                        </div> 
	                    </div> 
					</div>
				</div>
			</div>
		</div>
	</form>
</div>