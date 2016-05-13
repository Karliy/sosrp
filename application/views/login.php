<!DOCTYPE html>
<html lang="cn">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOSRP 安全平台</title>
    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="<?=base_url().'css/bootstrap.min.css'?>" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="<?=base_url().'css/nifty.min.css'?>" rel="stylesheet">

    <!--Nifty Premium Icon [ DEMO ]-->
    <link href="<?=base_url().'css/demo/nifty-demo-icons.min.css'?>" rel="stylesheet">

    
    <!--Font Awesome [ OPTIONAL ]-->
    <link href="<?=base_url().'plugins/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet">


    <!--Demo [ DEMONSTRATION ]-->
    <link href="<?=base_url().'css/demo/nifty-demo.css'?>" rel="stylesheet">


    <!--SCRIPT-->
    <!--=================================================-->

    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="<?=base_url().'plugins/pace/pace.min.css'?>" rel="stylesheet">
    <script src="<?=base_url().'plugins/pace/pace.min.js'?>"></script>
        
</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
	<div id="container" class="cls-container">
		
		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay" class="bg-img img-balloon"></div>
		
		
		<!-- HEADER -->
		<!--===================================================-->
		<div class="cls-header cls-header-lg">
			<div class="cls-brand">
				<a class="box-inline" href="index.html">
					<!-- <img alt="Nifty Admin" src="img/logo.png" class="brand-icon"> -->
					<span class="brand-title">SOSRP <span class="text-thin">安全平台</span></span>
				</a>
			</div>
		</div>
		<!--===================================================-->
		
		
		<!-- LOGIN FORM -->
		<!--===================================================-->
		<div class="cls-content">
			<div class="cls-content-sm panel">
				<div class="panel-body">
					<form action="index.html">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user"></i></div>
								<input type="text" id="username" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
								<input type="password" id="password" class="form-control">
							</div>
						</div>
						<a class="btn btn-success btn-lg btn-block" onclick="login();">登录</a>
					</form>
				</div>
			</div>
			<div class="pad-ver">
				<a href="pages-password-reminder.html" class="btn-link mar-rgt">忘记密码?</a>
				<a href="<?=site_url().'/login/register'?>" class="btn-link mar-lft">创建一个新的帐号。</a>
			</div>
		</div>
		<!--===================================================-->
		
	</div>
	<!--===================================================-->
	<!-- END OF CONTAINER -->


		
    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="<?=base_url().'js/jquery-2.2.1.min.js'?>"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="<?=base_url().'js/bootstrap.min.js'?>"></script>


    <!--Fast Click [ OPTIONAL ]-->
    <script src="<?=base_url().'plugins/fast-click/fastclick.min.js'?>"></script>

    
    <!--Nifty Admin [ RECOMMENDED ]-->
    <script src="<?=base_url().'js/nifty.min.js'?>"></script>

    <script type="text/javascript">
    	function login()
    	{
    		var username = $('#username').val();
    		var password = $('#password').val();

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
			       		$.niftyNoty({
				            type:'danger',
				            container : 'body',
				            html : '登录失败',
				            focus: false,
				            timer:1500
				        });
					}
				}
			});
    	}
    </script>

    <!--Background Image [ DEMONSTRATION ]-->
    <!-- // <script src="js/demo/bg-images.js"></script> -->

</body>
</html>
