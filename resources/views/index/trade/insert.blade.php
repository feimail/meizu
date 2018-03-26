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
                    <h2>加入购物车成功! </h2>
                        <p class="tips">您已经成功的添加了该商品,可以进入我的购物车查看</p>
                    
                </div>
                <div class="other">
                    <div class="tr">
                        <div class="td name"></div>
                        <div class="td value">
                                    <span class="prod"> </span>
                        </div>
                    </div>
                    <div class="tr">
                        <div class="td name"></div>
                        <div class="td value">
                        
                        </div>
                    </div>
                      您可以<a href='/index/list'>继续购物</a>也可以到<a href='/index/trade/index'>购物车</a\>
                </div>
            </div>
        </div>



</body>

@endsection