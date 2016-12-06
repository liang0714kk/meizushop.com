@extends('home.layout');

@section('content');

<main class="wrapper" id="main">
    <div class="container">
        <section class="crumbs clearfix">
            <a data-mtype="store_list_mbx_1" href="http://store.meizu.com/index.html">首页</a> &nbsp;&gt;&nbsp;
            <span class="crumbs-level" id="crumbsLevel">
                全部商品
            </span>
        </section>

        <section class="selector" id="selector">
            <!--  分类部分 start -->
                   <div class="sl-category" id="slCategory">
                    <div class="sl-line-wrap">
                        <div class="mod-key"><strong>分类：</strong></div>
                        <div class="mod-value">
                            <div class="mod-value-list">
                                <ul>
                                            <li class="">
                                                <a data-value="76:1" data-tag="0" data-parent="" data-mtype="store_list_fl_1" href="#" title="手机">手机</a>
                                            </li>
                                            <li class="">
                                                <a data-value="77:4,12,13,14,15,17,18,19,30,31,33,34,41,43,45,50,52,58,60,74,79,80,84,85,90,91,93,94,96" data-tag="0" data-parent="" data-mtype="store_list_fl_2" href="#" title="智能硬件">智能硬件</a>
                                            </li>
                                            <li class="">
                                                <a data-value="79:5,28,29,68,69" data-tag="0" data-parent="" data-mtype="store_list_fl_3" href="#" title="耳机 / 音箱">耳机 / 音箱</a>
                                            </li>
                                            <li class="">
                                                <a data-value="80:4,26" data-tag="0" data-parent="" data-mtype="store_list_fl_4" href="#" title="路由器 / 移动电源">路由器 / 移动电源</a>
                                            </li>
                                            <li class="">
                                                <a data-value="81:21" data-tag="0" data-parent="" data-mtype="store_list_fl_5" href="#" title="保护套 / 后盖 / 贴膜">保护套 / 后盖 / 贴膜</a>
                                            </li>
                                            <li class="">
                                                <a data-value="82:22,23" data-tag="0" data-parent="" data-mtype="store_list_fl_6" href="#" title="数据线 / 电源适配器">数据线 / 电源适配器</a>
                                            </li>
                                            <li class="">
                                                <a data-value="83:24,25,40,42,46,48,55,56,72,73,83,86,87,88,92" data-tag="0" data-parent="" data-mtype="store_list_fl_7" href="#" title="周边配件">周边配件</a>
                                            </li>
                                </ul>
                            </div>
                        </div>

                            <div class="mod-ext">
                                <a class="sl-e-more J_extMore" href="javascript:;" style="">更多<i></i></a>
                            </div>
                    </div>
                   </div>
            <div class="sl-prop" id="slProp">
                        <div class="sl-line-wrap">
                            <div class="mod-key"><span>品牌：</span></div>
                            <div class="mod-value">
                                <div class="mod-value-list">
                                    <ul>
                                           <li class="vm-all">
                                                <a title="全部" data-value="96:1,18951,884,18518,17898,17899,872,878,885,14257,19308,881,882,883,17513,9159,1717,11755,874,18439,876,877,871,17984,18266,18361,7806,18070,18669,886,879,880,875,873,11236,18932,17910,11292,17848,19088" href="#">全部</a>
                                           </li>
                                                   <li>
                                                       <a data-value="96:1"  data-mtype="store_list_xf_1_1" title="魅族" href="#">魅族</a>
                                                   </li>
                                                   <li>
                                                       <a data-value="96:18951"  data-mtype="store_list_xf_1_2" title="乐心" href="#">乐心</a>
                                                   </li>
                                                   <li>
                                                       <a data-value="96:884"  data-mtype="store_list_xf_1_3" title="先锋" href="#">先锋</a>
                                                   </li>
                                                   <li>
                                                       <a data-value="96:18518"  data-mtype="store_list_xf_1_4" title="暴风魔镜" href="#">暴风魔镜</a>
                                                   </li>
                                                   <li>
                                                       <a data-value="96:17898,17899"  data-mtype="store_list_xf_1_5" title="新游" href="#">新游</a>
                                                   </li>
                                                   <li>
                                                       <a data-value="96:872"  data-mtype="store_list_xf_1_6" title="魅航" href="#">魅航</a>
                                                   </li>
                                                   <li>
                                                       <a data-value="96:878"  data-mtype="store_list_xf_1_7" title="航嘉" href="#">航嘉</a>
                                                   </li>
                                                   <li>
                                                       <a data-value="96:885"  data-mtype="store_list_xf_1_8" title="铁三角" href="#">铁三角</a>
                                                   </li>
                                                   <li>
                                                       <a data-value="96:14257"  data-mtype="store_list_xf_1_9" title="Beats" href="#">Beats</a>
                                                   </li>
                                                   <li>
                                                       <a data-value="96:19308"  data-mtype="store_list_xf_1_10" title="索尼" href="#">索尼</a>
                                                   </li>
                                                   <li>
                                                       <a data-value="96:881,882,883,885,17513,19308,9159,1717,11755,874,878,18439,876,877,871,872,17984,18951,18266,18361,7806,18070,18669,18518,886,879,880,875,873,11236,18932,17910,11292,17848,17898,17899,19088"  data-mtype="store_list_xf_1_11" title="其他品牌" href="#">其他品牌</a>
                                                   </li>
                                    </ul>
                                </div>
                            </div>
                                <div class="mod-ext">
                                    <a class="sl-e-more J_extMore" href="javascript:;"  style="visibility: visible;">更多<i></i></a>
                                </div>

                        </div>
            </div>
        </section>

