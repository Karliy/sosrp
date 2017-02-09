<nav id="mainnav-container">
    <div id="mainnav" style="overflow: hidden;">
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">
                    <ul id="mainnav-menu" class="list-group">
            
                        <!--Category name-->
                        <li class="list-header">核心功能</li>                        
                        <!--Menu list item-->
                        <li class="sider-item active-link">
                            <a href="#" onclick="<?=site_url().'/main'?>">
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
                                <li class="sider-item"><a href="<?=site_url().'/main?path=scanner'?>">安全扫描</a></li>
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
                                <li class="sider-item"><a href="<?=site_url().'/main?path=users'?>">用户列表</a></li>
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
    </div>
</nav>