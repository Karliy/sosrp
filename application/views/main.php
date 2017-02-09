<!-- html HEADER头 -->
<? include 'stencil/headers.php' ?>
<body>
    <div id="container" class="effect mainnav-lg">
        <!-- body 头部导航 -->
        <? include 'stencil/tobar.php' ?>
        <div class="boxed">

            <div id="content-container">
                <!-- 加载内容 -->
                <? include $url; ?>
            </div>

            <!-- 左边导航条 -->
            <? include 'stencil/navigation.php' ?>
        </div>

        <footer id="footer">
            <div class="hide-fixed pull-right pad-rgt">SOSRP v1.0</div>
            <p class="pad-lft">&#0169; 2016 && Smarttang</p>
        </footer>
    </div>
    <?php include "my.view.php" ?>
    <?php include 'stencil/javascript.php';?>
</body>
</html>
