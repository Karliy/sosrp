<section class="content-header">
  <h1>
    网站漏洞扫描
    <small>基于网站的漏洞扫描。</small>
  </h1>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#conventionalScan" data-toggle="tab" aria-expanded="true">常规漏洞扫描</a></li>
          <li class=""><a href="#ruleScan" data-toggle="tab" aria-expanded="false">规则漏洞扫描</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="conventionalScan">
            <section class="content">
                <div class="row">
                  <div class="col-sm-6">
                    <p>风险类型统计 <code>top10</code></p>
                    <div id="conventionalScan_typecount" style="min-width:400px;min-height:300px"></div>
                  </div>
                  <div class="col-sm-6">
                    <p>风险级别统计 <code>高、中、低分布</code></p>
                    <div id="conventionalScan_levelcount" style="min-width:400px;min-height:300px"></div>
                  </div>
                </div>
            </section>
            <section class="content">
                <div class="box-header with-border">
                  <div class="box-title">
                    <a href="#" onclick="base.webscanConventAdd_view();" class="btn btn-block btn-primary"><i class="fa fa-search-plus"></i> 添加网站扫描</a>
                  </div>
                </div>
                <table id="webscan_list" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>扫描任务ID</th>
                    <th>扫描节点</th>
                    <th>创建时间</th>
                    <th>完成时间</th>
                    <th>当前状态</th>
                    <th>操作</th>
                  </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
            </section>
          </div>

          <div class="tab-pane" id="ruleScan">
            <section class="content">
                <!-- 图表，以后弄 -->
            </section>
            <section class="content">
                <div class="box-header with-border">
                  <div class="box-title">
                    <a href="#" onclick="base.webscanAdd_view();" class="btn btn-block btn-primary"><i class="fa fa-search-plus"></i> 添加网站扫描</a>
                  </div>
                </div>
                <table id="zwebscan_list" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>扫描任务ID</th>
                    <th>扫描节点</th>
                    <th>创建时间</th>
                    <th>完成时间</th>
                    <th>当前状态</th>
                    <th>操作</th>
                  </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<? 
  include getcwd().'/application/views/template/webscannerview.php';
?>
