<!DOCTYPE html>
<!-- saved from url=(0043)http://ordercenter.meizu.com/order/add.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script charset="utf-8" src="/qiantai/order//v.js"></script>
    <meta charset="utf-8">
    <title>订单-魅族商城</title>
    <meta name="description" content="魅族商城是魅族面向全国服务的官方电子商务平台,提供魅族PRO系列、魅族MX系列和魅蓝系列等产品的预约和购买.官方正品,全国联保.">
    <meta name="keywords" content="魅族官方在线商店、魅族在线商城、魅族官网在线商店、魅族商城">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="" rel="shortcut icon" type="image/x-icon">
    <link href="" rel="icon" type="image/x-icon">
    <!-- common css -->
    <link rel="stylesheet" href="/qiantai/order/site-base.css">
    
	<link rel="stylesheet" href="/qiantai/order/add.css" type="text/css" charset="UTF-8">
	<style>
    	.order-address-add {
            display: none;
        }
        #num {
          text-align:center;
          width:30px;
        }
        #zhifu {
            font-size: 15px;
        }
        #biankuang {
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
        <a href="" data-mtype="store_index_yt_6" data-mdesc="页头中第6个">社区</a>
        </div>
        <div class="topbar-right">
            <ul class="topbar-info">
                <li class="topbar-info-msg" id="MzTopbarMsg" style="display: list-item;">
                    <a class="topbar-link" href="/index/trade/index">我的购物车</a>
                    <span class="msg-tag" id="MzMsgTag" style="display: inline;"></span>
                </li>
                <li>
                    <a class="topbar-link" href="">我的收藏<div class="topbar-new">new</div></a>
                </li>
                <li class="topbar-order-msg">
                    <a class="topbar-link" href="/index/order/index?id={{session('uid')}}">我的订单</a>
                    <span class="msg-tag" id="MzOrderMsgTag" style="display: inline;"></span>
                </li>
                <li class="mz_login" style="display: none;">
                    <a class="topbar-link site-login" href="" data-href="https://login.flyme.cn/vCodeLogin?sid=unionlogin&amp;service=store&amp;autodirct=true&amp;useruri=http://store.meizu.com/member/login.htm?useruri=">登录</a>
                </li>
                <li class="mz_login" style="display: none;">
                    <a class="topbar-link" href="r">注册</a>
                </li>
                <li class="topbar-info-member" style="">
                    <a class="topbar-link" href="">
                        <span id="MzUserName" class="site-member-name">{{ session('username')}}</span>
                    </a>
                    <div class="site-member-items">
                        <a class="site-member-link" href=" /index/address?id={{session('uid')}}" data-mtype="store_index_yt_9_2" data-mdesc="我的商城下拉框2">地址管理</a>
                        <a class="site-member-link" href="" data-mtype="store_index_yt_9_3" data-mdesc="我的商城下拉框3">问题反馈</a>
                        <a class="site-member-link site-logout"
                           href="/index/indexLogout"
                           data-href=""
                           data-mtype="" data-mdesc="我的商城下拉框4">退出</a>
                    </div>
                    <div class="site-member-items">
                        
                    </div>
                </li>
            </ul>
            <div class="topbar-info-pop"><div id="MzMsgPop"><a class="title" href="" data-mtype="store_index_yt_qp" data-mdesc="气泡">912魅友节，全场五折起</a><div class="triangle"></div><div class="close"></div></div></div>
        </div>
    </div>
