<!DOCTYPE html>
<html lang="cn">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOSRP 安全平台</title>
	  <!-- Tell the browser to be responsive to screen width -->
	  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	  <!-- Bootstrap 3.3.6 -->
	  <link rel="stylesheet" href="<?=base_url().'dist/css/app.css'?>">
	  <!-- Font Awesome -->
	  <link rel="stylesheet" href="<?=base_url().'dist/css/font-awesome.min.css'?>">
	  <!-- Ionicons -->
	  <link rel="stylesheet" href="<?=base_url().'dist/css/ionicons.min.css'?>">
	  <link rel="stylesheet" href="<?=base_url().'dist/css/AdminLTE.css'?>">
	  <link rel="stylesheet" href="<?=base_url().'dist/css/skins/_all-skins.min.css'?>"> 
</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body class="hold-transition skin-blue sidebar-mini">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>SOSRP</b>安全平台</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <div>
        <div class="form-group has-feedback">
          <input type="username" class="form-control" name="username" placeholder="用户名">
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password" placeholder="密码">
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="public_key" placeholder="授权码">
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-xs-12">
            <center>
              <button type="submit" onclick="login();" class="btn btn-primary btn-block btn-flat">登陆平台</button>
            </center>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-box-body -->
  </div>
	<script src="<?=base_url().'plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
	<script src="<?=base_url().'dist/js/app.min.js'?>"></script>
    <script type="text/javascript">
    	function login()
    	{
    		var username = $('input[name="username"]').val();
    		var password = $('input[name="password"]').val();

			$.ajax({
				type:'POST',
				url: '<?=site_url().'/inc/check/login_in'?>',
				data: {'username':username,'password':password},
				dataType: 'json',
				timeout: 15000,
				success: function(msg){
					if (msg['status']==1){
				       location.href='<?=site_url().'/main'?>';
					}else{
						alert('登陆失败');
					}
				}
			});
    	}
    </script>
    <script color="0,0,252" opacity='0.6' zIndex="-2" count="80" src="http://cdn.bootcss.com/canvas-nest.js/1.0.1/canvas-nest.js"></script>

</body>
</html>
