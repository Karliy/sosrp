/*
 *
 * Copyright (c) 2016
 * Author: Smarttang
 * Github: https://github.com/smarttang/
 * ======
 * 用于主框架初始化使用
 */

var main;

(function(){
    
    "use strict";

    main = {
        init: function()
        {
			// 删除所有的active的状态
			$('.sidebar-menu li').removeClass('active');
			// 获得当前路径的对象
			var path = window.location;

			// 完整的路径
			var this_path = path.pathname + path.search;

			// 判断是不是默认的路径
			if (this_path == '/index.php/main?path=default' || this_path == '/index.php/main'){
				$('.sidebar-menu li.side-item').addClass('active');
			}else{
				// 否则则按照路径找对应的点
				var item_group = $('.sidebar-menu .treeview-menu').find('li');
				for(var i =0; i< item_group.length; i++){
					var ldom = main.getElementChildren(item_group[i],'a')[0]
					if (this_path == ldom.pathname + ldom.search){
						$(item_group[i]).addClass('active').closest("li.treeview").addClass('active');
					}
				}
			}
        },
        getElementChildren: function(ele, tagName)
        {
			if (!ele && !ele.nodeType && ele.nodeType !== 1) {
			    alert('arguments error!');
			    return;
			}

			var a = [];
			var children = ele.childNodes;
			if (tagName) { //判断一下是不是传了第二个参数
			    //alert("传入了参数");
			    if (typeof tagName != 'string') { //判断第二个参数的类型是不是正确
			        alert('第二个参数类型不对！arguments[1] is error!');
			        return;
			    }

			    for (var i = 0; i < children.length; i++) {
			        if (children.item(i).nodeType === 1 && children.item(i).tagName.toLowerCase() == tagName.toLowerCase()) {
			            a.push(children.item(i));
			        }
			    }

			} else { //没有传第二个参数，则这样做（既不用考虑标记名）
			    for (var i = 0; i < children.length; i++) {
			        if (children.item(i).nodeType === 1) {
			            a.push(children.item(i))
			        }
			    }

			}
			return a; //最终返回的这个数值，就是ele的所有
        }
    }
})(jQuery);

