<div id="users_module" style="display: none;">
  <form class="form-horizontal">
      <ul class="timeline" style="margin-left:-10px;">
          <li>
            <i class="fa fa-bug bg-green"></i>
            <div class="timeline-item">
              <h3 class="timeline-header">基础信息</h3>
              <div class="timeline-body">
                  <div class="box-body" style="margin-left:-50px;">
                    <div class="form-group">
                      <label for="user_name" class="col-sm-3 control-label">登录账号</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="user_name" placeholder="字母、下划线、数字">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="pass_word" class="col-sm-3 control-label">登录密码</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" name="pass_word" placeholder="字母、特殊字符串、数字等">
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </li>
          <li>
            <i class="fa fa-500px bg-blue"></i>
            <div class="timeline-item">
              <h3 class="timeline-header">个人信息</h3>
              <div class="timeline-body">
                <form class="form-horizontal">
                  <div class="box-body" style="margin-left:-50px;">
                    <div class="form-group">
                      <label for="uname" class="col-sm-3 control-label">用户名</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="uname" placeholder="中文\英文">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email" class="col-sm-3 control-label">邮箱</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" placeholder="个人邮箱">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="status" class="col-sm-3 control-label">是否启用</label>
                      <div class="col-sm-9">
                          <select name="status" class="form-control">
                              <option value="0">未选择</option>
                              <option value="1">启用</option>
                              <option value="2">停用</option>
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
<div id="users_button" style="display: none;">
  <a class="btn btn-info" type="button" onclick="kyledong.scanodeAdd_data('#nodeadd');">提交</a><button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
</div>