<section class="filter clearfix" id="filter">
    <div class="filter-order" id="J_filterOrder">
        <a class="active" data-tag="0" data-mtype="store_list_sx_1" href="#">
            推荐
        </a>
        <a data-tag="1" data-mtype="store_list_sx_2" href="#">
            新品
        </a>
        <a data-tag="2" data-mtype="store_list_sx_3" href="#">
            价格<i class="icon-arrow-down"></i>
        </a>
    </div>
    <div class="filter-condition" id="J_filterCondition">
        <label class="bs-checkbox" data-mtype="store_list_sx_xz" >
            <i></i>仅显示有货商品
        </label>
    </div>
</section>

<section class="goods-list" id="goodsList">
        <ul class="goods-list-wrap clearfix" id="goodsListWrap">
        		@foreach($data as $v)
                <li class="gl-item">
                    <dl class="gl-item-wrap">
                        <dd class="mod-pic">
                            <a data-mtype="store_list_kw_1" target="_blank" href="http://detail.meizu.com/item/meilan_e1.html?click=store_list_kw_1" title="">
                                <img width="220" height="220"
                                     src="/uploads/goods/{{ $v -> photo }}">
                            </a>
                        </dd>
                        <dd class="mod-name">
                            <a data-mtype="store_list_kw_1" target="_blank" href="#" title="">
                           	{{ $v -> name }}
                            </a>
                        </dd>
                        <dd class="mod-price">
                                <span>￥</span>
                                <span class="vm-price">{{ $v -> price }}</span>
                        </dd>
                    </dl>
                </li>
                @endforeach
        </ul>
</section>
<section class="empty clearfix" id="empty" style="display:none;">
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

<section class="pages" id="pages">
</section>
    <section class="recommend" id="recommend">
        <div class="recommend-hd">
            <h2 class="mod-title">为您推荐</h2>
            <div class="mod-control" id="recommendDirectionNav">
                <a class="vm-prev flex-prev" data-mtype="store_list_tj_a" href="#" id="J_recommendPrev">
                    <i> </i>
                </a>
                <a class="vm-next flex-next" data-mtype="store_list_tj_b" href="#" id="J_recommendNext">
                    <i></i>
                </a>
            </div>
        </div>
        <div class="recommend-slider" id="J_recommendSlider">
            <ul class="recommend-slider-wrap">
            			@foreach($data as $v)
                        <li class="rs-item">
                            <a class="rs-item-wrap" data-mtype="sotre_list_tj_1"
                                   href="http://detail.meizu.com/item/meizu_pro6.html?click=sotre_list_tj_1"
                                target="_blank">
                                <div class="mod-pic">
                                    <img src="/uploads/goods/{{ $v -> photo }}" width="180" height="180">
                                </div>
                                <div class="mod-desc">
                                    <h4 class="vm-title">{{ $v -> name }}</h4>
                                    <h6 class="vm-subtitle">{{ $v -> explain }}</h6>
                                    <p class="vm-price">
                                        <span>¥</span><span class="vm-price-text">{{ $v -> price }}</span>
                                    </p>
                                </div>
                            </a>
                        </li>
                        @endforeach
            </ul>
        </div>
    </section>
    </div>
</main>
</body>

@endsection;