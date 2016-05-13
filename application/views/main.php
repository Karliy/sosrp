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


    <!--Animate.css [ OPTIONAL ]-->
    <link href="<?=base_url().'plugins/animate-css/animate.min.css'?>" rel="stylesheet">


    <!--Morris.js [ OPTIONAL ]-->
    <link href="<?=base_url().'plugins/morris-js/morris.min.css'?>" rel="stylesheet">


    <!--Switchery [ OPTIONAL ]-->
    <link href="<?=base_url().'plugins/switchery/switchery.min.css'?>" rel="stylesheet">


    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="<?=base_url().'plugins/bootstrap-select/bootstrap-select.min.css'?>" rel="stylesheet">


    <!--Demo script [ DEMONSTRATION ]-->
    <link href="<?=base_url().'css/demo/nifty-demo.min.css'?>" rel="stylesheet">

    <link href="<?=base_url().'plugins/pace/pace.min.css'?>" rel="stylesheet">
    <script src="<?=base_url().'plugins/pace/pace.min.js'?>"></script>
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
                <br />

                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    <!--Tiles - Bright Version-->
                    <!--===================================================-->
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                    
                            <!--Registered User-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <div class="panel media pad-all">
                                <div class="media-left">
                                    <span class="icon-wrap icon-wrap-xs bg-success">
                                        <i class="pli-computer-secure icon-3x"></i>
                                    </span>
                                </div>
                    
                                <div class="media-body">
                                    <p class="text-2x mar-no text-semibold">79212</p>
                                    <p class="text-muted mar-no">发现攻击</p>
                                </div>
                            </div>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    
                        </div>
                        <div class="col-sm-6 col-lg-3">
                    
                            <!--New Order-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <div class="panel media pad-all">
                                <div class="media-left">
                                    <span class="icon-wrap icon-wrap-xs bg-info">
                                        <i class="pli-tactic icon-3x"></i>
                                    </span>
                                </div>
                    
                                <div class="media-body">
                                    <p class="text-2x mar-no text-semibold">8439</p>
                                    <p class="text-muted mar-no">发现漏洞</p>
                                </div>
                            </div>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    
                        </div>
                        <div class="col-sm-6 col-lg-3">
                    
                            <!--Comments-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <div class="panel media pad-all">
                                <div class="media-left">
                                    <span class="icon-wrap icon-wrap-xs bg-warning">
                                        <i class="psi-repair icon-3x"></i>
                                    </span>
                                </div>
                    
                                <div class="media-body">
                                    <p class="text-2x mar-no text-semibold">12033</p>
                                    <p class="text-muted mar-no">扫描规则</p>
                                </div>
                            </div>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    
                        </div>
                        <div class="col-sm-6 col-lg-3">
                    
                            <!--Sales-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <div class="panel media pad-all">
                                <div class="media-left">
                                    <span class="icon-wrap icon-wrap-xs bg-danger">
                                        <i class="pli-coin icon-3x"></i>
                                    </span>
                                </div>
                    
                                <div class="media-body">
                                    <p class="text-2x mar-no text-semibold">6543</p>
                                    <p class="text-muted mar-no">发现宕机</p>
                                </div>
                            </div>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    
                        </div>
                    </div>
                    <!-- Flot Charts -->
                    <!--===================================================-->
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">攻击趋势图</h3>
                                </div>
                                <div class="panel-body">
                    
                                    <!--Flot Line Chart placeholder-->
                                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                    <canvas id="chart-line" width="1024" height="420"></canvas>
                                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">风险产出</h3>
                                </div>
                                <div class="panel-body">
                    
                                    <!--Flot Donut Chart placeholder -->
                                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                    <canvas id="chart-area" width="400" height="360"></canvas>
                                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--===================================================-->
                    <!-- End Flot Charts -->

					
                </div>
                <!--===================================================-->
                <!--End page content-->


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
                                    <li class="active-link">
                                        <a href="index.html">
                                            <i class="psi-home"></i>
                                            <span class="menu-title">
                                                <strong>大盘数据</strong>
                                                <span class="label label-success pull-right">Top</span>
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
                                            <li><a href="forms-general.html">可用性监控</a></li>
                                            <li><a href="forms-components.html">攻击行为监控</a></li>
                                            <li><a href="forms-validation.html">安全扫描</a></li>
                                            <li><a href="forms-wizard.html">基线检查</a></li>
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
                                            <li><a href="layouts-collapsed-navigation.html">攻击规则管理</a></li>
                                            <li><a href="layouts-offcanvas-navigation.html">封禁IP管理</a></li>                                             
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
                                            <li><a href="tables-static.html">插件生成</a></li>
                                            <li><a href="tables-bootstrap.html">插件管理</a></li>
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
                                            <li><a href="misc-calendar.html">插件管理</a></li>
                                            <li><a href="misc-maps.html">服务报表管理</a></li>
                                            
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
                                            <li><a href="mailbox.html">插件管理</a></li>
                                            <li><a href="mailbox-message.html">标准配置项</a></li>
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
                                            <li><a href="pages-blank.html">外部漏洞</a></li>
                                            <li><a href="pages-profile.html">内部漏洞</a></li>
                                            <li><a href="pages-faq.html">规则设置</a></li>                                          
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
                                            <li><a href="#">Web漏洞</a></li>
                                            <li><a href="#">系统漏洞</a></li>
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
                                            <li><a href="icons-ionicons.html">用户列表</a></li>
                                            <li><a href="icons-themify.html">用户组管理</a></li> 
                                            <li><a href="icons-themify.html">权限管理</a></li>                                      
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
                                            <li><a href="icons-ionicons.html">资产列表</a></li>
                                            <li><a href="icons-themify.html">资产组列表</a></li>
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
    
    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="<?=base_url().'js/jquery-2.2.1.min.js'?>"></script>

    <!-- Chart.bundle.js -->
    <script src="<?=base_url().'js/Chart.bundle.js'?>"></script>

    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="<?=base_url().'js/bootstrap.min.js'?>"></script>


    <!--Fast Click [ OPTIONAL ]-->
    <script src="<?=base_url().'plugins/fast-click/fastclick.min.js'?>"></script>

    
    <!--Nifty Admin [ RECOMMENDED ]-->
    <script src="<?=base_url().'js/nifty.min.js'?>"></script>


    <!--Morris.js [ OPTIONAL ]-->
    <script src="<?=base_url().'plugins/morris-js/morris.min.js'?>"></script>
	<script src="<?=base_url().'plugins/morris-js/raphael-js/raphael.min.js'?>"></script>


    <!--Sparkline [ OPTIONAL ]-->
    <script src="<?=base_url().'plugins/sparkline/jquery.sparkline.min.js'?>"></script>


    <!--Skycons [ OPTIONAL ]-->
    <script src="<?=base_url().'plugins/skycons/skycons.min.js'?>"></script>


    <!--Switchery [ OPTIONAL ]-->
    <script src="<?=base_url().'plugins/switchery/switchery.min.js'?>"></script>


    <!--Bootstrap Select [ OPTIONAL ]-->
    <script src="<?=base_url().'plugins/bootstrap-select/bootstrap-select.min.js'?>"></script>


    <!--Demo script [ DEMONSTRATION ]-->
    <script src="<?=base_url().'js/demo/nifty-demo.min.js'?>"></script>

    <script type="text/javascript">
        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };

        var config_area = {
            type: 'doughnut',
            data: {
                datasets: [
                {
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                    ],
                    backgroundColor: [
                        "#F7464A",
                        "#46BFBD",
                        "#FDB45C",
                    ]
                }],
                labels: [
                    "高危",
                    "低危",
                    "中危"
                ]
            },
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                title: {
                    display: false
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                }
            }
        };

        var lineChartData = {
            labels : ["\u654f\u611f\u4fe1\u606f\u6cc4\u9732", "\u672a\u6388\u6743\u8bbf\u95ee", "xss\u653b\u51fb", "\u5f31\u53e3\u4ee4", "\u66b4\u529b\u7834\u89e3", "SQL\u6ce8\u5165", "\u8d8a\u6743\u6f0f\u6d1e", "\u77ed\u4fe1\u8f70\u70b8", "\u7ed5\u8fc7\u9a8c\u8bc1", "\u76ee\u5f55\u904d\u5386", "\u6ce8\u518c\u8d26\u53f7\u904d\u5386"],
            datasets : [
                {
                    label: "My First dataset",
                    fillColor : "rgba(151,187,205,0.2)",
                    strokeColor : "rgba(151,187,205,1)",
                    pointColor : "rgba(151,187,205,1)",
                    pointStrokeColor : "#fff",
                    pointHighlightFill : "#fff",
                    pointHighlightStroke : "rgba(151,187,205,1)",
                    data : [22, 20, 17, 17, 16, 14, 14, 8, 6, 5,22],
                },
            ],

        }

        var doughnutData = [
            {
                value: 10,
                label: "高危",
                color: "#F7464A"
            },
            {
                value: 11,
                label: "中危",
                color: "#FDB45C"
            },
            {
                value: 9,
                label: "低危",
                color: "#46BFBD"
            }

        ];

        var _conf = {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: false
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        };

        window.onload = function(){
            var ctx = document.getElementById("chart-area").getContext("2d");
            window.myDoughnut = new Chart(ctx).Doughnut(doughnutData,_conf);

            var ctx1 = document.getElementById("chart-line").getContext("2d");
            window.myLine = new Chart(ctx1).Line(lineChartData,_conf);

        };

    </script>
        

</body>

</html>
