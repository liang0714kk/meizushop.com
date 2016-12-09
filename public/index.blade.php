
@extends('home.layout')

@section('content')

<div class="home-category-wrap">
    <div class="mzcontainer home-category-position">
        <div class="home-category-list">
            <ul class="home-category-nav">
                    <li class="home-category-nav-item ">
                        <a class="category-nav-link" data-mtype="store_index_cdh_1"
                           data-mdesc="侧边导航中第1个分类"
                           href="http://lists.meizu.com/page/list?categoryid=73&rc=cb&click=store_index_cdh_1" >
                            <span>全部商品分类</span>
                        </a>
                    </li>

                    @foreach($goods_data as $k => $g)
                    <li class="home-category-nav-item ">
                        <a class="category-nav-link" data-mtype="store_index_cdh_2"
                           data-mdesc="侧边导航中第2个分类"
                           href="http://lists.meizu.com/page/list?categoryid=76&rc=cb&click=store_index_cdh_2"
                            <span>{{ $g -> name }}</span>

                        </a>

                            <div class="category-nav-children nav-wrap-col-2">
                                <div class="nav-children-wrap">
                                        <ul class="nav-children-left">
                            @foreach($details_data_1 as $k1 => $v1)
                                @if($v1 -> pname == $g -> name)
                                            <li class="nav-children-item">
                                                <a href="{{ url('/home/gdetail/') }}/{{ $v1 -> pid }}" target="_blank"
                                                   data-mtype="store_index_cdh_2_1"
                                                   data-mdesc="侧边导航中第2个分类第1个产品">
                                                    <img src="{{url('/uploads/goods/')}}/{{ $v1 -> photo }}"
                                                         data-src="{{url('/uploads/goods/')}}/{{ $v1 -> photo }}" width="50"
                                                         height="50" alt="{{ $v1-> name }}"/>
                                                    <span>{{ $v1 -> name }}</span>
                                                </a>
                                            </li>
                                @endif
                            @endforeach
                                        </ul>

                            </div>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
</div>
<div id="MzHomeSlider" class="home-slider">
    <div class="home-slider-items">
        <ul class="bxslider">
                <li class="home-slider-box" data-bgcolor="#000000" style="background: #000000;">
                    <a class="home-slider-image"
                       style="width: 1920px; margin-left: -960px;"
                       href="http://hd.meizu.com/sale/new.html?click=store_index_ba_1" target="_blank" data-mtype="store_index_ba_1"
                       data-mdesc="第1屏banner">
                        <img src="{{ url('/hm/picture/cnqojvguynoamkokaaf3bu4zxws261.jpg') }}" width="1920" height="480"/>
                    </a>
                </li>
                <li class="home-slider-box" data-bgcolor="#FFFFFF" style="background: #FFFFFF;">
                    <a class="home-slider-image"
                       style="width: 1920px; margin-left: -960px;"
                       href="http://hd.meizu.com/sale/khfc.html?click=store_index_ba_2" target="_blank" data-mtype="store_index_ba_2"
                       data-mdesc="第2屏banner">
                        <img src="{{ url('/hm/picture/cix_s1gqzmyakfwiaapphi7gthc063.jpg') }}" width="1920" height="480"/>
                    </a>
                </li>
                <li class="home-slider-box" data-bgcolor="#4895ef" style="background: #4895ef;">
                    <a class="home-slider-image"
                       style="width: 1240px; margin-left: -620px;"
                       href="http://hd.meizu.com/huodong/sennheiser.html?click=store_index_ba_3" target="_blank" data-mtype="store_index_ba_3"
                       data-mdesc="第3屏banner">
                        <img src="{{ url('/hm/picture/cnqojvgltpqab3scaal-stgttgi638.jpg') }}" width="1240" height="480"/>
                    </a>
                </li>
                <li class="home-slider-box" data-bgcolor="#FFFFFF" style="background: #FFFFFF;">
                    <a class="home-slider-image"
                       style="width: 1920px; margin-left: -960px;"
                       href="http://detail.meizu.com/item/mx6.html?click=store_index_ba_4" target="_blank" data-mtype="store_index_ba_4"
                       data-mdesc="第4屏banner">
                        <img src="{{ url('/hm/picture/cix_s1gqzmyawhzwaah_21afm7g560.jpg') }}" width="1920" height="480"/>
                    </a>
                </li>
                <li class="home-slider-box" data-bgcolor="#c6cacd" style="background: #c6cacd;">
                    <a class="home-slider-image"
                       style="width: 1240px; margin-left: -620px;"
                       href="http://detail.meizu.com/item/meizu_hezi.html?click=store_index_ba_5" target="_blank" data-mtype="store_index_ba_5"
                       data-mdesc="第5屏banner">
                        <img src="{{ url('/hm/picture/cnqojvgiuo6aiu4haaflydh2plo304.jpg') }}" width="1240" height="480"/>
                    </a>
                </li>
        </ul>
    </div>
