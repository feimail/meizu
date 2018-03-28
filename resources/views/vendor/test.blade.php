 <div class="header-nav">
            <ul class="nav-list">
                    <li class="nav-item">
                        <a class="nav-item-link" href="/go/javascrip:" onclick="return false"
                           target="_blank">PRO手机</a>
                        <div class="nav-item-children">
                            <ul class="menu-product-list">
                            
                                    @foreach($rea2 as $k=>$v)
                                        <li class="menu-product-item">
                                            <a href="/index/detail" target="_blank"
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
                        <a class="nav-item-link" href="/go/javascrip:" onclick="return false"
                           target="_blank">魅蓝手机</a>
                        <div class="nav-item-children">
                            <ul class="menu-product-list">
                                  @foreach($rea4 as $k=>$v)
                                        <li class="menu-product-item">
                                            <a href="/index/detail" target="_blank"
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
                        <a class="nav-item-link" href="/go/javascrip:" onclick="return false"
                           target="_blank">MX手机</a>
                        <div class="nav-item-children">
                            <ul class="menu-product-list">
                                       @foreach($rea6 as $k=>$v)
                                         <li class="menu-product-item">
                                            <a href="/index/detail" target="_blank"
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
                        <a class="nav-item-link" href="/go/javascrip:" onclick="return false"
                           target="_blank">精选配件</a>
                        <div class="nav-item-children">
                            <ul class="menu-product-list">
                                      @foreach($rea8 as $k=>$v)
                                         <li class="menu-product-item">
                                            <a href="/index/detail" target="_blank"
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
                                    <li class="menu-product-more">
                                        <div class="menu-more-links">
                                            <ul>
                                                    <li class="menu-more-row"><a href="http://lists.meizu.com/page/list?categoryid=79&rc=sdsd" target="_blank"><img
                                                            src="/go/picture/1467696166-40112_1.png" class="menu-more-img" width="28"
                                                            height="28"/>耳机 / 音箱</a>
                                                    </li>
                                                    <li class="menu-more-row"><a href="http://lists.meizu.com/page/list?categoryid=80&rc=sd" target="_blank"><img
                                                            src="/go/picture/1467696197-95413_1.png" class="menu-more-img" width="28"
                                                            height="28"/>路由器 / 移动电源</a>
                                                    </li>
                                                    <li class="menu-more-row"><a href="http://lists.meizu.com/page/list?categoryid=81&rc=sd" target="_blank"><img
                                                            src="/go/picture/1467696220-57637_1.png" class="menu-more-img" width="28"
                                                            height="28"/>保护套 / 后盖 / 贴膜</a>
                                                    </li>
                                                    <li class="menu-more-row"><a href="http://lists.meizu.com/page/list?categoryid=82&rc=sd" target="_blank"><img
                                                            src="/go/picture/1467696242-24236_1.png" class="menu-more-img" width="28"
                                                            height="28"/>数据线 / 电源适配器</a>
                                                    </li>
                                                    <li class="menu-more-row"><a href="http://lists.meizu.com/page/list?categoryid=83&rc=sd" target="_blank"><img
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
                           target="_blank">智能硬件</a>
                        <div class="nav-item-children">
                            <ul class="menu-product-list">
                                        @foreach($rea10 as $k=>$v)
                                         <li class="menu-product-item">
                                            <a href="/index/detail" target="_blank"
                                               data-mtype="store_index_dh_1_1"
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
