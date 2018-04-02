@extends('./layup/index')

@section('css')
	<link rel="stylesheet" href="/go/css3/site-base.css" />
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
    <script src="/go/js3/html5shiv.min.js"></script>
    <![endif]-->
<link rel="stylesheet" href="/go/css3/main-4fc753f.css">
<style type="text/css">
    *{padding:0px;margin:0px;list-style:none;}
     a{
        cursor: pointer;
    }
    #web .web{
        border:solid 2px #00C3F5;
    }
    #color .color{
        border:solid 2px #00C3F5;
    }
    #type .type{
        border:solid 2px #00C3F5;
    }
    #taocan .taocan{
        border:solid 2px #00C3F5;
    }
    
    #cart{
        border:none;background:#2AC4F6;cursor:pointer;color:#FFFFFF;width: 148px;height: 40px;border-radius: 5%; font-size: 14px;
    }
    #siteGotop{position: absolute;top: 1000px;left: 1180px;}
    /*.dingbu{width: 44px; height: 44px; background: #b4b4b4;cursor: pointer;text-align: center;position: relative; top: 500px; left: 500px;}
    #imgs{ margin-top: 13px;}*/

</style>
@endsection

@section('content')
    <!-- 回到顶部 -->
    <a href="top"></a>
	<main class="wrapper">
        
            <div class="container">
                <section class="crumbs clearfix">
                            <a data-mtype="store_de_mbx_1" href="/index">首页</a>&nbsp;&gt;&nbsp;
                            <a class="ellipsis crumbs-title">{{$res->goodsname}}</a>
                </section>
                <section class="row">
                    <div class="preview" id="preview">
                        <div class="preview-booth" id="small">
                            <!-- 获取大图 -->
                            
                                <img src="{{$res->img}}" height="375" width="375" alt="" id='smallImg'>
                        </div>
                        <ul class="preview-thumb clearfix" id="ulss">
                                @foreach($row['pic'] as $k=>$v)
                                <li >
                                    <a data-mtype="store_de_tp_3" ><img src="{{$v}}" width="75" height="75"></a>
                                </li>
                                @endforeach
                        </ul>
                    </div>
                    <form action="/index/trade/insert" method="post">
                    <div class="property" id="property">
                            <div class="property-hd">
                                <h1>{{$res->goodsname}}</h1>
                                <p class="mod-info ">{{$res->desc}}</p>
                            </div>
                            <div class="property-sell">
                                <dl class="property-sell-price clearfix">
                                    <dt class="vm-metatit" id="J_discountTag">价<span class="s-space"></span><span
                                            class="s-space"></span>格：
                                    </dt>
                                    <dd>
                                        <div class="mod-price">
                                            <small>¥</small>
                                            <span id="J_price" class="vm-money">{{$res->price}}.00</span>
                                        </div>
                                        <div class="mod-original" id="J_originalPrice" style="display:none;"></div>
                                        <div class="mod-activity">
                                        </div>
                                        <div class="mod-countdown" id="J_discountCountDown" style="display:none;">
                                        </div>
                                    </dd>
                                </dl>
                                <dl class="property-sell-coupon clearfix" id="J_prodPromo" style="display:none;">
                                    <dt class="vm-metatit">领<span class="s-space"></span><span class="s-space"></span>券：
                                    </dt>
                                    <dd>
                                        <p id="J_promoInner">
                                        </p>
                                        <a class="vm-more" id="J_promoMore" href="/go/#">更多></a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="property-set">
                                    <dl class="property-set-sale" data-property="网络类型">
                                        <dt class="vm-metatit">网络类型：</dt>
                                        <dd class="clearfix" id="web">
                                                <!-- 获取网络类型 -->
                                                @foreach($row['web'] as $k=>$v)
                                                <a data-value="14:18238" data-mtype="store_de_sp_1_1"title="全网通公开版">{{$v}}</a>
                                                @endforeach
                                        </dd>

                                    </dl>
                                    <dl class="property-set-sale" data-property="颜色分类">
                                        <dt class="vm-metatit">颜色分类：</dt>
                                        <dd class="clearfix" id="color">
                                                @foreach($row['color'] as $k=>$v)
                                                <a data-value="3:11"
                                                   class="vm-sale-img"data-mtype= {{$v}}  title= {{$v}} ><img src="/go/picture3/color.png" width="20" height="33"><span>{{$v}}</span></a>
                                                @endforeach
                                        </dd>
                                    </dl>
                                    <dl class="property-set-sale" data-property="机身内存">
                                        <dt class="vm-metatit">机身内存：</dt>
                                        <dd class="clearfix" id="type">
                                                <!-- 获取内存 -->
                                                @foreach($row['type'] as $k=>$v)
                                                <a data-value="13:36" data-mtype="store_de_sp_3_1" title="16GB">{{$v}}</a>
                                                @endforeach
                                        </dd>
                                    </dl>
                                    <dl class="property-set-sale" data-property="机身内存">
                                        <dt class="vm-metatit">套餐：</dt>
                                        <dd class="clearfix" id="taocan">
                                            <!-- 获取内存 -->
                                            @foreach($row['taocan'] as $k=>$v)
                                            <a data-value="13:36" data-mtype="store_de_sp_3_1" title="16GB">{{$v}}</a>
                                            @endforeach
                                        </dd>
                                    </dl>
                            </div>
                            <div class="property-service">
                                    <dl class="property-service-item clearfix">
                                        <dt class="vm-metatit">支<span class="s-space"></span><span class="s-space"></span>持：
                                        </dt>
                                        <dd class="mod-bd" id="J_prodService">
                                            <span><i class="icon icon-service"></i>顺丰包邮</span>
                                            <span><i class="icon icon-service"></i>7天无理由退货</span>
                                        </dd>
                                    </dl>
                                <dl class="property-service-provider clearfix">
                                    <dt class="vm-metatit">服<span class="s-space"></span><span class="s-space"></span>务：
                                    </dt>
                                    <dd class="clearfix">
                                        <span id="J_installmentInfo"></span>本商品由 魅族
                                        负责发货
                                        ，并由 魅族 提供售后服务
                                    </dd>
                                </dl>
                            </div>
                            <!-- 提示信息 -->
                            @if(session('error'))
                            <div class="property-service">
                                <dl class="property-service-item clearfix">
                                    <dt class="vm-metatit"><b><font color="red">提<span class="s-space"></span><span class="s-space"></span>示：</font></b>
                                    </dt>
                                    <dd class="mod-bd" id="J_prodService">
                                            <span><font color="red">{{session('error')}}</font></span>
                                    </dd>
                                </dl>
                            </div>
                            @endif
                            <div class="property-buy">
                                <p class="vm-message" id="J_message"> </p>
                                <dl class="property-buy-quantity">
                                    <dt class="vm-metatit">数<span class="s-space"></span><span class="s-space"></span>量：
                                    </dt>
                                    <dd class="clearfix">
                                        <div class="mod-control">
                                            <a title="减少"  class="vm-minus">-</a>
                                            <input type="text" value="1" id="J_quantity" name="number" data-max="1">
                                            <a title="增加"  class="vm-plus">+</a>
                                        </div>
                                        <!-- 使用隐藏域获取值 -->
                                            <input type="hidden" name="id" value="{{$res->id}}">
                                            <input type="hidden" name="web" value="">
                                            <input type="hidden" name="color" value="">
                                            <input type="hidden" name="type" value="">
                                            <input type="hidden" name="number" value="">
                                            <input type="hidden" name="taocan" value="">
                                        <div>
                                            <!-- <a id="J_btnBuy" class="btn btn-primary btn-lg "
                                               data-mtype="store_de_buy" href="/go/javascript:void(0);"><i></i>立即购买</a> -->
                                            {{csrf_field()}}
                                            <input type="submit" value="立即购买" id="cart">
                                            <a  class="vm-favorite" id="J_favorite" ><input id="shoucang" type="hidden" value={{$res->id}}><i class="icon icon-favorite"></i>收藏</a>
                                            <span class="vm-tips" id="J_favoriteTips" style="display:none;"><i class="s-triangle"></i>提前收藏，抢购快人一步！<em id="J_favoriteTipsClose">╳</em></span>
                                            <p class="vm-service" id="J_panicBuyingWrap"></p>
                                        </div>
                                        </form>
                                    </dd>
                                </dl>
                            </div>
                                <div class="property-related">
                                    <dl class="property-related-item">
                                        <dt class="vm-metatit">浏览历史：</dt>
                                        <dd class="clearfix">
                                            <ul>
                                                @foreach($data as $k=>$v)
                                                    @if($k<3)
                                                     <li>
                                                        <a href="/index/detail?id={{$v->id}}"
                                                           target="_blank">
                                                            <img src="{{$v->img}}" width="32" height="32"
                                                                 alt="">{{$v->goodsname}} {{$v->price}}元起
                                                        </a>
                                                    </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                        <div class="prod-addition">
                            <input type="hidden" id="servertime" value="1473686803357">

                            <div class="layer-promo" id="layerPromo" style="display:none;">
                                <div class="layer-promo-hd">
                                    领取优惠券
                                    <a class="vm-close" id="J_promoClose" href="/go/#">
                                        ╳
                                    </a>
                                </div>
                                <div class="layer-promo-bd">
                                    <dl class="discount-coupon" id="J_discountCoupon">
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        
            <div class="detail-tab anim detail-fast-float" id="detailFast">
                <div class="fixed-container">
                    <ul class="clearfix">
                        <li class="current">
                            <a href="#">商品详情</a>
                        </li>
                        <li>
                            <a href="#">规格参数</a>
                        </li>
                            <li>
                                <a href="#">常见问题</a>
                            </li>
                    </ul>
                    <div class="shortcut trans">
                        <div class="mod-buy">
                            <a href="/go/javascript:void(0);" id="J_btnBuyShortcut" class="btn btn-primary btn-lg"><i></i>现在购买</a>
                        </div>
                        <div class="mod-total trans">
                            魅蓝3<em class="vm-price" id="J_totalPriceShortcut"></em>
                            <p class="vm-title" id="J_summaryName">
                            </p>
                        </div>
                    </div>
                    <div class="mod-title">

                    </div>
                </div>
            </div>
            <section class="row detail" id="detail">
                <div style="height:62px;">
                    <div class="detail-tab" id="detailTabFixed">
                        <div class="fixed-container">
                            <!-- <ul class="clearfix"> -->
                            <ul class="clearfix" style="display: block;">
                                <li class="current">
                                    <a data-mtype="store_de_xq_1" id="xiangqing">商品详情</a>
                                </li>
                                <li>
                                    <a data-mtype="store_de_xq_2" id="guige">规格参数</a>
                                </li>
                                <li>
                                    <a data-mtype="store_de_xq_3" id="pingjia">常见问题</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="detail-content container">
                    <!-- 商品详情图片 -->
                    <div class="introduce" id="introduce" style="display:block;">
                        <img class="lazy" data-original="http://storeimg.meizu.com/product/1463644172-74098.png" width="1240"  alt="" src="/go/picture3/xiangqing1.png">
                        <img class="lazy" data-original="http://storeimg.meizu.com/product/1461809097-49033.png" width="1240" alt="" src="/go/picture3/xiangqing2.png">
                        <img class="lazy" data-original="http://storeimg.meizu.com/product/1461809107-25803.png" width="1240" alt="" src="/go/picture3/xiangqing3.png">
                        <img class="lazy" data-original="http://storeimg.meizu.com/product/1463644244-39838.png" width="1240" alt="" src="/go/picture3/xiangqing4.png">
                        <img class="lazy" data-original="http://storeimg.meizu.com/product/1461810050-17925.png" width="1240" alt="" src="/go/picture3/xiangqing5.png">
                        <img class="lazy" data-original="http://storeimg.meizu.com/product/1461809125-47271.png" width="1240" alt="" src="/go/picture3/xiangqing6.png">
                        <img class="lazy" data-original="http://storeimg.meizu.com/product/1461809125-47271.png" width="1240" alt="" src="/go/picture3/xiangqing7.png">
                    </div>
                    <div class="standard" id="standard" >
                        <table class="standard-table">
                            <tbody>
                                <tr class="standard-table-group">
                                    <th colspan="2"> 基础信息</th>
                                </tr>
                                <tr>
                                    <th>品牌</th>
                                    <td>魅族</td>
                                </tr>
                                <tr>
                                    <th>型号</th>
                                    <td>{{$res->goodsname}}</td>
                                </tr>
                                <tr>
                                    <th>尺寸</th>
                                    <td>141.5*69.5* 8.3mm</td>
                                </tr>
                                <tr>
                                    <th>电池容量</th>
                                    <td>2870mAh</td>
                                </tr>
                                <tr>
                                    <th>重量</th>
                                    <td>132g</td>
                                </tr>
                                <tr class="standard-table-group">
                                    <th colspan="2">屏幕</th>
                                </tr>
                                    <tr>
                                        <th>屏幕尺寸</th>
                                        <td>5.0英寸</td>
                                    </tr>
                                    <tr>
                                        <th>分辨率</th>
                                        <td>1280 x 720</td>
                                    </tr>
                                <tr class="standard-table-group">
                                    <th colspan="2">容量</th>
                                </tr>
                                    <tr>
                                        <th>运行内存（RAM）</th>
                                        <td>2GB（仅限16G版本）、3GB（仅限32G版本）</td>
                                    </tr>
                                <tr class="standard-table-group">
                                    <th colspan="2">
                                        处理器
                                    </th>
                                </tr>
                                    <tr>
                                        <th>CPU</th>
                                        <td>MTK MT6750 处理器</td>
                                    </tr>
                                    <tr>
                                        <th>GPU</th>
                                        <td>ARM Mali T860 图形处理器</td>
                                    </tr>
                                <tr class="standard-table-group">
                                    <th colspan="2">
                                        网络
                                    </th>
                                </tr>
                                    <tr>
                                        <th>网络模式</th>
                                        <td>双卡多模</td>
                                    </tr>
                                <tr class="standard-table-group">
                                    <th colspan="2">
                                        摄像
                                    </th>
                                </tr>
                                    <tr>
                                        <th>前置摄像头</th>
                                        <td>500万像素</td>
                                    </tr>
                                    <tr>
                                        <th>后置摄像头</th>
                                        <td>1300万像素</td>
                                    </tr>
                                <tr class="standard-table-group">
                                    <th colspan="2">
                                        系统与应用
                                    </th>
                                </tr>
                                    <tr>
                                        <th>系统版本</th>
                                        <td>Flyme 5.1 powered by YunOS</td>
                                    </tr>
                                <tr class="standard-table-group">
                                    <th colspan="2">
                                        包装清单
                                    </th>
                                </tr>
                                <tr>
                                    <th>包装清单</th>
                                    <td>主机 x 1<br>电源适配器 x 1<br>保修证书 x 1<br>SIM卡顶针 x 1<br>数据线 x 1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="question" id="question">
                        <div class="question-list">
                            <h2>热门回答</h2>
                                @foreach($ques as $k=>$v)
                                <dl class="mod-item">
                                    <dt class="vm-question">
                                    <font color="green" size="2">[用户:{{$v->username}}]☞</font>
                                    {{$v->question}}
                                    </dt>
                                    <dd class="vm-answer">
                                    <font color="green" size="2">[客服:魅女1号]☞</font>
                                    {{$v->answer}}
                                    </dd>
                                </dl>
                                @endforeach
                                <div id="siteGotop" class="site-gotop" style="display: block;"><a target="_blank" href="/index/wenti?id={{$res->id}}" title="点我提问题(⊙o⊙)?" class="gotop-suggest"><img  width="80" height="80px" alt="" src="/go/images3/yiwen.gif"></a><div title="回到顶部" class="gotop-arrow"></div></div>
                        </div>
                    </div>

                </div>
                </div>
            </section>
        </main>
        <script type="text/javascript" src="/go/js3/jquery-1.8.3.min.js"></script>
        <script type="text/javascript">
        //网络类型
        $('#web a').click(function(){
            $(this).addClass('web');
            $(this).siblings().removeClass('web');
            //获取当前选中的值
            var v =$(this).html();
            $('input[name="web"]').val(v);
        })
        //获取颜色
        $('#color a').click(function(){
            $(this).addClass('color');
            $(this).siblings().removeClass('color');
            //获取当前选中的值
            var v =$('#color .color').data('mtype');
            // alert(v);
           $('input[name="color"]').val(v);
           var color = $('input[name="color"]').val();
        })
        //获取内寸
        $('#type a').click(function(){
            $(this).addClass('type');
            $(this).siblings().removeClass('type');
            //获取当前选中的值
            var v =$(this).html();
            $('input[name="type"]').val(v);
        })
         //获取套餐
        $('#taocan a').click(function(){
            $(this).addClass('taocan');
            $(this).siblings().removeClass('taocan');
            //获取当前选中的值
            var v =$(this).html();
            $('input[name="taocan"]').val(v);
        })


        //数量的改变
        //数量的增加
        $('.vm-plus').click(function(){
            //获取数量的值
            var v = $(this).prev().val();
            v++;
            $(this).prev().val(v);
            $('input[name="number"]').val(v);
        })
        //数量的减少
        $('.vm-minus').click(function(){
            var v =$(this).next().val();
            v--;
            if(v <=1) {
                v=1;
            }
            $(this).next().val(v);
            $('input[name="number"]').val(v);
        })

        //立即购买样式按钮
        $('input[type="submit"]').mouseover(function(){
            $(this).css('background','#0aaee3');
        })
        $('input[type="submit"]').mouseout(function(){
            $(this).css('background','#2AC4F6');
        })

        //图片
        //获取元素
        var smallImg = document.getElementById('smallImg');
        var imgs = document.getElementById('ulss').getElementsByTagName('img');

        for(var i=0;i<imgs.length;i++) {
            imgs[i].onclick=function(){
                //获取当前的src
                var src =this.src;
                //交换
                smallImg.src =src;
            }
        }


        //商品详情 规格参数 评价
        //详情
        $('#xiangqing').click(function(){
            $(this).offsetParent().addClass('current');
            $(this).offsetParent().siblings().removeClass();
            $('#introduce').css('display','block');
            $('#introduce').siblings().css('display','');
        })
        //规格
        $('#guige').click(function(){
            $(this).offsetParent().addClass('current');
            $(this).offsetParent().siblings().removeClass();
            $('#standard').css('display','block');
            $('#standard').siblings().css('display','');
        })
        //评价
        $('#pingjia').click(function(){
            $(this).offsetParent().addClass('current');
            $(this).offsetParent().siblings().removeClass();
            $('#question').css('display','block');
            $('#question').siblings().css('display','');
        })

        //收藏商品
       
        $(function(){
            $('#J_favorite').click(function(){
                //获取id
                var id = $('#shoucang').val();
      	
                // 发送
                $.get('/index/shou/ajaxupdate', {id:id}, function(data){
                    if(data == '1'){
                        alert('收藏成功');
                    }else if(data == '2'){
                        alert('收藏失败');
                    }else if(data == '3'){
                        alert('已经收藏');
                    }else if(data == '4'){
                        alert('没有登陆');
                        location.href="/index/gologin";
                    }
                });
            })
        })

    </script>

    <!-- 百度分享 -->

    <script>window._bd_share_config={"common":{"bdSnsKey":{"tsina":"www.xinlang.com","tqq":"www.tengxun.com","t163":"www.wangyi.com","tsohu":"www.souhu.com"},"bdText":"","bdMini":"1","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"2","bdPos":"right","bdTop":"174.5"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
@endsection

