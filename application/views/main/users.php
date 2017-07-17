<section class="content-header">
  <h1>
    用户列表
    <small>所有用户的管理。</small>
  </h1>
</section>
<section class="content">
    <div class="box box-primary">
      <div class="box-header with-border">
        <div class="box-title">
          <a href="#" onclick="base.userAdd_view();" class="btn btn-block btn-primary"><i class="fa fa-user-plus"></i> 添加用户</a>
        </div>
      </div>
      <div class="box-body">
        <table id="userlist" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th><input type="checkbox" class="checkall" /></th>
            <th>用户名称</th>
            <th>邮箱</th>
            <th>创建时间</th>
            <th>最后登录</th>
            <th>当前状态</th>
            <th>操作</th>
          </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
</section>

<? 
  include getcwd().'/application/views/template/userviews.php';
?>
