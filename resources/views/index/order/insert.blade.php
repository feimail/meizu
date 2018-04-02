@extends('./layup.index')

@section('content')

<link rel="stylesheet" href="/qiantai/order/1.css"/>
<body>
    <div class="payment_header clearfix">
        <div class="icon">
            <div class="payment_icon success"></div>
        </div>
        <div class="info">
            <div class="main">
                <h2>订单提交成功,成功支付金额 <span></span> 元</h2>
                    <p class="tips">您已经成功的购买的该商品,可以进入我的订单进行查看</p>
                <p>订单号{{$red[0]['number']}}&nbsp;&nbsp;&nbsp;&nbsp;
                </p>
            </div>
            <div class="other">
                <div class="tr">
                    <div class="td name">商品</div>
                    <div class="td value">
                        <span class="prod"> {{$red[0]['goodsname']}}</span>
                    </div>
                </div>
                <div class="tr">
                    <div class="td name">收货地址</div>
                    <div class="td value"> {{getName($re[0]->sel)}} {{getName($re[0]->sels)}} {{getName($re[0]->selx)}} {{$re[0]->name}} {{$re[0]->phone}}
                    </div>
                </div>
                <a href="/index/order/index?id={{$red[0]['userid']}}">我的订单</a>
            </div>
        </div>
    </div>
</body>
@endsection