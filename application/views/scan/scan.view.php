<div style="display:none;" id="scan-view">
	<form class="form-horizontal" id="scan-add">
		<div class="panel-body form-horizontal" style="margin-left:-150px;">
			<div class="form-group">
				<label for="demo-msk-date" class="col-md-4 control-label"> *任务名称 </label>
				<div class="col-md-7">
					<input type="text" name="scan_name" class="form-control" placeholder="">
				</div>
			</div>
			<div class="form-group">
				<label for="demo-msk-date2" class="col-md-4 control-label"> *扫描类型 </label>
				<div class="col-md-7">
					<div class="pad-ver">
						<label class="form-radio form-normal form-text active"><input type="radio" id="sys" name="sys" checked=""> 系统扫描</label>
						<label class="form-radio form-normal form-text"><input type="radio" id="web" name="web"> 网站扫描</label>
					</div>
				</div>
			</div>
			<hr style="margin-left:140px;" />
			<div class="form-group">
				<label for="demo-msk-phone-ext" class="col-md-4 control-label">User Agent</label>
				<div class="col-md-7">
					<input type="text" name="scan_useranget" class="form-control" placeholder="(非必填)">
				</div>
			</div>
			<div class="form-group">
				<label for="demo-msk-taxid" class="col-md-4 control-label">Cookies</label>
				<div class="col-md-7">
					<input type="text" name="scan_cookies" class="form-control" placeholder="(非必填)">
				</div>
			</div>
		</div>
	</form>
</div>