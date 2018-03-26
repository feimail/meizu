@extends('./layup/index')

@section('css')
    <link rel="stylesheet" href="/go/css2/site-base.css" />
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
    <script src="/go/js2/html5shiv.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/go/css2/main-37d634f.css" />
    <style type="text/css">
    /*.paginate{ margin-left: 500px; }*/
    .paginate{ margin-left: 530px; width: 300px;height: 30px;}
    .pagination{}
    .paginate li{float: left;margin-left: 20px; }
    .paginate li a{font-size: 16px;}
    .paginate li a:hover{background: #EAEAEA;}
    .paginate .active{font-size: 14px; color: #00c3f5;}
    #J_filterOrder a:visited{}
    </style>
@endsection

@section('content')
    <main class="wrapper" id="main">
    <div class="container">
        <section class="crumbs clearfix">
            <a data-mtype="store_list_mbx_1" href="/index">首页</a>
             <!-- &nbsp;&gt;&nbsp;
            <span class="crumbs-level" id="crumbsLevel">
                手机
            </span> -->
        </section>

        <section class="selector" id="selector">
            <!--  分类部分 start -->
                <div class="sl-category" id="slCategory">
                </div>
            <div class="sl-prop" id="slProp">
                        <div class="sl-line-wrap">
                            <div class="mod-key"><span>网络：</span></div>
                            <div class="mod-value">
                                <div class="mod-value-list">
                                    <ul>
                                           <li class="vm-all">
                                                <a title="全部" data-value="79:18238,18239,43,40,41,42" href="?{{$url[1]}}&web=">全部</a>
                                           </li>
                                                <li>
                                                    <a data-value="79:18238,18239"  data-mtype="store_list_xf_1_1" title="全网通版" href="?{{$url[1]}}&web=全网通版">全网通版</a>
                                                </li>
                                                <li>
                                                    <a data-value="79:18238,18239"  data-mtype="store_list_xf_1_1" title="全网通版" href="?{{$url[1]}}&web=移动版">移动版</a>
                                                </li>
                                               <li>
                                                    <a data-value="79:18238,18239"  data-mtype="store_list_xf_1_1" title="全网通版" href="?{{$url[1]}}&web=联通版">联通版</a>
                                                </li>
                                                <li>
                                                    <a data-value="79:18238,18239"  data-mtype="store_list_xf_1_1" title="全网通版" href="?{{$url[1]}}&web=电信版">电信版</a>
                                                </li>
                                    </ul>
                                </div>
                            </div>
                                <div class="mod-ext">
                                    <a class="sl-e-more J_extMore" href="/go/javascript:;" style="">更多<i></i></a>
                                </div>

                        </div>
                        <!-- <div class="sl-line-wrap">
                            <div class="mod-key"><span>系列：</span></div>
                            <div class="mod-value">
                                <div class="mod-value-list">
                                    <ul>
                                           <li class="vm-all">
                                                <a title="全部" data-value="80:18778,9,12529,18382,3,19475,5,10,11760,868,1133,18237,19242,19243,20374,20100,20579,20580,18732,8,18136,20098" href="/go/#">全部</a>
                                           </li>
                                                <li>
                                                    <a data-value="80:18778,9,12529,18382"  data-mtype="store_list_xf_2_1" title="PRO系列" href="">PRO系列</a>
                                                </li>
                                                <li>
                                                    <a data-value="80:3,19475,5,10,11760,868,1133,18237,19242,19243,20374,20100,20579,20580,18732"  data-mtype="store_list_xf_2_2" title="魅蓝系列" href="/go/#">魅蓝系列</a>
                                                </li>
                                                <li>
                                                    <a data-value="80:8,18136,20098"  data-mtype="store_list_xf_2_3" title="MX系列" href="/go/#">MX系列</a>
                                                </li>
                                    </ul>
                                </div>
                            </div>
                                <div class="mod-ext">
                                    <a class="sl-e-more J_extMore" href="/go/javascript:;" style="">更多<i></i></a>
                                </div>

                        </div> -->
            </div>
        </section>

    <section class="filter clearfix" id="filter">
        <div class="filter-order" id="J_filterOrder">
            <a class="active" data-tag="0" data-mtype="store_list_sx_1" href="?{{$url[0]}}" id="moren">
                默认
            </a>
            <a class="active" data-tag="1" data-mtype="store_list_sx_2" href="?{{$url[0]}}&time={{ strpos($url[1],'time_desc')?'time_asc':'time_desc'}}" id="xinpin">
                时间
                @if(strpos($url[1],'time_desc'))
                    <i class="icon-arrow-down"></i>
                @elseif(strpos($url[1],'time_asc'))
                    <i class="icon-arrow-up"></i>
                @endif
            </a>
            <a class="active" data-tag="1" data-mtype="store_list_sx_3" href="?{{$url[0]}}&price={{ strpos($url[1],'price_desc')?'price_asc':'price_desc'}}" id="xinpin">
                价格
                @if(strpos($url[1],'price_desc'))
                    <i class="icon-arrow-down"></i>
                @elseif(strpos($url[1],'price_asc'))
                    <i class="icon-arrow-up"></i>
                @endif
            </a>
        </div>
        <div class="filter-condition" id="J_filterCondition">
            <label class="bs-checkbox" data-mtype="store_list_sx_xz">
                
            </label>
        </div>
    </section>
    @if(count($res))
    <section class="goods-list" id="goodsList">
        <ul class="goods-list-wrap clearfix" id="goodsListWrap">
        @foreach($res as $k=>$v)
                <li class="gl-item">
                    <dl class="gl-item-wrap">
                        <dd class="mod-pic">
                            <a data-mtype="store_list_kw_1" target="_blank" href="/index/detail?id={{$v->id}}" title="">
                                <img width="220" height="220"
                                     src="{{$v->img}}">
                            </a>
                        </dd>
                        <dd class="mod-name">
                            <a data-mtype="store_list_kw_1" target="_blank" href="/index/detail?id={{$v->id}}" title="">
                            {{$v->goodsname}}
                            </a>
                        </dd>
                        <dd class="mod-price">
                            <em>￥</em>
                            <i>
                                {{$v->price}}
                            </i>
                        </dd>
                    </dl>
                </li>
        @endforeach
        
        </ul>
    </section>
    @else
    <section class="empty clearfix" id="empty" style="display: black;">
        <div class="empty-bd">
            <div class="empty-bd-pic"></div>
            <div class="empty-bd-info">
                <h4 class="yahei">抱歉没有找到相关商品</h4>
                <p>建议您：<br/>
                    1.适当减少筛选条件<br/>
                    2.尝试其他关键字
                </p>
            </div>
        </div>
    </section>
    @endif
    <section class="pages" id="pages">
        <div class="paginate">
    {!!$res->appends($request)->render()!!}
    
    </div>
    </section>
    <section class="recommend" id="recommend">
        <div class="recommend-hd">
            <h2 class="mod-title">为您推荐</h2>
           
        </div>
        <div class="recommend-slider" id="J_recommendSlider">
            <ul class="recommend-slider-wrap">
                    @foreach($res1 as $k=>$v)
                        <li class="rs-item">
                            <a class="rs-item-wrap" data-mtype="sotre_list_tj_1" href="/index/detail?id={{$v->id}}" target="_blank">
                                <div class="mod-pic">
                                    <img src="{{$v->img}}" width="180" height="180">
                                </div>
                                <div class="mod-desc">
                                    <h4 class="vm-title">{{$v->goodsname}} </h4>
                                    <h6 class="vm-subtitle">{{$v->desc}}</h6>
                                    <p class="vm-price">
                                        ¥<span>{{$v->price}}</span>
                                    </p>
                                </div>
                                    <span class="mod-sign" style="background-color: #00afbe;">
                                         新品
                                    </span>
                            </a>
                        </li>
                    @endforeach
                        
            </ul>
        </div>
    </section>
    </div>

</main>
</body>


@endsection
