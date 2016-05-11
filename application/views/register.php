<!DOCTYPE html>
<html lang="cn">


<!-- Mirrored from www.themeon.net/nifty/v2.4.1/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 May 2016 02:40:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOSRP 安全平台 ｜ 注册</title>

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

    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="<?=base_url().'plugins/pace/pace.min.css'?>" rel="stylesheet">
    <script src="<?=base_url().'plugins/pace/pace.min.js'?>"></script>
        
</head>

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
					<span class="brand-title">SOSRP <span class="text-thin">安全平台注册</span></span>
				</a>
			</div>
		</div>
		
		<!-- REGISTRATION FORM -->
		<!--===================================================-->
		<div class="cls-content">
			<div class="cls-content-lg panel">
				<div class="panel-body">
					<form action="http://www.themeon.net/nifty/v2.4.1/pages-login.html">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon"><i class="fa fa-male"></i></div>
										<input type="text" class="form-control" placeholder="全名.." name="name">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
										<input type="text" class="form-control" placeholder="邮箱.." name="email">
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon"><i class="fa fa-user"></i></div>
										<input type="text" class="form-control" placeholder="登录名..." name="username">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
										<input type="password" class="form-control" placeholder="密码..." name="password">
									</div>
								</div>
							</div>
						</div>
						<button class="btn btn-primary btn-lg btn-block" type="submit">注册</button>
					</form>
				</div>
			</div>
			<div class="pad-ver">
				已经有帐号了? <a href="<?=site_url().''?>" class="btn-link mar-rgt">登录平台</a>
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


    <!--Background Image [ DEMONSTRATION ]-->
    <script src="<?=base_url().'js/demo/bg-images.js'?>"></script>


</body>

</html>
