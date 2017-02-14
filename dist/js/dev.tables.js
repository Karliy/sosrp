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
                    {
                        data: 'lastlogin',
                        render: function(data,type,row,meta){
                            if (data == '0000-00-00 00:00:00'){
                                return '未登录';
                            }else{
                                return data;
                            }
                        }
                    },
                    {
                        data: 'ustatus',
                        render: function(data,type,row,meta){
                            var _$html = '<small class="label ';
                            if (data == 1){
                                _$html += 'bg-green">启用';
                            }else{
                                _$html += 'bg-red">禁用';
                            }
                            return _$html + '</small>';
                        }
                    }
                ],
                obJect: [
                    {
                        targets: 6,
                        render: function(data, type, row, meta){
                            return [
                                smarttang.createButton('切换状态','fa-exchange','base.userOperat_data('+row.id+',\'status\')'),
                                smarttang.createButton('删除用户','fa-trash-o','base.userOperat_data('+ row.id +',\'delete\')')
                            ].join("");
                        }
                    }
                ]
            });   
        },
        // 漏洞扫描插件列表
        scanpluginlist: function()
        {
            this.adminTable({
                ElementId: 'scanplugins_list',
                remoteUrl: SYSTEM,
                param: {'jump':'plugins','obj':'list'},
                dataBases: [
                    {data: 'id'},
                    {data: 'vultype'},
                    {data: 'createtime'},
                    {data: 'uptime'},
                    {
                        data: 'pstatus',
                        render: function(data,type,row,meta){
                            var _$html = '<small class="label ';
                            if (data == 1){
                                _$html += 'bg-green">启用';
                            }else{
                                _$html += 'bg-red">禁用';
                            }
                            return _$html + '</small>';
                        }
                    }
                ],
                obJect: [
                    {
                        targets: 6,
                        render: function(data, type, row, meta){
                            return [
                                smarttang.createButton('查看','fa-search','base.userOperat_data('+row.id+',\'status\')'),
                                smarttang.createButton('切换状态','fa-exchange','base.userOperat_data('+row.id+',\'status\')'),
                                smarttang.createButton('更新','fa-refresh','base.userOperat_data('+row.id+',\'status\')'),
                                smarttang.createButton('删除','fa-trash-o','base.userOperat_data('+ row.id +',\'delete\')')
                            ].join("");
                        }
                    }
                ]
            });
        },
        // 初始化加载
        init: function()
        {
            this.userlist();
            this.scanpluginlist();
        }
    }
})(jQuery);