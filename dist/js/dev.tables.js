/*
 *
 * Copyright (c) 2016
 * Author: Smarttang
 * Github: https://github.com/smarttang/
 * ======
 * 用于列表插件的汇聚
 */

var tables;
var table_obj;  // 用于刷新对象

(function(){
    
    "use strict";

    tables = {
        adminTable: function(params)
        {
            var node_bool = document.getElementById(params.ElementId);
            if (node_bool){
                table_obj = $('#'+params.ElementId).DataTable({
                  "paging": true,
                  "lengthChange": false,
                  "searching": false,
                  "ordering": true,
                  "info": true,
                  "autoWidth": false,
                  "ajax":{
                    url: params.remoteUrl,
                    type:'POST',
                    data:params.param,
                    dataSrc:function(result){
                      if (result.status == 1) {
                        return result.data;
                      }else{
                        return [];
                      }
                    }
                  },
                  "columns":params.dataBases,
                  "columnDefs":params.obJect
                });
            }
        },
        // 业务上线推送commit工单
        buglist: function()
        {
            this.adminTable({
                ElementId: 'buglist',
                remoteUrl: SYSTEM,
                dataBases: [
                    {data: 'id'},
                    {data: 'name'},
                    {data: 'type'},
                    {data: 'createtime'},
                    {data: 'status'}
                ],
                obJect: [
                    {
                        targets: 5,
                        render: function(data, type, row, meta){
                            var html ='<a data-toggle="tooltip" title="查看" class="fa fa-search" href="#" onclick="kyledong.wafruleRead_data(\''+data+'\');"></a> &nbsp; \
                                <a data-toggle="tooltip" title="存在风险" class="fa fa-life-saver" href="#" onclick="commit_worker.ob(\''+data+'\',1);"></a> &nbsp; \
                                <a data-toggle="tooltip" title="安全通过" class="fa fa-hand-peace-o" href="#" onclick="commit_worker.ob(\''+data+'\',2);"></a> &nbsp; \
                            ';
                            return html;
                        }
                    }
                ]
            });
        },
        nodelist: function()
        {
            this.adminTable({
                ElementId: 'nodelist',
                remoteUrl: SCAN_OBJ,
                param:{'obj':'node_list'},
                dataBases: [
                    {data: 'id'},
                    {data: 'node_host'},
                    {data: 'node_service'},
                    {data: 'system'},
                    {data: 'node_status'},
                    {data: 'datetime'}
                ],
                obJect: [
                    {
                        targets: 6,
                        render: function(data, type, row, meta){
                            var html ='<a data-toggle="tooltip" title="切换状态" class="fa fa-exchange" href="#" onclick="kyledong.scanodeChange_data(\''+row['id']+'\');"></a> &nbsp; \
                                <a data-toggle="tooltip" title="删除" class="fa fa-trash-o" href="#" onclick="kyledong.scanodeDelete_data(\''+row['id']+'\');"></a> &nbsp; \
                            ';
                            return html;
                        }
                    }
                ]
            });
        },
        waf_rule_list: function()
        {
            this.adminTable({
                ElementId: 'waf_rule_list',
                remoteUrl: WAF_RULE,
                param:{'obj':'waf_rule_list'},
                dataBases: [
                    {data: 'id'},
                    {data: 'name'},
                    {data: 'type'},
                    {data: 'status'}
                ],
                obJect: [
                    {
                        targets: 4,
                        render: function(data, type, row, meta){
                            var html ='<a data-toggle="tooltip" title="查看" class="fa fa-search" href="#" onclick="kyledong.wafruleRead_data(\''+row['id']+'\');"></a> &nbsp; \
                                <a data-toggle="tooltip" title="修改" class="fa fa-edit" href="#" onclick="sevent.pull(\''+row['id']+'\');"></a> &nbsp; \
                                <a data-toggle="tooltip" title="切换状态" class="fa fa-exchange" href="#" onclick="node_change(\''+row['id']+'\');"></a> &nbsp; \
                                <a data-toggle="tooltip" title="删除" class="fa fa-trash-o" href="#" onclick="node_delete(\''+row['id']+'\');"></a> &nbsp; \
                            ';
                            return html;
                        }
                    }
                ]
            });
        },
        // 初始化加载
        init: function()
        {
            this.buglist();
            this.nodelist();
            this.waf_rule_list();
        }
    }
})(jQuery);