define("member:app/script/page/collect-list",function(e){function t(){return!(!window.history||!history.pushState)}e("member:app/script/module/handlebars-helper-newPayment");var r=e("common:lib/jquery/jquery-1.11.3"),i=(e("member:app/script/handlebars"),e("member:app/script/module/cookie")),n=e("member:app/script/module/href-parameter"),a=e("member:app/script/module/isToken"),o=e("member:app/script/module/dialog"),l=e("member:app/script/module/load-data"),c=9,m=n.get("current")||1,p=(JSON.parse(decodeURIComponent(i.getCookie("MEIZUSTORESESSIONVAL"))).uid,function(e,t,i){new l({url:e,container:"#tableList",tpl:t,noListStr:"您暂无收藏的商品",sendData:{pageSize:10,current:i},pageType:"default",tplFn:null,callback:function(){var e=function(e){var t=r(".j-hover-item").length,i=r(".meiui_pagination .isPage").length,a=i-1>0?i-1:1;1>=t&&history.pushState({title:document.title},document.title,location.href.split("?")[0]+"?current="+a),e=n.get("current")||1,p(u().url,u().tpl,e)};r(".j-hover-item").on("hover",function(){r(this).css("z-index",c),c++}),r(".j-icon-del").on("click",function(){var t=r(this).attr("data-id"),l=new o("confirm");l.run({titStr:"",contStr:"确定删除该收藏的商品吗？",confirmFunc:function(){a.post({url:"/vip/favorite/cancel?itemId="+t,successCallback:function(){i=n.get("current")||1,e(i)}})}})})}})}),u=function(){var e={url:"/vip/favorite/list",tpl:'<div class="clearfix">\r\n{{#each data.resultList}}\r\n<div class="item j-hover-item f-fl">\r\n    <i class="icon-del j-icon-del" data-id={{itemId}}></i>\r\n    <a href="http://detail.meizu.com/item/{{itemNumber}}.html" target="_blank">\r\n        <img src="{{imgUrl}}" alt="{{itemName}}">\r\n    </a>\r\n    <a href="http://detail.meizu.com/item/{{itemNumber}}.html" target="_blank">\r\n        <h3>{{itemName}}</h3>\r\n    </a>\r\n</div>\r\n{{/each}}\r\n</div>'};return e};p(u().url,u().tpl,m),t()&&r(window).on("popstate",function(){m=n.get("current"),loadDate()})});