<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>魅族商城-提供魅族 PRO 系列、MX系列、魅蓝note系列、魅蓝metal系列的手机，配件和智能硬件的预约和购买。</title>
    <meta name="description" content="魅族商城是魅族面向全国服务的官方电商平台，提供魅族 PRO 系列、MX系列、魅蓝note系列和魅蓝metal系列的手机，配件和智能硬件的预约和购买。官方正品，全国联保，全场包邮，7天无理由退货，15天换货保障。">
    <meta name="keywords" content="魅族官方在线商店、魅族在线商城、魅族官网在线商店、魅族商城、魅族、魅族手机">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/go/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="/go/images/favicon.ico" rel="icon" type="image/x-icon">
    <!-- common css -->
@section('css')
    <link rel="stylesheet" href="/go/css/site-base_1.css" />
    <!--[if lt IE 9]>
    <script>
        var c = ["log","debug","info","warn","exception","assert","dir","dirxml","trace","group","groupCollapsed","groupEnd","profile","profileEnd","count","clear","time","timeEnd","timeStamp","table","error"];
        window.console = {};
        for(var i = 0; i < c.length; i++){
            window.console[c[i]] = function(){

            }
        }
    </script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="/go/js/html5shiv.min_1.js"></script>
    <![endif]-->
<link rel="stylesheet" href="/go/css/pkg-home_1.css"/>
<link rel="stylesheet" href="/go/css/1.css"/>
<style type="text/css">
    #youlian {color: #333;}
</style>
@show
</head>
<body>
<!-- common header -->


    <!--小广告-->
    
<div class="site-topbar clearfix">
    <div class="mzcontainer">
        <div class="topbar-nav">
        <a href="/index/"  data-mdesc="页头中第1个">魅族商城</a>
        
        
        </div>
        <div class="topbar-right">
            <ul class="topbar-info">
               <li class="topbar-info-msg" id="MzTopbarMsg" style="display: list-item;">
              <a class="topbar-link" href="/index/trade/index">我的购物车</a>
              <span class="msg-tag" id="MzMsgTag" style="display: inline;"></span>
            </li>
                <li>
                    <a class="topbar-link" href="/index/shou">我的收藏<div class="topbar-new">new</div></a>
                </li>
                <li class="topbar-order-msg">
                    <a class="topbar-link" href="/index/order/index?id={{session('uid')}}">我的订单</a>
                    <span class="msg-tag" id="MzOrderMsgTag"></span>
                </li>
                @if(empty(session('uid')))
                <li class="mz_login">
                    <a class="topbar-link "
                       href="/index/gologin"
                       data-href="">登录</a>
                </li>
                <li class="mz_login">
                    <a class="topbar-link" 
                    href="index/register">注册</a>
                </li>
                 @else
                <li class="topbar-info-member" >
                    <a class="topbar-link" href="/index/ucenter/edit">
                        <span id="MzUserName" class="site-member-name">{{ session('username')}}</span>
                    </a>
                    <div class="site-member-items">
                        <a class="site-member-link" href="/index/address?id={{session('uid')}}" data-mdesc="我的商城下拉框2">地址管理</a>
                        <a class="site-member-link" href="javascript:void()" data-mtype="store_index_yt_9_3" data-mdesc="我的商城下拉框3">问题反馈</a>
                        <a class="site-member-link site-logout"
                           href="/index/indexLogout"
                           data-href=""
                           data-mtype="" data-mdesc="我的商城下拉框4">退出</a>
                    </div>
                </li>
                @endif
            </ul>
            <div class="topbar-info-pop"></div>
        </div>
    </div>
