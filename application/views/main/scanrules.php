<section class="content-header">
  <h1>
    扫描策略
    <small>扫描测试规则、模块的管理。</small>
  </h1>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#vulscanPlugins" data-toggle="tab" aria-expanded="true">漏洞扫描插件</a></li>
          <li class=""><a href="#vulscanRules" data-toggle="tab" aria-expanded="false">漏洞扫描规则</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="vulscanPlugins">
            <section>
              <div class="box-header with-border">
                <div class="box-title">
                  <a href="#" onclick="base.vulscanPluginsAdd_view();" class="listAddbtn btn btn-block btn-primary"><i class="fa fa-search-plus"></i> 添加扫描插件</a>
                </div>
              </div>
              <table id="scanplugins_list" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>扫描插件ID</th>
                  <th>漏洞类型</th>
                  <th>创建时间</th>
                  <th>更新时间</th>
                  <th>当前状态</th>
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </section>
          </div>

          <div class="tab-pane" id="vulscanRules">
            <section class="content">
                <!-- 图表，以后弄 -->
            </section>
            <section class="content">
                <div class="box-header with-border">
                  <div class="box-title">
                    <a href="#" onclick="base.webscanAdd_view();" class="btn btn-block btn-primary"><i class="fa fa-search-plus"></i> 添加扫描规则</a>
                  </div>
                </div>
                <table id="scanrules_list" class="table table-bordered table-hover">
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
  include getcwd().'/application/views/template/scanrulesview.php';
?>
