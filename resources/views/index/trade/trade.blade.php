 <!DOCTYPE html>
<html>
  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script charset="utf-8" src="/qiantai/order/v.js"></script>
    <meta charset="utf-8">
    <title>购物车-魅族商城</title>
    <meta name="description" content="魅族商城是魅族面向全国服务的官方电子商务平台,提供魅族PRO系列、魅族MX系列和魅蓝系列等产品的预约和购买.官方正品,全国联保.">
    <meta name="keywords" content="魅族官方在线商店、魅族在线商城、魅族官网在线商店、魅族商城">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="" rel="shortcut icon" type="image/x-icon">
    <link href="" rel="icon" type="image/x-icon">
    <!-- common css -->
    <link rel="stylesheet" href="/qiantai/order/site-base.css">
    <!--[if lt IE 9]>
      <script>var c = ["log", "debug", "info", "warn", "exception", "assert", "dir", "dirxml", "trace", "group", "groupCollapsed", "groupEnd", "profile", "profileEnd", "count", "clear", "time", "timeEnd", "timeStamp", "table", "error"];
        window.console = {};
        for (var i = 0; i < c.length; i++) {
          window.console[c[i]] = function() {

}
        }</script>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="http://store.res.meizu.com/resources/php/store/static/common/lib/html5shiv/dist/html5shiv.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/qiantai/order/add.css" type="text/css" charset="UTF-8">
  <style>
    .num {
      text-align:center;
      width:30px;
    }


  </style>
  </head>
  <body>
    <!-- common header -->
    <div class="site-topbar clearfix">
      <div class="mzcontainer">
        <div class="topbar-nav">
          <a href="" data-mtype="store_index_yt_1" data-mdesc="页头中第1个">魅族官网</a>
          <a href="" data-mtype="store_index_yt_2" data-mdesc="页头中第2个">魅族商城</a>
          <a href="" data-mtype="store_index_yt_3" data-mdesc="页头中第3个">Flyme</a>
          <a href="" data-mtype="store_index_yt_4" data-mdesc="页头中第4个">专卖店</a>
          <a href="" data-mtype="store_index_yt_5" data-mdesc="页头中第5个">服务</a>
          <a href="" data-mtype="store_index_yt_6" data-mdesc="页头中第6个">社区</a></div>
        <div class="topbar-right">
          <ul class="topbar-info">
            <li class="topbar-info-msg" id="MzTopbarMsg" style="display: list-item;">
              <a class="topbar-link" href="/index/trade/index">我的购物车</a>
              <span class="msg-tag" id="MzMsgTag" style="display: inline;"></span>
            </li>
            <li>
              <a class="topbar-link" href="/index/shou">我的收藏
                <div class="topbar-new">new</div></a>
            </li>
            <li class="topbar-order-msg">
              <a class="topbar-link" href="/index/order/index?id={{session('uid')}}">我的订单</a>
              <span class="msg-tag" id="MzOrderMsgTag" style="display: inline;"></span>
            </li>
            @if(!session('uid'))
            <li class="mz_login">
              <a class="topbar-link " href="/index/gologin" > 登录 </a>
            </li>
            <li class="mz_login">
              <a class="topbar-link" href="/index/register" target="">注册</a>
            </li>
            @else
              <li class="topbar-info-member">
                <a class="topbar-link" href="javascript:void(0)">
                  <span id="MzUserName" class="site-member-name">{{ session('username')}}</span></a>
                <div class="site-member-items">
                  <a class="site-member-link" href="/index/address?id={{session('uid')}}" data-mtype="store_index_yt_9_1" data-mdesc="我的商城下拉框1">地址管理</a>
                  <a class="site-member-link" href="javascript:void()">我的回购券</a>
                  <a class="site-member-link" href="javascript:void()">问题反馈</a>
                  <a class="site-member-link site-logout" href="/index/indexLogout" data-href="" data-mtype="store_index_yt_9_4" data-mdesc="我的商城下拉框4">退出</a>
                </div>
              </li>
            @endif
          </ul>
          <div class="topbar-info-pop">
            
          </div>
        </div>
      </div>
    </div>
    <div class="site-header">
      <div class="mzcontainer">
        <div class="header-logo">
          <a href="">
            <img src="/qiantai/order/logo-header.png" srcset=""></a>
        </div>
      
        <div class="header-cart" id="MzHeaderCart">
          <a href="">
            <div class="header-cart-wrap">
              <span class="header-cart-icon"></span>购物车
              <span id="MzHeaderCartNum" class="header-cart-num" data-extcls="existence">0</span>
              <div class="header-cart-spacer"></div>
            </div>
          </a>
          <div class="header-cart-detail">
            <div class="header-cart-empty" data-load="正在加载购物车信息 ..." data-empty="购物车还没有商品，快购买吧！">购物车还没有商品，快购买吧！</div></div>
        </div>
      </div>
     
    </div>
    
    <div class="order">
        <div class="mzcontainer order-header clearfix">
            <div class="order-title">购物车</div>
            <ul class="order-bread clearfix">
                <li class="order-bread-module active">购物车</li>
                <li class="order-bread-module ">确认订单</li>
                <li class="order-bread-module">在线支付</li>
                <li class="order-bread-module">完成</li>
            </ul>
        </div>
        <div class="mzcontainer order-product">
            <form  action="/index/trade/order" method="post" enctype="multipart/form-data">
                <div class="order-product-list">
                    <table cellspacing="0" cellpadding="0">
                        <thead>
                          <tr>
                            <th width="40px">选中</th>
                            <th class="order-product-table-name">
                              <div class="order-product-supplier">
                                <span class="order-product-supplier-name">方式</span>
                                <div class="order-product-supplier-tips"></div></div>
                            </th>
                            <th class="order-product-table-price">单价</th>
                            <th class="order-product-table-num">数量</th>
                            <th class="order-product-table-total">小计</th>
                            <th class="order-product-table-express">操作</th></tr>
                        </thead>
                        <tbody>
                            @foreach($res as $k=>$v)
                            <tr>
                                <td width="" align="center">
                                    <input type="checkbox" class="chbox" name="cart_id[]" value="{{$v['id']}}">
                                </td>
                                <td class="order-product-table-name">
                                    <img src="{{$v['info']->img}}" class="order-product-image">
                                    <div class="order-product-name">
                                        <a href="#" class="order-product-link">{{$v['goodsname']}} {{$v['type']}}
                                        <br>{{$v['color']}}
                                        </a>
                                    </div>
                                </td>
                                <td class="order-product-table-price">
                                    <p> </p>
                                    <span class="order-product-price">{{$v['price']}}</span>
                                </td>
                                <td class="order-product-table-num">
                                    <input type="button" value="-" class="minus">
                                    <input type="number" step="1" min="1" name="number[]" value="{{$v['number']}}" class="num" />
                                    <input type="button" value="+" class="plus">
                                </td>
                                <td class="order-product-table-total">
                                    <p class="order-product-price red">{{$v['number']*$v['price']}}</p>
                                </td>
                                <td class="order-product-table-express" rowspan="1">
                                    @if(session('uid'))
                                        <a href="/index/trade/delete?id={{$v['id']}}">删除</a> 
                                    @else
                                        <a href="/index/trade/delete?id={{$k}}">删除</a>    
                                    @endif
                                    <div class="order-product-arrival"></div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td align="center"></td>
                                <td colspan="5" color="red" >
                                    <div class="order-product-info">
                                        <div class="order-product-invoice clearfix">
                                            <div class="order-product-invoice-type"></div>
                                            <div class="order-product-invoice-title"></div>
                                        </div>
                                    </div>
                                    <div class="order-product-total">合计：¥
                                        <span class="order-total-price red"></span>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="mzcontainer order-total clearfix">
                    <div class="order-total-content">
                        <div class="order-total-line"></div>
                        <div class="order-total-row">应付：¥
                            <div class="order-total-price total"></div>
                        </div>
                        {{csrf_field()}}
                        <div class="order-total-row">
                            <div class="btn">
                                <button class="btn" id='jiesuan'>结算</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
       
    <div class="site-footer">
        <div class="mzcontainer">
            <div class="site-footer-service">
                <ul class="clearfix">
                    <li class="service-item">
                      <span class="service-icon service-icon-seven"></span>
                      <p class="service-desc">
                        <span class="service-desc-bold">7天</span>
                        <span class="service-desc-normal">无理由退货</span>
                      </p>
                    </li>
                    <li class="service-split-line">
                      <span></span>
                    </li>
                    <li class="service-item">
                      <span class="service-icon service-icon-fifty"></span>
                      <p class="service-desc">
                        <span class="service-desc-bold">15天</span>
                        <span class="service-desc-normal">换货保障</span>
                      </p>
                    </li>
                    <li class="service-split-line">
                      <span></span>
                    </li>
                    <li class="service-item">
                      <span class="service-icon service-icon-one"></span>
                      <p class="service-desc">
                        <span class="service-desc-bold">1年</span>
                        <span class="service-desc-normal">免费保修</span>
                      </p>
                    </li>
                    <li class="service-split-line">
                      <span></span>
                    </li>
                    <li class="service-item">
                      <span class="service-icon service-icon-speed"></span>
                      <p class="service-desc">
                        <span class="service-desc-bold">百城</span>
                        <span class="service-desc-normal">速达</span>
                      </p>
                    </li>
                    <li class="service-split-line">
                      <span></span>
                    </li>
                    <li class="service-item">
                      <span class="service-icon service-icon-by"></span>
                      <p class="service-desc">
                        <span class="service-desc-bold">全场</span>
                        <span class="service-desc-normal">包邮</span>
                      </p>
                    </li>
                    <li class="service-split-line">
                      <span></span>
                    </li>
                    <li class="service-item">
                      <span class="service-icon service-icon-map"></span>
                      <p class="service-desc">
                        <span class="service-desc-bold">2000多家</span>
                        <span class="service-desc-normal">专卖店</span>
                      </p>
                    </li>
                </ul>
            </div>
            <div class="site-footer-navs clearfix">
                <div class="footer-nav-item">
                    <h4 class="footer-nav-title">帮助说明</h4>
                    <ul>
                        <li><a href="">支付方式</a></li>
                        <li><a href="">配送说明</a></li>
                        <li><a href="">售后服务</a></li>
                        <li><a href="">付款帮助</a></li>
                    </ul>
                </div>
                <div class="footer-nav-item">
                    <h4 class="footer-nav-title">Flyme</h4>
                    <ul>
                        <li><a href="">开放平台</a></li>
                        <li><a href="">固件下载</a></li>
                        <li><a href="">软件商店</a></li>
                        <li><a href="">查找手机</a></li>
                    </ul>
                </div>
                <div class="footer-nav-item">
                    <h4 class="footer-nav-title">关于我们</h4>
                    <ul>
                        <li><a href="">关于魅族</a></li>
                        <li><a href="">加入我们</a></li>
                        <li><a href="">联系我们</a></li>
                        <li><a href="">法律声明</a></li>
                    </ul>
                </div>
                <div class="footer-nav-item">
                    <h4 class="footer-nav-title">关注我们</h4>
                    <ul>
                        <li><a href="">新浪微博</a></li>
                        <li><a href="">腾讯微博</a></li>
                        <li><a href="">QQ空间</a></li>
                        <li>
                            <a class="meizu-footer-wechat">
                                官方微信
                                <img src="/order/weixin.png" alt="微信二维码">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-nav-custom">
                    <h4 class="nav-custom-title">24小时全国服务热线</h4>
                    <a href="tel:400-788-3333"><h3 class="nav-custom-number">400-788-3333</h3></a>
                    <a class="nav-custom-btn" href="javascript:void(0);" onclick="">
                        <img src="./order/20x21xiaoshi.png" width="20" height="21">
                        24小时在线客服
                    </a>
                </div>
            </div>
            <div class="site-footer-end">
                <p>
                    ©2016 Meizu Telecom Equipment Co., Ltd. All rights reserved.
                    <a href="">备案号：粤ICP备13003602号-2</a>
                    <a href="" hidefocus="true">经营许可证编号：粤B2-20130198</a>
                    <a href="" hidefocus="true">营业执照</a>
                    <a rel="nofollow" href="" hidefocus="true">
                        <img src="./order/footer-copy-1.png">
                    </a>
                    <a rel="nofollow" href="" hidefocus="true">
                        <img src="./order/footer-copy-2.png">
                    </a>
                    <a rel="nofollow" href="" hidefocus="true">
                        <img src="./order/trust-icon.png">
                    </a>
                </p>
            </div>
        </div>
    </div>

    <script src="/qiantai/order/hm.js"></script>
    <script src="/qiantai/order/flow.js"></script>
    <script src="/qiantai/order/analytics-min.js"></script>
    <script charset="utf-8" src="/qiantai/order/site-lib.js"></script>
    <script type="text/javascript" src="/qiantai/order/site-base.js"></script>
    <script>var $ = require("common:lib/jquery/jquery-1.11.3");
      require("common:lib/jquery/jquery-migrate-1.2.1"),
      window.$ = $,
      window.jQuery = $,
      window.jquery = $,
      $(function() {
        require("common:widgets/site-topbar/topbar"),
        require("common:widgets/site-header/header")
      });</script>
    
    <script src="/qiantai/order/add.js"></script>
    <div class="mz-downmenu"></div>
    <div class="mz-downmenu"></div>
    <div class="mz-downmenu"></div>
    <div class="mz-downmenu"></div>
    <!-- end content -->
    <!-- common footer -->
    <script type="text/javascript" src="/qiantai/ucenter/jquery-1.8.3.min.js">
   
    </script>
      <script>
    
     $('.plus').click(function (){
      //做加法获取数量的值
      var v = $(this).prev().val();
      v++;
      $(this).prev().val(v);
      //单价*数量
      //获取单价
      var price = parseInt($(this).parents('tr').find('td').eq(2).find('.order-product-price').html());
      //获取总价
      var rmb = price*v;
      $(this).parents('tr').find('td').eq(4).find('.order-product-price').html(rmb);
     
      total();
     })

     //减法
     $('.minus').click(function (){
      //做加法获取数量的值
      var v = $(this).next().val();
      v--;
      if(v<=0){
        v=1;
      }
      $(this).next().val(v);
      //单价*数量
      //获取单价
      var price = parseInt($(this).parents('tr').find('td').eq(2).find('.order-product-price').html());
      //获取总价
      var rmb = price*v;
      $(this).parents('tr').find('td').eq(4).find('.order-product-price').html(rmb);
    
      total();

     })


     //点击多选框
     $('.chbox').click(function(){

          total();

      })
     
     function total(){
      var tot = 0;
      $('input[type=checkbox]:checked').each(function(){
        //获取金额
        var jine = parseInt($(this).parents('tr').find('td').eq(4).find('.order-product-price').html());

        tot += jine;
     })
     $('.order-total-price').html(tot);
     }

  
    $("input[name='a']").click(function(){
    //判断当前点击的复选框处于什么状态$(this).is(":checked") 返回的是布尔类型
    if($(this).is(":checked")){
    $("input[name='b']").prop("checked",true);
    }else{
    $("input[name='b']").prop("checked",false);
    }
    });
    </script>
    <script charset="utf-8" src="/qiantai/order/site-lib(1).js"></script>
    <script type="text/javascript" src="/qiantai/order/site-base(1).js"></script>
  </body>

</html>