</div>

    <div class="mzcontainer order-address" id="addressModule">
            <div class="order-address-title">
                收货人信息
                <div class="order-address-title-tips" id="orderAddressHasOldTips">
                   
                </div>
            </div>
            <!------------     ------------>
         @foreach($address as $k=>$v)
        <ul class="order-address-list clearfix" id="biankuang">
            <li class="order-address-checkbox ">
                <div class="order-address-checkbox-top">
                    <div class="order-address-checkbox-name" title="许世吹">{{$v->name}}</div>
                    <div class="order-address-checkbox-phone">{{$v->phone}}</div>
                </div>
                <div class="order-address-checkbox-content">{{getName($v->sel)}}{{getName($v->sels)}}{{getName($v->selx)}}{{$v->dtaddress}}</div>
            </li>
        </ul>
        @endforeach

        @if(!$address)
            <div class="kai"  >
                <div class="order-address-add-icon" id="addressOpenBtn">
                    <div class="order-address-add-horizontal"></div>
                    <div class="order-address-add-vertical"></div>
                </div>
                <form action="/index/dress" method="post">
                    <input type="hidden" name="uid" value="{{session('uid')}}">
                    <div class="order-address-form open" id="addressForm">
                        <div class="order-address-row clearfix">
                            <div class="order-address-row-title">收件人</div>
                            <div class="order-address-row-content">
                                <input type="text" name="name" class="order-address-input" placeholder="长度不超过12个字" maxlength="12" id="addressFormName">
                            </div>
                            <div class="order-address-row-tips"></div>
                        </div>
                        <div class="order-address-row clearfix">
                            <div class="order-address-row-title">手机</div>
                            <div class="order-address-row-content">
                                <input type="text" name="phone" class="order-address-input" placeholder="请输入11位手机号" maxlength="11" id="addressFormPhone">
                            </div>
                            <div class="order-address-row-tips"></div>
                        </div>
                        <!--   ----   地址    ----       -->
                        <div class="order-address-row clearfix">
                            <div class="order-address-row-title">地址</div>
                            <div class="order-address-row-content mz-citys" >
                                <select class="mz-selectmenu" name="sel" id="down" style='width:100px'>
                                    <option value="0">请选择</option>
                                </select>
                                <select class="mz-selectmenu" name="sels" id="downs" style='width:100px'>
                                    <option value="0">请再选择</option>
                                </select>
                                <select class="mz-selectmenu" name="selx" id="downx" style='width:100px'>
                                    <option value="0">还请选择</option>
                                </select><br>
                            </div>
                            <div class="order-address-row-tips"></div>
                        </div>
                      

                        <!-------      结束    详细        ------>
                        <div class="order-address-row clearfix">
                            <div class="order-address-row-title"></div>
                            <div class="order-address-row-content">
                                <span class="order-address-prefix"  data-prefix=""  id="addressFormPrefix"></span>
                                <input type="text" class="order-address-input" name="dtaddress" placeholder="请输入详细地址" maxlength="50" id="addressFormDetail">
                            </div>
                            <div class="order-address-row-tips"></div>
                        </div>
                        <div class="order-address-row clearfix">
                            <div class="order-address-row-title"></div>
                            <div class="order-address-row-content">
                                <div class="btn" >
                                    <button class="btn" >保存并使用</button>
                                </div> 
                                <div class="btn cancel" id="addressFormCancel">取消</div>
                                {{ csrf_field() }}
                            </div>
                        </div>
                    </div>  
                </form>
            </div>
         @endif
    </div>
</div>

<div class="site-header">
      <div class="mzcontainer">
        <div class="header-logo">
          <a href="">
            <img src="/qiantai/order/logo-header.png" srcset="" width="115" height="20" alt="魅族科技" data-mtype="store_index_dh_logo" data-mdesc="logo"></a>
        </div>
      </div>
     
    </div>

    <div class="order">
        <div class="mzcontainer order-header clearfix">
            <div class="order-title">订单</div>
            <ul class="order-bread clearfix">
                <li class="order-bread-module active">购物车</li>
                <li class="order-bread-module active ">确认订单</li>
                <li class="order-bread-module active ">在线支付</li>
                <li class="order-bread-module">完成</li>
            </ul>
      </div>
        
      <div class="mzcontainer order-product">
      <form  action="/index/order/insert" method="post" enctype="multipart/form-data" >
        <div class="order-product-list">
               
          <table cellspacing="0" cellpadding="0">
            <thead>
              <tr>
                <th class="order-product-table-name">
                    <div class="order-product-supplier">
                        <span class="order-product-supplier-name">方式</span>
                        <div class="order-product-supplier-tips"></div>
                    </div>
                </th>
                <th class="order-product-table-price">单价</th>
                <th class="order-product-table-num">数量</th>
                <th class="order-product-table-total">小计</th>
                <th class="order-product-table-express">运费</th>
            </tr>
            </thead>
            
            <tbody>
                @foreach($res as $k=>$v)
                    <tr>
                        <td class="order-product-table-name">
                            <img src="{{$v['img']}}" class="order-product-image">
                            <div class="order-product-name">
                                <a href="#" class="order-product-link" ><span>{{$v['goodsname']}}</span> <span>{{$v['type']}}</span>
                                <br>{{$v['color']}}</a>
                            </div>
                           <input type="hidden" name="cart_id[]" value="{{$v['id']}}" >
                           <input type="hidden" name="goodsdetail[]" value="{{$v['img']}}" >
                           <input type="hidden" name="goodsname[]" value="{{$v['goodsname']}}{{$v['color']}}" >   
                           <input type="hidden" name="good_id[]" value="{{$v['good_id']}}" >   
                        </td>
                        <td class="order-product-table-price">
                            <p></p>
                            <span class="order-product-price">{{$v['price']}}</span>
                        </td>
                        <input type="hidden" name="price[]" value="{{$v['price']}}" >
                        <td class="order-product-table-num">
                             <input type="text"  disabled  value="{{$v['number']}}" id="num" />
                             <input type="hidden" name="number[]"   value="{{$v['number']}}"  />
                        </td>
                        <td class="order-product-table-total">
                            <p class="order-product-price red">{{$v['number']*$v['price']}}</p>
                        </td>
                        <input type="hidden" name="totalprice[]" value="{{$v['number']*$v['price']}}">
                        <td class="order-product-table-express" rowspan="1">
                            <span color="red">¥ 0.00</span>   
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
                                <div class="order-product-invoice-type"><!-- 全选中 -->
                                </div>
                                <div class="" id="zhifu">
                                   <input type="radio" name="paytype" >支付宝
                                   <input type="radio" name="paytype" >财付通
                                   <input type="radio" name="paytype" value="facai" >facai
                                </div>
                            </div>
                        </div>
                        <div class="order-product-total">支付方式
                            <span class="order-total-price red"></span>
                        </div>
                    </td>
                </tr>
            </tfoot>
          </table>
        </div>
      </div>
      
       <!-- @show -->
      
      <div class="mzcontainer order-total clearfix">
        <div class="order-total-content">
          
          <div class="order-total-line"></div>
          <div class="order-total-row">应付：¥
            <div class="order-total-price total">{{$res[0]['totalMoney']}}</div></div>
         {{csrf_field()}}
          <div class="order-total-row">
            <div class="btn">
              <button class="btn">提交订单</button></div>
          </div>
        </div>
      </div>
    </form>
    </div>
    