</div><div class="site-header">
    <div class="mzcontainer">
        <div class="header-logo">
            <a href="/index">
                <img src="#"
                     srcset="{{$logo->headlogo}}"
                     width="115"
                     height="20"
                     alt="魅族科技"  data-mdesc="logo"/>
            </a>
        </div>
        <div class="header-nav">
            <ul class="nav-list">
                    <li class="nav-item">
                        <a class="nav-item-link" href="/go/javascrip:" onclick="return false"
                          >PRO手机</a>
                        <div class="nav-item-children">
                            <ul class="menu-product-list">
                                    @foreach($rea2 as $k=>$v)
                                        <li class="menu-product-item">
                                            <a href="/index/detail?id={{ $v->id}}"
                                               data-mtype=""
                                               data-mdesc="">
                                                <div class="menu-product-figure">

                                                    <img src="/go/picture/init-1x1_1.jpg"
                                                         data-src="{{$v->img}}" width="100" height="150"/>

                                                </div>
                                                <p class="menu-product-name">{{ $v->goodsname}}</p>
                                                <p class="menu-product-price">

                                                    &yen;
                                                    <span>{{$v->price}}</span>

                                                </p>
                                            </a>
                                        </li>
                                  @endforeach
                                     

                                <!-- more -->
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item-link" href="/go/javascrip:" onclick="return false"
                          >魅蓝手机</a>
                        <div class="nav-item-children">
                            <ul class="menu-product-list">
                                  @foreach($rea4 as $k=>$v)
                                        <li class="menu-product-item">
                                            <a href="/index/detail?id={{ $v->id}}"
                                               data-mtype="store_index_dh_1_1"
                                               data-mdesc="导航中第1个下第1个坑">
                                                <div class="menu-product-figure">
                                                    <img src="/go/picture/init-1x1_1.jpg"
                                                         data-src="{{$v->img}}" width="100" height="150"/>
                                                </div>
                                                <p class="menu-product-name">{{ $v->goodsname}}</p>
                                                <p class="menu-product-price">

                                                    &yen;
                                                    <span>{{$v->price}}</span>

                                                </p>
                                            </a>
                                        </li>
                                     @endforeach   
                                <!-- more -->
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item-link" href="/go/javascrip:" onclick="return false">MX手机</a>
                        <div class="nav-item-children">
                            <ul class="menu-product-list">
                                       @foreach($rea6 as $k=>$v)
                                         <li class="menu-product-item">
                                            <a href="/index/detail?id={{ $v->id}}" data-mdesc="导航中第1个下第1个坑">
                                                <div class="menu-product-figure">
                                                    <img src="/go/picture/init-1x1_1.jpg"
                                                         data-src="{{$v->img}}" width="100" height="150"/>
                                                </div>
                                                <p class="menu-product-name">{{ $v->goodsname}}</p>
                                                <p class="menu-product-price">

                                                    &yen;
                                                    <span>{{$v->price}}</span>

                                                </p>
                                            </a>
                                        </li>
                                     @endforeach  
                                <!-- more -->
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item-link" href="/go/javascrip:" onclick="return false"
                          >精选配件</a>
                        <div class="nav-item-children">
                            <ul class="menu-product-list">
                                      @foreach($rea8 as $k=>$v)
                                         <li class="menu-product-item">
                                            <a href="/index/detail?id={{ $v->id}}"
                                               
                                               data-mdesc="导航中第1个下第1个坑">
                                                <div class="menu-product-figure">
                                                    <img src="/go/picture/init-1x1_1.jpg"
                                                         data-src="{{$v->img}}" width="100" height="150"/>
                                                </div>
                                                <p class="menu-product-name">{{ $v->goodsname}}</p>
                                                <p class="menu-product-price">

                                                    &yen;
                                                    <span>{{$v->price}}</span>

                                                </p>
                                            </a>
                                        </li>
                                     @endforeach  
                                <!-- more -->
                                    <li class="menu-product-more">
                                        <div class="menu-more-links">
                                            <ul>
                                                    <li class="menu-more-row"><a href="http://lists.meizu.com/page/list?categoryid=79&rc=sdsd"><img
                                                            src="/go/picture/1467696166-40112_1.png" class="menu-more-img" width="28"
                                                            height="28"/>耳机 / 音箱</a>
                                                    </li>
                                                    <li class="menu-more-row"><a href="http://lists.meizu.com/page/list?categoryid=80&rc=sd"><img
                                                            src="/go/picture/1467696197-95413_1.png" class="menu-more-img" width="28"
                                                            height="28"/>路由器 / 移动电源</a>
                                                    </li>
                                                    <li class="menu-more-row"><a href="http://lists.meizu.com/page/list?categoryid=81&rc=sd"><img
                                                            src="/go/picture/1467696220-57637_1.png" class="menu-more-img" width="28"
                                                            height="28"/>保护套 / 后盖 / 贴膜</a>
                                                    </li>
                                                    <li class="menu-more-row"><a href="http://lists.meizu.com/page/list?categoryid=82&rc=sd"><img
                                                            src="/go/picture/1467696242-24236_1.png" class="menu-more-img" width="28"
                                                            height="28"/>数据线 / 电源适配器</a>
                                                    </li>
                                                    <li class="menu-more-row"><a href="http://lists.meizu.com/page/list?categoryid=83&rc=sd"><img
                                                            src="/go/picture/1467705893-97644_1.png" class="menu-more-img" width="28"
                                                            height="28"/>周边配件</a>
                                                    </li>
                                            </ul>
                                        </div>
                                    </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item-link" href="/go/javascrip:" onclick="return false"
                          >智能硬件</a>
                        <div class="nav-item-children">
                            <ul class="menu-product-list">
                                        @foreach($rea10 as $k=>$v)
                                         <li class="menu-product-item">
                                            <a href="/index/detail?id={{ $v->id}}"
                                              
                                               data-mdesc="导航中第1个下第1个坑">
                                                <div class="menu-product-figure">
                                                    <img src="/go/picture/init-1x1_1.jpg"
                                                         data-src="{{ $v->img}}" width="100" height="150"/>
                                                </div>
                                                <p class="menu-product-name">{{ $v->goodsname}}</p>
                                                <p class="menu-product-price">

                                                    &yen;
                                                    <span>{{$v->price}}</span>

                                                </p>
                                            </a>
                                        </li>
                                      @endforeach 
                                        
                                <!-- more -->
                            </ul>
                        </div>
                    </li>
            </ul>
        </div>

        <div class="header-cart" id="MzHeaderCart">
            <a href="http://store.meizu.com/cart">
                <div class="header-cart-wrap">
                    <span class="header-cart-icon"></span>
                    购物车
                    <span id="MzHeaderCartNum" class="header-cart-num" data-extcls="existence">0</span>
                    <div class="header-cart-spacer"></div>
                </div>
            </a>
            <div class="header-cart-detail">

            </div>
        </div>
    </div>
    <div id="MzNavMenu" class="header-nav-menu">
        <div class="mzcontainer">

        </div>
    </div>
