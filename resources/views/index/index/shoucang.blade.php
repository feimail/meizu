@extends('./layup.index')

@section('css')
    <link rel="stylesheet" href="/go/gos/css/site-base.css" />
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
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/go/gos/css/site-base_1.css">
    <link rel="stylesheet" href="/go/gos/css/aio.css">
    <style type="text/css">
    #fen{ width:300px; height:50; margin-top:50px; margin-left:450px;}
    #fen li{float:left; margin-left:10px; font-size:16px;font-color:#515151;}
    #fen li a:hover{color:#64D0F9;}
    </style>
@endsection
@section('content')
    <div class="store-wrap">
        <div class="crumbs">
            <a href="/index">首页></a>
            <a href="/index">我的商城></a>
            <a href="/index/shou" class="active">我的收藏</a>
        </div>
        <div class="main clearfix">
            <div class="left-nav f-fl">
                <div class="nav-main">
                    <a href="javascript:;" class="type-title"><i class="iconfont icon-orderCenter"></i>订单中心</a>
                    <a href="/index/order/index?id={{ session('uid') }}" class="ml ">我的订单</a>
                    <a href="javascript:void(0)" class="ml ">我的回购单</a>
                    <a href="javascript:void(0)" class="ml ">我的意外保</a>
                    <a href="javascript:;" class="type-title"><i class="iconfont icon-selfCenter"></i>个人中心</a>
                    <a href="javascript:void(0)" class="ml ">地址管理</a>
                    <a href="javascript:void(0)" class="ml active">我的收藏</a>
                    <a href="javascript:void(0)" class="ml ">消息提醒</a>
                    <a href="javascript:void(0)" class="ml ">建议反馈</a>
                    <a href="javascript:;" class="type-title"><i class="iconfont icon-moneyCenter"></i>资产中心</a>
                    <a href="javascript:void(0)" class="ml ">我的优惠券</a>
                    <a href="javascript:void(0)" class="ml ">我的红包</a>
                    <a href="javascript:void(0)" class="ml ">我的回购券</a>
                    <a href="javascript:;" class="type-title"><i class="iconfont icon-serverCenter"></i>服务中心</a>
                    <a href="javascript:void(0)" class="ml" style="width: 105px">退款/退换货跟踪</a>
                    <a href="javascript:void(0)" class="ml ">意外保险</a>
                    <a href="javascript:void(0)" class="ml ">以旧换新</a>
                </div>
            </div>
            <div class="right-content f-fr">
                <div class="collect-main">
                    <div class="type-tab-btn">
                        <a href="javascript:;" class="active allOrder">已收藏商品</a>
                    </div>
                    <div id="tableList" class="type-contain clearfix">
        			    <div class="ui-load-content">
        			        <div class="clearfix">
                                @foreach($shougoods as $k=>$v)
        				           <div class="tupian item j-hover-item f-fl" style="z-index: 66;"><input class="xiang" type="hidden" value={{$v->id}}>
            					        <i data-id="10398" class="lajixiang icon-del j-icon-del"></i>
            					        <a target="_blank" href="/index/detail?id={{$v->id}}">
            					           <img alt="魅蓝 U20" src="{{ $v->img}}">
            					        </a>
                					    <a target="_blank" href="/index/detail?id={{$v->id}}">
                					        <h3>{{ $v->goodsname}}</h3>
                					    </a>
        			               </div>
                                @endforeach
        				    </div>
                            <div id="fen">
                                <b>{!! $shougoods->appends($request)->render()!!} </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script type="text/javascript" src="/go/gos/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $('.lajixiang').click(function(){
                if(!confirm('你确定删除吗?')){
                    return;
                }
                var index = $('.lajixiang').index(this);
                var id = $('.xiang').eq(index).val();
            // 发送
                $.get('/index/shou/ajaxdelete', {id:id}, function(data){
                    if(data == '1'){
                        $('.tupian').eq(index).remove();
                    }else if(data == '0'){
                        alert('删除失败');
                    }
                });
            })
        })
    </script>
 @endsection