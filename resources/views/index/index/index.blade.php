@extends('./layup.index')
@section('content')
	<div class="home-category-wrap">
        <div class="mzcontainer home-category-position">
            <div class="home-category-list">
                <ul class="home-category-nav">
                    <li class="home-category-nav-item ">
                        <a class="category-nav-link" data-mtype="store_index_cdh_1" data-mdesc="侧边导航中第1个分类"
                           href="/index/list" >
                            <span>全部商品分类</span>
                        </a>
                    </li>
                   @foreach($rowa as $k=>$v)
                        <li class="home-category-nav-item ">
                            <a class="category-nav-link" data-mtype="store_index_cdh_2" data-mdesc="侧边导航中第2个分类"
                               href="/index/list?pid={{$v->id}}" >
                                <span>{{ $v->name}}</span>
                            </a>
                            <div class="category-nav-children nav-wrap-col-2">
                                <div class="nav-children-wrap">
                                    <ul class="nav-children-left">
                                        @for($i = 0;$i<ceil(count($v->arr)/2);$i++)         
                                        <li class="nav-children-item">
                                            <a href="/index/detail?id={{ $v->arr[$i]->id}}" data-mtype="store_index_cdh_2_1" data-mdesc="侧边导航中第2个分类第1个产品">
                                                <img src="/go/picture/init-1x1_1.jpg"
                                                     data-src="{{$v->arr[$i]->img}}" width="50"
                                                     height="50" alt="魅蓝 Max"/>
                                                <span>{{$v->arr[$i]->goodsname}}</span>
                                            </a>
                                        </li>
                                        @endfor
                                    </ul>
                                    <ul class="nav-children-left">
                                        @for ($i = ceil(count($v->arr)/2); $i < ceil(count($v->arr)); $i++)
                                        <li class="nav-children-item">
                                            <a href="/index/detail?id={{$v->arr[$i]->id}}" data-mtype="store_index_cdh_2_1" data-mdesc="侧边导航中第2个分类第1个产品">
                                                <img src="/go/picture/init-1x1_1.jpg"
                                                     data-src="{{$v->arr[$i]->img}}" width="50"
                                                     height="50" alt="魅蓝 Max"/>
                                                <span>{{$v->arr[$i]->goodsname}}</span>
                                            </a>
                                        </li> 
                                        @endfor         
                                    </ul> 
                                </div>
                                <div class="category-item-ad">
                                    @if(isset($v->brr))                           
                                        <a href="/index/detail?id={{ $v->brr->id}}" data-mtype="store_index_cdh_2_gg" data-mdesc="侧边导航中第2个分类广告">
                                            <img src="{{$v->brr->img}}" width="296" height="480"/>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!--   页面的头部结束 -->
    <div id="MzHomeSlider" class="home-slider">
        <div class="home-slider-items">
            <ul class="bxslider" id='uls'>
                <li class="" data-bgcolor="#FFFFFF" style="background: #FFFFFF;">
                    <a class=""
                       style="width: 1920px; margin-left: -960px;"
                       href="http://detail.meizu.com/item/meilan_max.html?rc=lb1" data-mtype="store_index_ba_1"
                       data-mdesc="第1屏banner">
                        <img src="/go/LBpicture/1.jpg" width="1920" height="480"/>
                    </a>
                </li>
                <li class="" data-bgcolor="#137cf9" style="background: #137cf9;">
                    <a class=""
                       style="width: 1920px; margin-left: -960px;"
                       href="http://hd.meizu.com/activity/meizu.html?rc=lb2" data-mtype="store_index_ba_2"
                       data-mdesc="第2屏banner">
                        <img src="/go/LBpicture/2.jpg" width="1920" height="480"/>
                    </a>
                </li>
                <li class="home-slider-box" data-bgcolor="#040000" style="background: #040000;">
                    <a class=""
                       style="width: 1920px; margin-left: -960px;"
                       href="http://hd.meizu.com/fans/misfit.html?rc=lb3" data-mtype="store_index_ba_3"
                       data-mdesc="第3屏banner">
                        <img src="/go/LBpicture/3.png" width="1920" height="480"/>
                    </a>
                </li>
                <li class="home-slider-box" data-bgcolor="#121212" style="background: #121212;">
                    <a class=""
                       style="width: 1920px; margin-left: -960px;"
                       href="http://detail.meizu.com/item/meizu_pro6.html?rc=lb4" data-mtype="store_index_ba_4"
                       data-mdesc="第4屏banner">
                        <img src="/go/LBpicture/4.png" width="1920" height="480"/>
                    </a>
                </li>
                <li class="home-slider-box" data-bgcolor="#dedede" style="background: #dedede;">
                    <a class=""
                       style="width: 1240px; margin-left: -620px;"
                       href="http://detail.meizu.com/item/shoulder_bag.html?rc=lb5" data-mtype="store_index_ba_5"
                       data-mdesc="第5屏banner">
                        <img src="/go/LBpicture/5.jpg" width="1240" height="480"/>
                    </a>
                </li>
            </ul>
            <ul id = 'dis'>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
    <div class="mzcontainer">

        <div class="home-mzad">
            <div class="home-box home-service">
                <div class="service-module-2">
                    <a href="http://store.meizu.com/mformy/index"  data-mtype="store_index_gd_1" data-mdesc="固定资源位中第1个">
                        <span class="home-service-icon service-icon-mentry">
                            <img src="/go/picture/1450855246-61162_1.png" width="24" height="24" alt="M码通道"  />
                        </span>
                        <p>M码通道</p>
                    </a>
                </div>
                <div class="service-module-2">
                    <a href="http://mcycle.meizu.com/"  data-mtype="store_index_gd_2" data-mdesc="固定资源位中第2个">
                        <span class="home-service-icon service-icon-mentry">
                            <img src="/go/picture/1450855279-64872_1.png" width="24" height="24" alt="以旧换新"  />
                        </span>
                        <p>以旧换新</p>
                    </a>
                </div>
                <div class="service-module-2">
                    <a href="http://www.meizu.com/products/insu.html"  data-mtype="store_index_gd_3" data-mdesc="固定资源位中第3个">
                        <span class="home-service-icon service-icon-mentry">
                            <img src="/go/picture/1450855198-58056_1.png" width="24" height="24" alt="魅族意外保"  />
                        </span>
                        <p>魅族意外保</p>
                    </a>
                </div>
                <div class="service-module-2">
                    <a href="http://me.meizu.com/member/repo/index"  data-mtype="store_index_gd_4" data-mdesc="固定资源位中第4个">
                        <span class="home-service-icon service-icon-mentry">
                            <img src="/go/picture/1451960447-93534_1.png" width="24" height="24" alt="回购单查询"  />
                        </span>
                        <p>回购单查询</p>
                    </a>
                </div>
            </div>

            <div class="home-box home-ad-box">
                <a href="http://detail.meizu.com/item/meilan_note3.html?rc=xj" data-mtype="store_index_xj_1" data-mdesc="小焦中第1个">
                    <img src="/go/picture/cix_s1fqce6aswazaabc7nnhsfk874_1.jpg" width="244" height="140" />
                </a>
            </div>
            <div class="home-box home-ad-box">
                <a href="http://detail.meizu.com/item/meilanU20.html?rc=xj" data-mtype="store_index_xj_2" data-mdesc="小焦中第2个">
                    <img src="/go/picture/cix_s1ftqbqaigcpaabcn90ze-8433_1.jpg" width="244" height="140" />
                </a>
            </div>
            <div class="home-box home-ad-box">
                <a href="http://detail.meizu.com/item/meizu_ep51.html?rc=xj" data-mtype="store_index_xj_3" data-mdesc="小焦中第3个">
                    <img src="/go/picture/cix_s1fu-ruae2rmaaata9ir-ra921_1.jpg" width="244" height="140" />
                </a>
            </div>
            <div class="home-box home-ad-box">
                <a href="http://detail.meizu.com/item/JBL_JBLGO.html?rc=xj" data-mtype="store_index_xj_4" data-mdesc="小焦中第4个">
                    <img src="/go/picture/cix_s1fu-zgauif9aabfpb-serq787_1.jpg" width="244" height="140" />
                </a>
            </div>
        </div>
        <div class="home-panel home-rmd home-hot">
            <div class="home-panel-topbar">
                <h2 class="home-panel-title">热品推荐</h2>
                <div class="home-panel-tools">
                    <span id="MzRmdSliderLeft" class="panel-slider panel-slider-left panel-slider-disabled"
                          data-mtype="store_main_rp_a" data-mdesc="">
                      <span class="more-arrow"> </span>
                    </span>
                    <span id="MzRmdSliderRight" class="panel-slider panel-slider-right" data-mtype="store_main_rp_b" data-mdesc="">
                      <span class="more-arrow"></span>
                    </span>
                </div>
            </div>
            <div class="home-rmd-main">
                <div class="home-rmd-cotent">
                    <div class="rm-box-25">
                        <div id="MzRmdList" class="rmd-content-list">
                            @foreach($good1 as $k=>$v)
                                <div class="rmd-box rmd-box-product">
                                    <a href="/index/detail?id={{$v->id}}" data-mtype="store_index_rp_1_1" data-mdesc="热品推荐第1屏第1个坑">
                                        <div class="rmd-product-detail">
                                            <img src="{{ $v->img}}" alt="魅族 MX6" width="180" height="180"/>
                                            <div class="rmd-product-desc">
                                                <h4 class="rmd-product-title">{{ $v->goodsname}}</h4>
                                                <h6 class="rmd-product-subtitle">12期免息限量赠环窗智能保护套</h6>
                                                <p class="rmd-product-price">
                                                    &yen; <span>{{$v->price}}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="box-product-sign" style="background-color: #00afbe;">赠品</div>
                                   </a>
                                </div>
                            @endforeach           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-gotop">
        <a class="gotop-suggest" title="建议反馈" href="http://me.meizu.com/member/advice/index"></a>
        <div class="gotop-arrow" title="回到顶部"></div>
    </div>

    <div class="home-full-box white">
        <div class="mzcontainer">
            <div class="home-floor-ad">
                <img src="/go/picture/cnqojvfqcz-aj5mraadrfqxv-ko945_1.jpg"/>
                    <a href="http://detail.meizu.com/item/meizu_pro5.html?rc=yl" class="hot-point"
                       style="width: 1240px; height: 120px; left: 0px; top: 0px;"
                       title="PRO5"
                       data-mtype="store_index_yl_1_1"
                       data-mdesc="第1个腰栏的第1个热区"></a>
            </div>
        </div>
    </div>

    <div class="home-full-box" style="margin-top: 30px;">
        <div class="mzcontainer">
            <div class="home-panel home-rmd home-floor">
                <div class="home-panel-topbar">
                    <h2 class="home-panel-title">手机</h2>
                    <h6 class="home-panel-subtitle"></h6>
                    <div class="home-panel-tools home-floor-tools">
                        <a class="home-tool-more" href="/index/list?pid={{$v->id}}" data-mtype="store_index_kwd_1_g" data-mdesc="第1个楼层上方小导航的“更多”按钮">
                            更多
                            <span class="more-arrow more-icon"> </span>
                        </a>
                    </div>
                </div>
                <div class="home-rmd-main">
                    <div class="home-rmd-cotent">
                        @foreach($good2 as $k=>$v)
                            <div class="rmd-box rmd-box-product">
                                <a href="/index/detail?id={{$v->id}}" data-mtype="store_index_rp_1_1" data-mdesc="热品推荐第1屏第1个坑">
                                    <div class="rmd-product-detail">
                                        <img src="{{ $v->img}}" alt="魅族 MX6" width="180" height="180"/>
                                        <div class="rmd-product-desc">
                                            <h4 class="rmd-product-title">{{ $v->goodsname}}</h4>
                                            <h6 class="rmd-product-subtitle">12期免息限量赠环窗智能保护套</h6>
                                            <p class="rmd-product-price">
                                                &yen; <span>{{$v->price}}</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="box-product-sign" style="background-color: #00afbe;"> 赠品</div>
                                </a>
                            </div>
                        @endforeach                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-full-box ">
        <div class="mzcontainer">
            <div class="home-floor-ad">
                <img src="/go/picture/cix_s1fpw1aafxauaadym1od-ea908_1.jpg"/>
                    <a href="http://detail.meizu.com/item/mpower_m8e.html?rc=yl" class="hot-point"
                       style="width: 1240px; height: 120px; left: 0px; top: 0px;"
                       title="移动电源标准版"
                       data-mtype="store_index_yl_2_1"
                       data-mdesc="第2个腰栏的第1个热区"></a>
            </div>
        </div>
    </div>

    <div class="home-full-box" style="">
        <div class="mzcontainer">
            <div class="home-panel home-rmd home-floor">
                <div class="home-panel-topbar">
                    <h2 class="home-panel-title">精选配件</h2>
                    <h6 class="home-panel-subtitle">
                                <a href="http://lists.meizu.com/page/list?categoryid=79&rc=lc"
                                   data-mtype="store_index_kwd_2_2"
                                   data-mdesc="第2个楼层上方小导航第2个按钮	">耳机音箱</a>
                                <a href="http://lists.meizu.com/page/list?categoryid=80&rc=lc"
                                   data-mtype="store_index_kwd_2_2"
                                   data-mdesc="第2个楼层上方小导航第2个按钮	">路由器/移动电源</a>
                                <a href="http://lists.meizu.com/page/list?categoryid=83&rc=lc"
                                   data-mtype="store_index_kwd_2_2"
                                   data-mdesc="第2个楼层上方小导航第2个按钮	">移动存储</a>
                    </h6>
                </div>
                <div class="home-rmd-main">
                    <div class="home-rmd-cotent">
                        @foreach($good3 as $k=>$v)
                            <div class="rmd-box rmd-box-product">
                                <a href="/index/detail?id={{$v->id}}"
                                   data-mtype="store_index_rp_1_1"
                                   data-mdesc="热品推荐第1屏第1个坑">
                                    <div class="rmd-product-detail">
                                        <img src="{{ $v->img}}" alt="魅族 MX6" width="180" height="180"/>
                                        <div class="rmd-product-desc">
                                            <h4 class="rmd-product-title">{{ $v->goodsname}}</h4>
                                            <h6 class="rmd-product-subtitle">12期免息限量赠环窗智能保护套</h6>
                                            <p class="rmd-product-price">
                                                &yen; <span>{{$v->price}}</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="box-product-sign" style="background-color: #00afbe;">
                                    赠品
                                    </div>
                               </a>
                            </div>
                        @endforeach 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-full-box ">
        <div class="mzcontainer">
            <div class="home-floor-ad">
                <img src="/go/picture/cix_s1fu_3waek8iaafnxzfcqdu297_1.jpg"/>
                <a href="http://detail.meizu.com/item/GE62_6QD_1077XCN.html?rc=yl" class="hot-point"
                    style="width: 1240px; height: 120px; left: 0px; top: 0px;"
                    title="微星GE62 6QD-1077XCN游戏笔记本"
                    data-mtype="store_index_yl_3_1"
                    data-mdesc="第3个腰栏的第1个热区"></a>
            </div>
        </div>
    </div>

    <div class="home-full-box" style="">
        <div class="mzcontainer">
            <div class="home-panel home-rmd home-floor">
                <div class="home-panel-topbar">
                    <h2 class="home-panel-title">智能硬件</h2>
                    <h6 class="home-panel-subtitle">
                        <a href="http://lists.meizu.com/page/list?categoryid=88&rc=lc"
                           data-mtype="store_index_kwd_3_2"
                           data-mdesc="第3个楼层上方小导航第2个按钮	">智能家居</a>
                        <a href="http://lists.meizu.com/page/list?categoryid=89&rc=lc"
                           data-mtype="store_index_kwd_3_2"
                           data-mdesc="第3个楼层上方小导航第2个按钮	">智能出行</a>
                        <a href="http://lists.meizu.com/page/list?categoryid=90&rc=lc"
                           data-mtype="store_index_kwd_3_2"
                           data-mdesc="第3个楼层上方小导航第2个按钮	">智能娱乐</a>
                        <a href="http://lists.meizu.com/page/list?categoryid=87&rc=lc"
                           data-mtype="store_index_kwd_3_2"
                           data-mdesc="第3个楼层上方小导航第2个按钮	">智能健康</a>
                    </h6>
                </div>
                <div class="home-rmd-main">
                    <div class="home-rmd-cotent">
                        @foreach($good4 as $k=>$v)
                            <div class="rmd-box rmd-box-product">
                                <a href="/index/detail?id={{$v->id}}"
                                   data-mtype="store_index_rp_1_1"
                                   data-mdesc="热品推荐第1屏第1个坑">
                                    <div class="rmd-product-detail">
                                        <img src="{{ $v->img}}" alt="魅族 MX6" width="180" height="180"/>
                                        <div class="rmd-product-desc">
                                            <h4 class="rmd-product-title">{{ $v->goodsname}}</h4>
                                            <h6 class="rmd-product-subtitle">12期免息限量赠环窗智能保护套</h6>
                                            <p class="rmd-product-price">
                                                &yen; <span>{{$v->price}}</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="box-product-sign" style="background-color: #00afbe;">
                                    赠品
                                    </div>
                               </a>
                            </div>
                        @endforeach 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-full-box ">
        <div class="mzcontainer">
            <div class="home-floor-ad">
                <img src="/go/picture/cix_s1fqcz-atlzdaadvzrc9u0y403_1.jpg"/>
                    <a href="http://detail.meizu.com/item/meilan_metal.html?rc=yl" class="hot-point"
                       style="width: 1240px; height: 120px; left: 0px; top: 0px;"
                       title="魅蓝 metal"
                       data-mtype="store_index_yl_4_1"
                       data-mdesc="第4个腰栏的第1个热区"></a>
            </div>
        </div>
    </div>

    <div class="home-full-box" style="">
        <div class="mzcontainer">
            <div class="home-panel home-rmd home-floor">
                <div class="home-panel-topbar">
                    <h2 class="home-panel-title">手机周边</h2>
                    <h6 class="home-panel-subtitle">
                        <a href="http://lists.meizu.com/page/list?categoryid=81&rc=lc"
                            data-mtype="store_index_kwd_4_2"
                            data-mdesc="第4个楼层上方小导航第2个按钮">保护套/后盖/贴膜</a>
                        <a href="http://lists.meizu.com/page/list?categoryid=82&rc=lc"
                            data-mtype="store_index_kwd_4_2"
                            data-mdesc="第4个楼层上方小导航第2个按钮">数据线/电源适配器</a>
                    </h6>
                </div>
                <div class="home-rmd-main">
                    <div class="home-rmd-cotent">
                        @foreach($good5 as $k=>$v)
                           <div class="rmd-box rmd-box-product">
                                <a href="/index/detail?id={{$v->id}}" data-mtype="store_index_rp_1_1" data-mdesc="热品推荐第1屏第1个坑">
                                    <div class="rmd-product-detail">
                                        <img src="{{ $v->img}}" alt="魅族 MX6" width="180" height="180"/>
                                        <div class="rmd-product-desc">
                                            <h4 class="rmd-product-title">{{ $v->goodsname}}</h4>
                                            <h6 class="rmd-product-subtitle">12期免息限量赠环窗智能保护套</h6>
                                            <p class="rmd-product-price">
                                                &yen; <span>{{$v->price}}</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="box-product-sign" style="background-color: #00afbe;">
                                    赠品
                                    </div>
                                </a>
                            </div>
                        @endforeach 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-full-box" style="height: 80px;"></div>
@endsection