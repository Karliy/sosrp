<!DOCTYPE html>
<html lang="cn">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOSRP 安全平台</title>

    <?php include 'js_css/header.php' ?>
    
</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
    <div id="container" class="effect mainnav-lg">
        
        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand">
                        <div class="brand-title">
                            <span class="brand-text">SOSRP 安全平台</span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->


                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content clearfix">
                    <ul class="nav navbar-top-links pull-right">
                        <!--User dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="pull-right">
                                    <img class="img-circle img-user media-object" src="<?=base_url().'img/av1.png'?>" alt="Profile Picture">
                                </span>
                                <div class="username hidden-xs"><?=$username?></div>
                            </a>


                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">

                                <!-- User dropdown menu -->
                                <ul class="head-list">
                                    <li>
                                        <a href="#">
                                            <i class="pli-male icon-lg icon-fw"></i> 个人信息
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=site_url().'/main/logout'?>">
                                            <i class="pli-unlock icon-lg icon-fw"></i> 退出
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->


            
            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav" style="overflow: hidden;">

                    <!--Menu-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">
                                <ul id="mainnav-menu" class="list-group">
                        
                                    <!--Category name-->
                                    <li class="list-header">核心功能</li>                        
                                    <!--Menu list item-->
                                    <li class="sider-item active-link">
                                        <a href="#" onclick="_onloadUrl('body');">
                                            <i class="psi-home"></i>
                                            <span class="menu-title">
                                                <strong>大盘数据</strong>
                                            </span>
                                        </a>
                                    </li>

                                    <!--Menu list item-->
                                    <li>
                                        <a href="#">
                                            <i class="psi-pen-5"></i>
                                            <span class="menu-title">任务管理</span>
                                            <i class="arrow"></i>
                                        </a>
                        
                                        <!--Submenu-->
                                        <ul class="collapse">
                                            <li class="sider-item"><a href="#">可用性监控</a></li>
                                            <li class="sider-item"><a href="#">攻击行为监控</a></li>
                                            <li class="sider-item"><a href="#" onclick="_onloadUrl('scan');">安全扫描</a></li>
                                            <li class="sider-item"><a href="forms-wizard.html">基线检查</a></li>
                                        </ul>
                                    </li>
                                    <!--Menu list item-->
                                    <li>
                                        <a href="#">
                                            <i class="psi-split-vertical-2"></i>
                                            <span class="menu-title">
                                                <strong>日志分析</strong>
                                            </span>
                                            <i class="arrow"></i>
                                        </a>
                        
                                        <!--Submenu-->
                                        <ul class="collapse">
                                            <li class="sider-item"><a href="layouts-collapsed-navigation.html">攻击规则管理</a></li>
                                            <li class="sider-item"><a href="layouts-offcanvas-navigation.html">封禁IP管理</a></li>                                             
                                        </ul>
                                    </li>

                                    <!--Menu list item-->
                                    <li>
                                        <a href="#">
                                            <i class="psi-receipt-4"></i>
                                            <span class="menu-title">安全扫描</span>
                                            <i class="arrow"></i>
                                        </a>
                        
                                        <!--Submenu-->
                                        <ul class="collapse">
                                            <li class="sider-item"><a href="tables-static.html">插件生成</a></li>
                                            <li class="sider-item"><a href="tables-bootstrap.html">插件管理</a></li>
                                        </ul>
                                    </li>
                        
                                    <!--Menu list item-->
                                    <li>
                                        <a href="#">
                                            <i class="psi-repair"></i>
                                            <span class="menu-title">可用性监控</span>
                                            <i class="arrow"></i>
                                        </a>
                        
                                        <!--Submenu-->
                                        <ul class="collapse">
                                            <li class="sider-item"><a href="misc-calendar.html">插件管理</a></li>
                                            <li class="sider-item"><a href="misc-maps.html">服务报表管理</a></li>
                                        </ul>
                                    </li>
                        
                                    <!--Menu list item-->
                                    <li>
                                        <a href="#">
                                            <i class="psi-mail"></i>
                                            <span class="menu-title">基线检查</span>
                                            <i class="arrow"></i>
                                        </a>
                        
                                        <!--Submenu-->
                                        <ul class="collapse">
                                            <li class="sider-item"><a href="mailbox.html">插件管理</a></li>
                                            <li class="sider-item"><a href="mailbox-message.html">标准配置项</a></li>
                                        </ul>
                                    </li>
                        
                                    <!--Menu list item-->
                                    <li>
                                        <a href="#">
                                            <i class="psi-file-html"></i>
                                            <span class="menu-title">漏洞周期管理</span>
                                            <i class="arrow"></i>
                                        </a>
                        
                                        <!--Submenu-->
                                        <ul class="collapse">
                                            <li class="sider-item"><a href="pages-blank.html">外部漏洞</a></li>
                                            <li class="sider-item"><a href="pages-profile.html">内部漏洞</a></li>
                                            <li class="sider-item"><a href="pages-faq.html">规则设置</a></li>                                          
                                        </ul>
                                    </li>

                                    <!--Menu list item-->
                                    <li>
                                        <a href="#">
                                            <i class="psi-tactic"></i>
                                            <span class="menu-title">知识库管理</span>
                                            <i class="arrow"></i>
                                        </a>

                                        <!--Submenu-->
                                        <ul class="collapse">
                                            <li class="sider-item"><a href="#">Web漏洞</a></li>
                                            <li class="sider-item"><a href="#">系统漏洞</a></li>
                                        </ul>
                                    </li>

                        
                                    <li class="list-divider"></li>
                        
                                    <!--Category name-->
                                    <li class="list-header">系统功能</li>
                        
                                    <!--Menu list item-->
                                    <li>
                                        <a href="#">
                                            <i class="psi-happy"></i>
                                            <span class="menu-title">用户管理</span>
                                            <i class="arrow"></i>
                                        </a>
                        
                                        <!--Submenu-->
                                        <ul class="collapse">
                                            <li class="sider-item"><a href="#" onclick="_onloadUrl('user');">用户列表</a></li>
                                            <li class="sider-item"><a href="icons-themify.html">用户组管理</a></li> 
                                            <li class="sider-item"><a href="icons-themify.html">权限管理</a></li>                                      
                                        </ul>
                                    </li>
                                    <!--Menu list item-->
                                    <li>
                                        <a href="#">
                                            <i class="psi-happy"></i>
                                            <span class="menu-title">资产管理</span>
                                            <i class="arrow"></i>
                                        </a>
                        
                                        <!--Submenu-->
                                        <ul class="collapse">
                                            <li class="sider-item"><a href="#" onclick="_onloadUrl('asset');">资产列表</a></li>
                                            <li class="sider-item"><a>资产组列表</a></li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->
        </div>

        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">
            <!-- Visible when footer positions are static -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">SOSRP v1.0</div>

            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <p class="pad-lft">&#0169; 2016 && Smarttang</p>



        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL TOP BUTTON -->
        <!--===================================================-->
        <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
        <!--===================================================-->



    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->
    <!-- 自己构建的相应的html -->
    <?php include "my.view.php" ?>
    <!-- 自己构建的相应的html -->

    <!--JAVASCRIPT-->
    <!--=================================================-->


    <?php include 'js_css/js.php';?>
    <!-- my.bootstrap.jquery -->

    <script type="text/javascript">
        // 页面加载的时候载入
        _onloadUrl('body');

        var $sider=$('ul.list-group');

        $sider.on('click','.sider-item', function(e){
                $sider.find('.sider-item').removeClass('active-link');
                $(this).addClass('active-link');
        });

        function _onloadUrl(url)
        {
            $('#content-container').load('<?=site_url().'/main/'?>'+url);
        }
    </script>
        

</body>

</html>