<script src="/qiantai/order//hm.js"></script><script src="/qiantai/order//flow.js"></script><script src="/qiantai/order//analytics-min.js"></script><script charset="utf-8" src="/qiantai/order//site-lib.js"></script>
<script type="text/javascript" src="/qiantai/order//site-base.js"></script>

<script>var $=require("common:lib/jquery/jquery-1.11.3");require("common:lib/jquery/jquery-migrate-1.2.1"),window.$=$,window.jQuery=$,window.jquery=$,$(function(){require("common:widgets/site-topbar/topbar"),require("common:widgets/site-header/header")});</script>
    <script>
        var global = {
            data : {"address":{"activeAddressId":5676522203000,"addressList":[{"address":"育荣教育园区","area":"昌平区","areaId":3138,"city":"北京市","cityId":2912,"completeAddress":"北京北京市昌平区回龙观地区育荣教育园区","createTime":1473085203000,"dbId":5676522,"id":5676522203000,"isDefault":0,"isOld":0,"province":"北京","provinceId":2911,"receiver":"许世吹","telNumber":"13888679809","town":"回龙观地区","townId":3144,"updateTime":1473085203000,"userId":127480312,"zipCode":"102200"}],"useAppointAddr":0},"buyInfoList":[{"fastArrival":{"arrivalDate":1473415200871,"fastArrivalStatus":2,"payDate":1473332400871},"merchantExpressFee":0.00,"merchantId":1,"merchantName":"魅族","merchantTotalMoney":199.00,"skuInfo":[{"cspuDesc":"银色","image":"http://storeimg.meizu.com/product/1449643778-41533.png","itemId":10018,"itemName":"魅族EP-31耳机","itemUrl":"http://detail.meizu.com/item/EP31.html","merchantId":1,"merchantName":"魅族","name":"魅族EP-31耳机银色","number":1,"originPrice":199.00,"payMoney":199.00,"price":199.00,"reduceMoney":0.00,"skuId":142,"skuInfoBoList":[],"supportFastArrival":true,"totalOriginPrice":199.00,"totalPrice":199.00,"type":1}],"supportFastArrival":true}],"refererUrl":"http://detail.meizu.com/item/EP31.html?skuid=142","skus":"[{\"merchantId\":1,\"skus\":[{\"id\":142,\"num\":1}]}]","sourceTime":"1473302513800","sysTime":1473302513862,"totalExpressFee":0.00,"totalOrderMoney":199.00,"totalOrderPayMoney":199.00,"uid":127480312,"verifyRule":"sid=69e82b1f-b367-43e6-9eca-c6163abed9d1&type=mix&len=4","verifySid":"69e82b1f-b367-43e6-9eca-c6163abed9d1"}
        };
    </script>
    <script src="/qiantai/order//add.js"></script><div class="mz-downmenu"></div><div class="mz-downmenu"></div><div class="mz-downmenu"></div><div class="mz-downmenu"></div>