</div>
        <div class="mzcontainer">

<div class="home-mzad">
  <div class="home-box home-service">
      <div class="service-module-2">
        <a href="http://mformy.meizu.com/?click=store_index_gd_1" target="_blank"  data-mtype="store_index_gd_1" data-mdesc="固定资源位中第1个">
          <span class="home-service-icon service-icon-mentry">
            <img src="{{ url('/hm/picture/1450855246-61162.png') }}" width="24" height="24" alt="M码通道"  />
          </span>
          <p>M码通道</p>
        </a>
      </div>
      <div class="service-module-2">
        <a href="http://mcycle.meizu.com/?click=store_index_gd_2" target="_blank"  data-mtype="store_index_gd_2" data-mdesc="固定资源位中第2个">
          <span class="home-service-icon service-icon-mentry">
            <img src="{{ url('/hm/picture/1450855279-64872.png') }}" width="24" height="24" alt="以旧换新"  />
          </span>
          <p>以旧换新</p>
        </a>
      </div>
      <div class="service-module-2">
        <a href="http://www.meizu.com/products/insu.html?click=store_index_gd_3" target="_blank"  data-mtype="store_index_gd_3" data-mdesc="固定资源位中第3个">
          <span class="home-service-icon service-icon-mentry">
            <img src="{{ url('/hm/picture/1450855198-58056.png') }}" width="24" height="24" alt="魅族意外保"  />
          </span>
          <p>魅族意外保</p>
        </a>
      </div>
      <div class="service-module-2">
        <a href="http://me.meizu.com/member/repo/index?click=store_index_gd_4" target="_blank"  data-mtype="store_index_gd_4" data-mdesc="固定资源位中第4个">
          <span class="home-service-icon service-icon-mentry">
            <img src="{{ url('/hm/picture/1451960447-93534.png') }}" width="24" height="24" alt="回购单查询"  />
          </span>
          <p>回购单查询</p>
        </a>
      </div>
  </div>

    <div class="home-box home-ad-box">
      <a href="http://hd.meizu.com/activity/meizu.html?click=store_index_xj_1" target="_blank" data-mtype="store_index_xj_1" data-mdesc="小焦中第1个">
        <img src="{{ url('/hm/picture/1469442560-64371.jpg') }}" width="244" height="140" />
      </a>
    </div>
    <div class="home-box home-ad-box">
      <a href="http://detail.meizu.com/item/meilan_5.html?click=store_index_xj_2" target="_blank" data-mtype="store_index_xj_2" data-mdesc="小焦中第2个">
        <img src="{{ url('/hm/picture/cnqojvguws6abcriaabevdfmjaw796.jpg') }}" width="244" height="140" />
      </a>
    </div>
    <div class="home-box home-ad-box">
      <a href="http://detail.meizu.com/item/meizu_bag.html?click=store_index_xj_3" target="_blank" data-mtype="store_index_xj_3" data-mdesc="小焦中第3个">
        <img src="{{ url('/hm/picture/cix_s1gqcroacp8haaaytypyzsq210.jpg') }}" width="244" height="140" />
      </a>
    </div>
    <div class="home-box home-ad-box">
      <a href="http://detail.meizu.com/item/BF_xD.html?click=store_index_xj_4" target="_blank" data-mtype="store_index_xj_4" data-mdesc="小焦中第4个">
        <img src="{{ url('/hm/picture/cnqojvgtjreac_v3aaa1rcvccbq780.jpg') }}" width="244" height="140" />
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
                            @foreach($hot_data as $k => $v)
                            <div class="rmd-box rmd-box-product">
                                <a href="{{ url('/home/gdetail/') }}/{{ $v -> id }}/{{ $v -> name }}" target="_blank"
                                   data-mtype="store_index_rp_1_1"
                                   data-mdesc="热品推荐第1屏第1个坑">
                                    <div class="rmd-product-detail">
                                        <img src="/uploads/goods/{{ $v -> photo }}" alt="{{ $v -> name }}" width="180"
                                             height="180"/>
                                        <div class="rmd-product-desc">
                                            <h4 class="rmd-product-title">{{ $v -> name }}</h4>
                                                <h6 class="rmd-product-subtitle red">
                                                    {{ $v -> explain }}
                                                </h6>

                                            <p class="rmb-product-bottom">

                                                <span class="rmd-product-price">
                                                    &yen;
                                                    <span>{{ $v -> price }}</span>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                        <div class="box-product-sign" style="background-color: #00afbe;">
                                        热品
                                        </div>
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
 <a class="gotop-suggest" title="建议反馈" href="{{ url('./home/feedback/add') }}" target="_blank"></a>
 <div class="gotop-arrow" title="回到顶部"></div>
