<div id="vulscanPlugins_module" style="display: none;">
  <form class="form-horizontal" enctype="multipart/form-data">
      <ul class="timeline" style="margin-left:-10px;">
          <li>
            <i class="fa fa-bug bg-green"></i>
            <div class="timeline-item">
              <h3 class="timeline-header">插件信息</h3>
              <div class="timeline-body">
                  <div class="box-body" style="margin-left:-50px;">
                    <div class="form-group">
                      <label for="plugintype" class="col-sm-3 control-label">插件类型</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="plugintype" placeholder="这里是一个下拉，知识库的对应的类型">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="pluginbanner" class="col-sm-3 control-label">特殊标记</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="pluginbanner" placeholder="一些特殊的标记，识别特殊的插件。">
                      </div>
                    </div>
<!--                     <div class="form-group">
                      <label for="spider" class="col-sm-3 control-label">爬虫模式</label>
                      <div class="col-sm-9">
                          <select name="spider" class="form-control">
                              <option value="0">未选择</option>
                              <option value="1">web1.0</option>
                              <option value="2">web2.0</option>
                          </select>
                      </div>
                    </div> -->
                  </div>
              </div>
            </div>
          </li>
          <li>
            <i class="fa fa-500px bg-blue"></i>
            <div class="timeline-item">
              <h3 class="timeline-header">插件上传</h3>
              <div class="timeline-body">
                <form class="form-horizontal">
                  <div class="box-body" style="margin-left:-50px;">
                    <div class="form-group">
                      <label for="mode" class="col-sm-3 control-label">插件附件</label>
                      <div class="col-sm-9">
                        <input class="filestyle" data-icon="false" name="file" data-disabled="false">
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
<div id="vulscanPlugins_button" style="display: none;">
  <a class="btn btn-info" type="button" onclick="base.userAdd_data();">提交</a><button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
</div>