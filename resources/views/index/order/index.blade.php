@extends('./layup.index')

@section('content')
<head>
<style>
    .sureGet .ui-pop-main .ui-pop-cont{
        line-height: 28px !important;
        margin: 64px auto 30px !important;
        padding:0 30px;
    }
    .font-14{
        font-size: 14px;
    }
    .big-font{
        font-size: 18px;
    }

</style>
<link href="/qiantai/index/aio.css" type="text/css" rel="Stylesheet"/>
<link href="/qiantai/index/site-base.css" type="text/css" rel="Stylesheet"/>
</head>
<body>

    <div class="store-wrap">
        <div class="crumbs">
            <a href="http://store.meizu.com/index.html">首页&gt;</a><a href="http://me.meizu.com/member/index">我的商城&gt;</a><a class="active" href="javascript:void()">我的订单</a>
        </div>
        <div class="main clearfix">
            <div class="left-nav f-fl">
                <div class="nav-main">
                    <a class="type-title" href="javascript:;"><i class="iconfont icon-orderCenter"></i>订单中心</a>
                    <a class="ml active" href="javascript:void()">我的订单</a>
                    <a class="ml" href="javascript:void()">我的回购单</a>
                    <a class="ml" href="javascript:void()">我的意外保</a>
                    <a class="type-title" href="javascript:;"><i class="iconfont icon-moneyCenter"></i>资产中心</a>
                    <a class="ml" href="javascript:void()">我的优惠券</a>
                    <a class="ml" href="javascript:void()">我的红包</a>
                    <a class="ml" href="javascript:void()">我的回购券</a>
                    <a class="type-title" href="javascript:;"><i class="iconfont icon-serverCenter"></i>服务中心</a>
                    <a style="width: 105px;" class="ml" href="">退款/退换货跟踪</a>
                    <a class="ml" href="javascript:void()">意外保</a>
                    <a class="ml" href="javascript:void()">以旧换新</a>
                </div>
            </div>
            <div class="right-content f-fr">
                <div class="order-main">
                    <a target="_blank" href="http://ordercenter.meizu.com/list/phone.html" class="orderSearch">找不到订单？用手机号查询试试&gt;&gt;</a>
                    <div class="type-tab-btn">
                        <a data-type="-1" class="allOrder active" href="javascript:;">全部订单</a><i class="line">|</i>
                        <a data-type="0" href="javascript:;" class="waitPay">
                            <span class="amount _actAmount"></span>
                        </a><i class="line">|</i>
                        <a data-type="1" href="javascript:;" class="waitDeliver"></a><i class="line">|</i>
                        <a data-type="2" href="javascript:;" class="hasDeliver"></a><i class="line">|</i>
                        <a data-type="99" href="javascript:;" class="other">其他</a>
                    </div>
                    <div class="list-head">
                        <ul class="clearfix">
                            <li class="w50">订单明细</li>
                            <li class="w125">商品信息</li>
                            <li class="w125">实付金额</li>
                            <li class="w125">状态</li>
                            <li class="w125">操作</li>
                        </ul>
                    </div>
                    <div class="type-contain ui-load-container" id="tableList">
                        <div class="ui-load-content"><input type="hidden" value="0" id="unPayNum">
                        	<table class="orderItem">
                                <tbody>
                                    @foreach($res as $k => $v)
                                        <tr class="trHead">
                                            <td class="title clearfix" colspan="5">
                                                <div class="f-fl">下单时间：<span class="time">{{$v->time}}</span>订单号：<span class="orderNumber">{{$v->ordernumber}}</span>
                                                </div>
                                              
                                            </td>
                                        </tr>
                                        <tr class="list-box b-l b-r b-b">
                                            <td class="list b-r">
                                                <div class="item clearfix">
                                                    <a target="_blank" href="http://detail.meizu.com/item/T1502.html" class="productDetail nameWidth">
                                                    <img class="f-fl" src="{{$v->goodsdetail}}"></a>
                                                    <div class="describe f-fl">
                                                        <div class="vertic clearfix">
                                                            <span class="clearfix">
                                                                <a target="_blank" href="" class="productDetail nameWidth">
                                                                {{$v->goodsname}} </a>
                                                                <p>￥{{$v->price}} × {{$v->number}}</p>
                                                            </span>
                                                        </div>
                                                    </div> 
                                                    <div class="seeDeliverBox">
                                                        <input type="hidden" value="false" class="isOldProduct">
                                                        <input type="hidden" value="21091728132226695030" class="orderSn">
                                                        <input type="hidden" value="21091728132226696030" class="orderSnSon">
                                                        <div class="content"></div>
                                                    </div>
                                                </div>
                                            </td>   
                                            <td class="b-r w125 center price">  
                                                <div class="priceDiv">
                                                    ￥ {{$v->totalprice}}
                                                </div>
                                            </td>  
                                            <td class="b-r w125 center state">
                                                <div class="stateDiv">
                                                    <div style="margin-bottom:5px">{{funcs($v->status)}}<br></div>
                                                </div>
                                            </td> 
                                            <td class="w125 center opreat">
                                                <ul>
                                                    <li class="more"><a href="/index/order/insert?id={{$v->id}}">收货</a></li>
                                                </ul>
                                            </td> 
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <input type="hidden" value="0" id="pageId">
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