</div>
    @foreach($goods_data as $k => $g)

        <div class="home-full-box white">
            <div class="mzcontainer">
                <div class="home-floor-ad">
                    <img src="/uploads/banner/{{ $g -> banner }}"/>
                        <a href="http://detail.meizu.com/item/meilan_metal.html?click=store_index_yl_1_0" class="hot-point"
                           style="width: 1240px; height: 120px; left: 0px; top: 0px;"
                           target="_blank" title="魅蓝metal"
                           data-mtype="store_index_yl_1_0"
                           data-mdesc="第1个腰栏的第0个热区"></a>
                </div>
            </div>
        </div>
    <div class="home-full-box" style="margin-top: 30px;">
        <div class="mzcontainer">
            <div class="home-panel home-rmd home-floor">
                <div class="home-panel-topbar">
                    <h2 class="home-panel-title">{{ $g -> name }}</h2>
                    <h6 class="home-panel-subtitle">
                    </h6>
                            <div class="home-panel-tools home-floor-tools">
                                <a class="home-tool-more" href="http://lists.meizu.com/page/list?categoryid=76&rc=lc&click=store_index_kwd_1_g" target="_blank"
                                   data-mtype="store_index_kwd_1_g"
                                   data-mdesc="第1个楼层上方小导航的“更多”按钮">
                                更多
                                    <span class="more-arrow more-icon"> </span>
                                </a>
                            </div>
                </div>
                <div class="home-rmd-main">
                    <div class="home-rmd-cotent">
                                <div class="rmd-box rmd-box-ad rmd-box-ad-1">
                                    <a href="http://detail.meizu.com/item/meizu_pro6.html?click=store_index_kw_1_1" target="_blank"
                                       data-mtype="store_index_kw_1_1"
                                       data-mdesc="第1个楼层第1个坑">
                                        <img class="home-img-lazy"
                                             src="{{url('/uploads/first/')}}/{{ $g -> photo }}"
                                             alt="PRO 6"/>
                                    </a>
                                        <div class="rmd-box-ad-module">
                                            <a class="rmd-box-ad-btn" target="_blank" href="http://detail.meizu.com/item/meizu_pro6.html">
                                            立即购买
                                            </a>
                                        </div>
                                </div>
            @foreach($details_data as $k => $v)
                @if($g -> name == $v -> pname)

                                    <div class="rmd-box rmd-box-product">
                                        <a href="{{ url('/home/gdetail/') }}/{{ $v -> pid }}/{{ $v -> name }}" target="_blank"
                                           data-mtype="store_index_kw_1_2"
                                           data-mdesc="第1个楼层第2个坑">
                                            <div class="rmd-product-detail">
                                                <img class="home-img-lazy"
                                                     alt="{{ $v -> name }}"
                                                     src="{{url('/uploads/goods/')}}/{{ $v -> photo }}"
                                                     width="180" height="180"/>
                                                <div class="rmd-product-desc">
                                                    <h4 class="rmd-product-title">{{ $v -> name }}</h4>
                                                        <h6 class="rmd-product-subtitle">{{ $v -> explain }}</h6>
                                                    <!-- TODO 替换为内容-->
                                                    <p class="rmb-product-bottom">

                                                        <span class="rmd-product-price">
                                                        &yen;
                                                        <span>{{ $v -> price }}</span>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                                <div class="box-product-sign"
                                                     style="background-color: #00c3f5;">
                                                新品
                                                </div>
                                        </a>
                                    </div>
                                    @endif
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
