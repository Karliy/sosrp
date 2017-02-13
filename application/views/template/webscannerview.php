<div id="conventionalScan_module" style="display: none;">
  <form class="form-horizontal">
      <ul class="timeline" style="margin-left:-10px;">
          <li>
            <i class="fa fa-bug bg-green"></i>
            <div class="timeline-item">
              <h3 class="timeline-header">任务信息</h3>
              <div class="timeline-body">
                  <div class="box-body" style="margin-left:-50px;">
                    <div class="form-group">
                      <label for="target" class="col-sm-3 control-label">目标地址</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="target" placeholder="(http/https)://xxx.com/">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="threads" class="col-sm-3 control-label">并发数</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="threads" placeholder="5-30">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="ip" class="col-sm-3 control-label">IP地址</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="ip" placeholder="扫描前会确认，确保目标正确，不设置则不管.">
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </li>
          <li>
            <i class="fa fa-500px bg-blue"></i>
            <div class="timeline-item">
              <h3 class="timeline-header">扫描配置</h3>
              <div class="timeline-body">
                <form class="form-horizontal">
                  <div class="box-body" style="margin-left:-50px;">
                    <div class="form-group">
                      <label for="spider" class="col-sm-3 control-label">爬虫模式</label>
                      <div class="col-sm-9">
                          <select name="spider" class="form-control">
                              <option value="0">未选择</option>
                              <option value="1">web1.0</option>
                              <option value="2">web2.0</option>
                          </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="mode" class="col-sm-3 control-label">扫描模式</label>
                      <div class="col-sm-9">
                          <select name="mode" class="form-control">
                              <option value="0">未选择</option>
                              <option value="1">全覆盖扫描</option>
                              <option value="2">选择性扫描</option>
                          </select>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </li>
      </ul>
  </form>
</div>
<div id="conventionalScan_button" style="display: none;">
  <a class="btn btn-info" type="button" onclick="base.userAdd_data();">提交</a><button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
</div>