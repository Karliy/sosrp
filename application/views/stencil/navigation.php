<header class="main-header">
  <!-- Logo -->
  <a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">SOSRP</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>SOSRP</b>安全平台</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Notifications: style can be found in dropdown.less -->
        <li class="dropdown notifications-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-envelope-o"></i>
            <span class="label label-success">4</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 10 notifications</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                <li>
                  <a href="#">
                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                    page and may cause design problems
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-users text-red"></i> 5 new members joined
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-user text-red"></i> You changed your username
                  </a>
                </li>
              </ul>
            </li>
            <li class="footer"><a href="#">View all</a></li>
          </ul>
        </li>
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?=base_url().'dist/img/user2-160x160.jpg'?>" class="user-image" alt="User Image">
            <span class="hidden-xs"><?=$username?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?=base_url().'dist/img/user2-160x160.jpg'?>" class="img-circle" alt="User Image">

              <p>
                Alexander Pierce - Web Developer
                <small>Member since Nov. 2012</small>
              </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
              <div class="row">
                <div class="col-xs-4 text-center">
                  <a href="#">Followers</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">Sales</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">Friends</a>
                </div>
              </div>
              <!-- /.row -->
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="<? site_url().'/main/logout'?>" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?=base_url().'dist/img/user2-160x160.jpg'?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?=$username?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="side-item active">
        <a href="<?=site_url().'/main?path=default'?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-calendar-plus-o"></i>
          <span>安全防护</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?=site_url().'/main?path=reptile'?>"><i class="fa fa-circle-o"></i> 反网页爬虫</a></li>
          <li><a href="<?=site_url().'/main?path=website_protection'?>"><i class="fa fa-circle-o"></i> WEB攻击防护</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-eye-slash"></i>
          <span>安全测试</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?=site_url().'/main?path=web_vulscan'?>"><i class="fa fa-circle-o"></i> 网站漏洞扫描</a></li>
          <li><a href="<?=site_url().'/main?path=port_vulscan'?>"><i class="fa fa-circle-o"></i> 端口威胁扫描</a></li>
          <li><a href="<?=site_url().'/main?path=pass_vulscan'?>"><i class="fa fa-circle-o"></i> 弱口令扫描</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-wrench"></i>
          <span>系统管理</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?=site_url().'/main?path=users'?>"><i class="fa fa-circle-o"></i> 用户管理</a></li>
          <li><a href="<?=site_url().'/main?path=roles'?>"><i class="fa fa-circle-o"></i> 角色管理</a></li>
          <li><a href="<?=site_url().'/main?path=bugs'?>"><i class="fa fa-circle-o"></i> BUG管理</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>