</div>
<!-------------------------------------------- 头部------------------------------------------------------>
@section('content')


@show

<!-- common footer -->
<!-------------------------------------------- 底部部-------------------------------------------------------->
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
                <h4 class="footer-nav-title"><a href="index/youlian/add" id="youlian">友情链接</a></h4>
                <ul>
                    @foreach($youlian as $k=>$v)
                    @if($k<4)
                    <li><a href="{{$v->url}}">{{$v->name}}</a></li>
                   @endif
                    @endforeach
                

                </ul>
            </div>
            <div class="footer-nav-custom">
                <h4 class="nav-custom-title">24小时全国服务热线</h4>
                <a href="/go/tel:400-788-3333"><h3 class="nav-custom-number">400-788-3333</h3></a>
                <a  class="nav-custom-btn" href="/go/javascript:void(0);" onclick="window.open('http://live-i.meizu.com/live800/chatClient/chatbox.jsp?companyID=8957&configID=4&enterurl='+ encodeURIComponent(document.URL) + '&pagereferrer=' + encodeURIComponent(document.referrer) + '&info=&k=1', '_blank','height=775,width=1200,fullscreen=3,top=100,left=100,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=no,location=no,titlebar=no,fullscreen=no');">
                    <img src="/go/picture/20x21xiaoshi_1.png" width="20" height="21">
                    24小时在线客服
                </a>
            </div>
        </div>
        <div class="site-footer-end">
            <p>
                &copy;2016 Meizu Telecom Equipment Co., Ltd. All rights reserved.
                <a href="" hidefocus="true">备案号：粤ICP备13003602号-2</a>
                <a href="" hidefocus="true">经营许可证编号：粤B2-20130198</a>
                <a href="" hidefocus="true">营业执照</a>
                <a rel="nofollow" href="" hidefocus="true">
                    <img src="/go/picture/footer-copy-1_1.png">
                </a>
                <a rel="nofollow" href="" hidefocus="true">
                    <img src="/go/picture/footer-copy-2_1.png">
                </a>
                <a rel="nofollow" href= hidefocus="true">
                    <img src="/go/picture/trust-icon_1.png">
                </a>
            </p>
        </div>
    </div>
</div>

@section('js')
    



<script charset="utf-8" src="/go/js/site-lib_1.js"></script>
<script charset="utf-8" src="/go/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
      
   //定义下标
    var index = 0;

    var into = null;
    
    function autoRun(){
        //定时器
        into = setInterval(function(){
            //下标累加
            shows(index++);
            // 判断循环
            if(index > 4){

                index = 0;
            }

        },2000)
    }
    autoRun();
    

    function shows(i)
    {
        //获取第一个图片元素
        $('#uls li').eq(i).show();
        $('#uls li').eq(i).siblings().hide();
        // console.log($('#uls li').eq(i));
        //获取圆点的下标显示颜色
        $('#dis li').eq(i).addClass('cur');
        $('#dis li').eq(i).siblings().removeClass('cur');

    }
    shows(0);

    //鼠标放上去 离开
    $('#dis li').hover(function(){

        //获取下标索引
        index = $(this).index();

        //console.log(res);
        shows(index++);

        clearInterval(into);

    },function(){
        //调用运行定时器
        autoRun();
        //判断最后一张移除
        if(index >4){
            index =0;
        }
    })


</script>
<script type="text/javascript" src="/go/js/site-base_1.js"></script>
<script>var $=require("common:lib/jquery/jquery-1.11.3");require("common:lib/jquery/jquery-migrate-1.2.1"),window.$=$,window.jQuery=$,window.jquery=$,$(function(){require("common:widgets/site-topbar/topbar"),require("common:widgets/site-header/header")});</script><script type="text/javascript" src="/go/js/pkg-home_1.js"></script>
<script charset="utf-8">var $=require("common:lib/jquery/jquery-1.11.3");
$(function(){
    require("home:widgets/settlement-ad/settlement-ad"),
    require("home:widgets/home-slider/home-slider"),
    require("home:widgets/home-recommend/home-recommend"),
    require("home:widgets/home-category/home-category"),
    require("home:widgets/home-gotop/home-gotop"),
    require("home:js/jquery.lazyload/jquery.lazyload"),
    $("img.home-img-lazy").lazyload({})
});
</script>
<script>
    var __mzt = __mzt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "http://sccom.res.meizu.com/js/analytics-min.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

<script type="text/javascript" charset="utf-8">
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = ('https:' == document.location.protocol ? 'https://tongji-res.meizu.com' : 'http://tongji-res1.meizu.com') + '/resources/tongji/flow.js';
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

<script type="text/javascript">
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?2a0c04774115b182994cfcacf4c122e9";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

@show

</body>
</html>

