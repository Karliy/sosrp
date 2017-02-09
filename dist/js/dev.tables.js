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
        // 用户列表
        userlist: function()
        {
            this.adminTable({
                ElementId: 'userlist',
                remoteUrl: SYSTEM,
                param: {'jump':'users','obj':'list'},
                dataBases: [
                    {data: 'id'},
                    {data: 'fullname'},
                    {data: 'email'},
                    {data: 'createtime'},
                    {data: 'lastlogin'},
                    {data: 'ustatus'}
                ],
                obJect: [
                    {
                        targets: 6,
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
        // 初始化加载
        init: function()
        {
            this.userlist();
        }
    }
})(jQuery);