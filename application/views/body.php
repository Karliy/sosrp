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


    var ctx = document.getElementById("chart-area").getContext("2d");
    window.myDoughnut = new Chart(ctx).Doughnut(doughnutData,_conf);

    var ctx1 = document.getElementById("chart-line").getContext("2d");
    window.myLine = new Chart(ctx1).Line(lineChartData,_conf);


</script>