<!-- end content -->

<!-- common footer -->

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
                            <img src="/qiantai/order//weixin.png" alt="微信二维码">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-nav-custom">
                <h4 class="nav-custom-title">24小时全国服务热线</h4>
                <a href=""><h3 class="nav-custom-number">400-788-3333</h3></a>
                <a class="nav-custom-btn" href="javascript:void(0);" onclick="window.open(&#39;http://live-i.meizu.com/live800/chatClient/chatbox.jsp?companyID=8957&amp;configID=4&amp;enterurl=&#39;+ encodeURIComponent(document.URL) + &#39;&amp;pagereferrer=&#39; + encodeURIComponent(document.referrer) + &#39;&amp;info=&amp;k=1&#39;, &#39;_blank&#39;,&#39;height=775,width=1200,fullscreen=3,top=100,left=100,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=no,location=no,titlebar=no,fullscreen=no&#39;);">
                    <img src="/qiantai/order//20x21xiaoshi.png" width="20" height="21">
                    24小时在线客服
                </a>
            </div>
        </div>
        <div class="site-footer-end">
            <p>
                ©2016 Meizu Telecom Equipment Co., Ltd. All rights reserved.
                <a href="" hidefocus="true">备案号：粤ICP备13003602号-2</a>
                <a href="" hidefocus="true">经营许可证编号：粤B2-20130198</a>
                <a href="" hidefocus="true">营业执照</a>
                <a rel="nofollow" href="" hidefocus="true">
                    <img src="/qiantai/order//footer-copy-1.png">
                </a>
                <a rel="nofollow" href="" hidefocus="true">
                    <img src="/qiantai/order//footer-copy-2.png">
                </a>
                <a rel="nofollow" href="" hidefocus="true">
                    <img src="/qiantai/order//trust-icon.png">
                </a>
            </p>
        </div>
    </div>
</div>
<script type="text/javascript" src="/qiantai/ucenter/jquery-1.8.3.min.js"></script>
<script>

    $('.order-address-checkbox').click(function(){
          $(this).attr('class','order-address-checkbox checked');
      })
     $('.order-address-checkbox').dblclick(function(){
          $(this).attr('class','order-address-checkbox');
      })

    //第一级省的遍历
    $.get('/index/dress',function(data){
        //判断
        var str = "<option value='0'>请选择</option>";
        if(data) {   
            
            for(var i=0;i<data.length;i++) {
                str += "<option value='"+data[i].id+"'>"+data[i].name+"</option>";
            }
            $('#down').html(str);
        }

    })

    //当省级下拉框失去焦点时获取去下拉框中的值(通过值[也就是省级的id来查它底下的市级城市])
    $('select[name=sel]').blur(function(){
        //获取失去焦点时下拉框中的值
        var sel = $(this).val();
        //发送ajax
        $.get('/index/dress/'+sel,function(data){
            var strs = "<option value='0'>请再选择</option>";
            if(data) {   
                for(var i=0;i<data.length;i++) {
                    strs += "<option value='"+data[i].id+"'>"+data[i].name+"</option>";
                }
                $('#downs').html(strs);
            }
        })  
    })

    //当市级城市下拉失去焦点时
    $('select[name=sels]').blur(function(){
        var sels  = $(this).val();
        //发送ajax
        $.get('/index/dress/'+sels,function(data){
            var strx = "<option value='0'>还请选择</option>";
            if(data) {   
                for(var i=0;i<data.length;i++) {
                    strx += "<option value='"+data[i].id+"'>"+data[i].name+"</option>";
                }
                $('#downx').html(strx);
            }
        })
    })
</script>

<script charset="utf-8" src="/qiantai/order//site-lib(1).js"></script>
<script type="text/javascript" src="/qiantai/order//site-base(1).js"></script>
<script>var $=require("common:lib/jquery/jquery-1.11.3");require("common:lib/jquery/jquery-migrate-1.2.1"),window.$=$,window.jQuery=$,window.jquery=$,$(function(){require("common:widgets/site-topbar/topbar"),require("common:widgets/site-header/header")});</script>
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

</body></html>