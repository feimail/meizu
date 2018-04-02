@extends('./layup/index')

@section('css')
	<link rel="./1.css" />
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
    <script src="http://store.res.meizu.com/resources/php/store/static/common/lib/html5shiv/dist/html5shiv.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="http://store.res.meizu.com/resources/php/store/static/common/pkg/site-base.css">
    <link rel="stylesheet" href="http://store.res.meizu.com/resources/php/store/static/member/style/aio.css">
    <style type="text/css">
		#cart{
        border:none;background:#2AC4F6;cursor:pointer;color:#FFFFFF;width: 100px;height: 38px;border-radius: 5%; font-size: 14px;
    		}
    </style>
@endsection

@section('content')
	<div class="store-wrap">
    <div class="crumbs">
        <a href="http://store.meizu.com">首页></a>
        <a href="http://me.meizu.com/member/index">我的商城></a>
        <a href="http://me.meizu.com/member/advice/index" class="active">提问问题</a>
    </div>
    <div class="main clearfix">
    <div class="left-nav f-fl">
        <div class="nav-main">
            <a href="javascript:;" class="type-title"><i class="iconfont icon-orderCenter"></i>订单中心</a>
            <a href="http://ordercenter.meizu.com/list/index.html" class="ml ">我的订单</a>
            <a href="http://me.meizu.com/member/repo/index" class="ml ">我的回购单</a>
            <a href="http://insurance.meizu.com/list/insurance.html" class="ml ">我的意外保</a>
            <a href="javascript:;" class="type-title"><i class="iconfont icon-selfCenter"></i>个人中心</a>
            <a href="http://me.meizu.com/member/address/index" class="ml ">地址管理</a>
            <a href="http://me.meizu.com/member/favorite/index" class="ml ">我的收藏</a>
            <a href="http://me.meizu.com/member/message/index" class="ml ">消息提醒</a>
            <a href="http://me.meizu.com/member/advice/index" class="ml active">提问问题</a>
            <a href="javascript:;" class="type-title"><i class="iconfont icon-moneyCenter"></i>资产中心</a>
            <a href="http://me.meizu.com/member/coupon/index" class="ml ">我的优惠券</a>
            <a href="http://me.meizu.com/member/redenvelop/index" class="ml ">我的红包</a>
            <a href="http://me.meizu.com/member/repo_ticket/index" class="ml ">我的回购券</a>
            <a href="javascript:;" class="type-title"><i class="iconfont icon-serverCenter"></i>服务中心</a>
            <a href="http://store.meizu.com/member/returned/index" class="ml" style="width: 105px">退款/退换货跟踪</a>
            <a href="http://me.meizu.com/member/service/insurance" class="ml ">意外保</a>
            <a href="http://me.meizu.com/member/service/recovery" class="ml ">以旧换新</a>
        </div>
    </div>
        <div class="right-content f-fr">
            <div class="suggest-main">
                <img src="http://store.res.meizu.com/resources/php/store/static/member/image/advice-banner.jpg" alt="建议反馈">
                <div class="kf">
                    <p>如果您的问题急需处理，请咨询我们<br>  24小时全国服务热线或在线客服！</p>
                    <p class="text">24小时全国服务热线</p>
                    <p class="tel">400-788-3333</p>
                    <a class="online" href="http://live-i.meizu.com/live800/chatClient/chatbox.jsp?companyID=8957&configID=4&enterurl=http%3A%2F%2Fstore.meizu.com%2F&pagereferrer=http%3A%2F%2Fwww.meizu.com%2F&info=&k=1" target="_blank">
                        <i class="icon"><img class="lineKf" src="http://store.res.meizu.com/resources/php/store/static/member/image/kfbg.jpg"></i><i class="text">24小时在线客服</i></a>
                </div>
                <!-- <p class="Big-title">您的建议反馈是我们改进的最大动力</p> -->
                <form action="/index/wenti/add" method="post">
                    <div class="content">
                        <font color="green" size="3">商品名:{{$row['goodsname']}}</font>
                        <div class="question">
                            <span class="title">请描述您的问题:</span>
                            <textarea class="area varify " name="question"></textarea>
                        </div>
                        <!-- <div class="email">
                            <span class="title">邮箱（选填）</span>
                            <input type="text" class="self-email varify" maxlength="30">
                        </div> -->
                        <br><br>
                        {{ csrf_field()}}
                        <input type="hidden" name="goodsid" value="{{$row['goodsid']}}">
                        <input type="hidden" name="username" value="{{$row['username']}}">
                        <input type="hidden" name="goodsname" value="{{$row['goodsname']}}">
                        <input type="submit" value="提交" id="cart">
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection