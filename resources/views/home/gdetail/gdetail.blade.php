<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>魅族商城</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//store.res.meizu.com/resources/php/store/java/layout/img/favicon-2e71785f44.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="//store.res.meizu.com/resources/php/store/java/layout/img/favicon-2e71785f44.ico" rel="icon" type="image/x-icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="PRO 6s，11月18日，限量开售，正品行货，另有PRO 6s详细介绍、图片、价格、参数、售前咨询等，购买PRO 6s上魅族商城，全场包邮，7天无理由退货，15天换货保障。">
    <meta name="keywords" content="PRO 6s，魅族，魅族商城">
    <link rel="stylesheet" href="{{url('/detail/css/layout-ea436a570a.css')}}" />


    <!--[if lt IE 9]>
    <script src="js/html5shiv-3ed50bb69a.js" type="text/javascript"></script>
    <script src="js/es5-shim-50bbaee56e.js" type="text/javascript"></script>
    <![endif]-->
<link rel="stylesheet" href="{{url('/detail/css/main-610bbe3.css')}}">
<script type="text/javascript" src="{{url('/detail/js/jquery-1.8.3.min.js')}}"></script>
<script type="text/javascript" src="{{url('/detail/js/jquery.fly.min.js')}}"></script>
</head>
<body>

    <!-- common header -->
<div class="layout-topbar clearfix login" id="topbar">
    <div class="mzcontainer">
        <ul class="layout-topbar-left clearfix">
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第1个" data-mtype="store_index_yt_1" target="" href="#">魅族官网</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第2个" data-mtype="store_index_yt_2" href="{{ url('/home/index/index') }}">魅族商城</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第3个" data-mtype="store_index_yt_3" target="" href="#">Flyme</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第4个" data-mtype="store_index_yt_4" target="" href="#">专卖店</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第5个" data-mtype="store_index_yt_5" target="" href="#">服务</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第6个" data-mtype="store_index_yt_6" target="" href="#">社区</a></li>
        </ul>
        <ul class="layout-topbar-right clearfix">

            <!-- @if(!session('master')) -->
            <li class="layout-topbar-right-links member signin"><a class="layout-topbar-link" href="{{url('home/user/login')}}">登录</a></li>
            <li class="layout-topbar-right-links member signin"><a class="layout-topbar-link" href="{{url('home/user/register')}}">注册</a></li>
            <!-- @else if(session('master')) -->
            <li class="layout-topbar-right-links"><a id="topbarOrderMsg" class="layout-topbar-link has-msg"  data-mtype="store_index_yt_order" target="_blank" href="{{ url('/home/ordercenter/index') }}">我的订单</a></li>
            <li class="layout-topbar-right-links member signin">
                <a class="layout-topbar-link" target="_blank" href="{{url('/home/user/psersonal/index')}}"><span class="layout-topbar-username" id="topbarUser">{{session('master') -> nickname}}</span>的商城<i class="layout-topbar-triangle"></i></a>
                <ul class="layout-topbar-downmenu">
                    <li class="layout-topbar-downmenu-item"><a class="layout-topbar-downmenu-link" data-mdesc="我的商城下拉框1" data-mtype="store_index_yt_my_1" target="_blank" href="{{ url('/home/ordercenter/address') }}">地址管理</a></li>

                    <li class="layout-topbar-downmenu-item"><a class="layout-topbar-downmenu-link" data-mdesc="我的商城下拉框3" data-mtype="store_index_yt_my_3" target="_blank" href="{{ url('/home/feedback/add') }}">问题反馈</a></li>
                    <li class="layout-topbar-downmenu-item"><a class="layout-topbar-downmenu-link exit" data-mdesc="我的商城下拉框4" data-mtype="store_index_yt_my_4" href="{{url('home/user/logout')}}">退出</a></li>
                </ul>
            </li>
            <!-- @endif -->
        </ul>
    </div>
</div>


        <!--下面是模板标签，不可删除-->
        <main class="wrapper page-detail">
            <div class="container">
                <section class="crumbs clearfix">
                            <a data-mtype="store_de_mbx_1" href="http://store.meizu.com/index.html">首页</a>&nbsp;&gt;&nbsp;
                            <a class="ellipsis crumbs-title">PRO 6s</a>
                </section>
                <section class="row">
                    <div class="preview" id="preview">
                        <div class="preview-booth">
                            <a href="javascript:;" id="J_imgBooth">
                                <img id="parentimg" src="picture/cnqojvgaobyabejwaa4t7qnqigw892.png@680x680.jpg')}}" height="375" width="375"
                                     alt="">
                            </a>
                        </div>
                        <ul class="preview-thumb clearfix" id="J_previewThumb">
                                <li class="current">
                                    <a data-mtype="store_de_tp_1" href="#"><img
                                            src="picture/cnqojvgaobyabejwaa4t7qnqigw892.png@120x120.jpg" width="75" height="75"></a>
                                </li>
                                <li >
                                    <a data-mtype="store_de_tp_2" href="#"><img
                                            src="/picture/cnqojvgaobqabmgvaasusokl9bo121.png@120x120.jpg" width="75" height="75"></a>
                                </li>
                                <li >
                                    <a data-mtype="store_de_tp_3" href="#"><img
                                            src="/picture/cix_s1gaobyacceeaaiv6z8lynm553.png@120x120.jpg" width="75" height="75"></a>
                                </li>
                                <li >
                                    <a data-mtype="store_de_tp_4" href="#"><img
                                            src="/picture/cnqojvgaob6aa5d9aakkvhyacwm442.png@120x120.jpg" width="75" height="75"></a>
                                </li>
                        </ul>
                    </div>

                    <div class="property" id="property">
                        <form action="{{ url('/home/order') }}" method="post">
                        {{csrf_field()}}
                            <div class="property-hd">
                                <h1><input id="name" name="name" style="border:0;color:black" value="{{$name}}"></h1>

                                <p class="mod-info "><input name="explain" style="border:0;BACKGROUND-COLOR: transparent;color:red" value="限量开售"></p>
                            </div>
                            <div class="property-sell">
                                <dl class="property-sell-price clearfix">
                                    <dt class="vm-metatit" id="J_discountTag">价<span class="s-space"></span><span
                                            class="s-space"></span>格：
                                    </dt>
                                    <dd>
                                        <div class="mod-price">
                                            <small>¥</small>
                                            @foreach($price as $val3)
                                            <input type="hidden" name="price2" value="{{$val3}}">
                                            @endforeach
                                            <span class="vm-money"><input id="price" name="price" style="border:0;BACKGROUND-COLOR: transparent;color:red" value="{{ $val3 }}"></span>
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
                                        <a class="vm-more" id="J_promoMore" href="#">更多></a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="property-set">
                                    <dl class="property-set-sale" data-property="网络类型">
                                        <dt class="vm-metatit">网络类型：</dt>
                                        <dd class="">
                                                        @foreach($net as $value2)
                                                        <label><input name="net" type="radio" style="border:0;BACKGROUND-COLOR: transparent;" value="{{$value2}}">{{$value2}}</label>
                                                        @endforeach
                                        </dd>
                                    </dl>
                                    <dl class="property-set-sale" data-property="颜色分类">
                                        <dt class="vm-metatit">颜色预览：</dt>
                                        <dd class="">
                                                <a data-value="3:19"
                                                   class="vm-sale-img"
                                                   data-mtype="store_de_sp_2_1" href="#"
                                                   title="玫瑰金">
                                                        <img src="{{ url('/detail/picture/cix_s1gaobuajthwaa1jpctyxxq181.png@80x80.png')}}" width="32" height="32">
                                                </a>

                                                <a data-value="3:18412"
                                                   class="vm-sale-img"
                                                   data-mtype="store_de_sp_2_2" href="#"
                                                   title="月光银">
                                                        <img src="{{ url('/detail/picture/cnqojvgaoh6ayundaa0vjoomivw304.png@80x80.png')}}" width="32" height="32">
                                                </a>

                                                <a data-value="3:18413"
                                                   class="vm-sale-img"
                                                   data-mtype="store_de_sp_2_3" href="#"
                                                   title="星空黑">
                                                        <img id="fly-photo" src="{{ url('/detail/picture/cix_s1gaog-aj-cpaaqulbibw-m082.png@80x80.png')}}" width="32" height="32">
                                                </a>

                                        </dd>
                                    </dl>
                                    <dl class="property-set-sale" data-property="颜色分类">

                                        <dt class="vm-metatit">颜色分类：</dt>
                                        <dd class="">
                                        @foreach($color as $val)
                                        <span><input type="radio" id="color" name="color" style="border:0;BACKGROUND-COLOR: transparent;"value="{{$val}}">{{$val}}</span>
                                        @endforeach
                                        </dd>
                                    </dl>
                                    <dl class="property-set-sale" data-property="内存容量">
                                        <dt class="vm-metatit">内存容量：</dt>
                                        <dd class="clearfix">
                                                        @foreach($rom as $value)
                                                        <span><input id="rom" name="rom" type="radio"  style="border:0;BACKGROUND-COLOR: transparent;" value="{{$value}}">{{$value}}</span>
                                                        @endforeach

                                        </dd>
                                    </dl>
                            </div>
                            <div class="property-service">
                                    <dl class="property-service-item clearfix">
                                        <dt class="vm-metatit">支<span class="s-space"></span><span class="s-space"></span>持：
                                        </dt>
                                        <dd class="mod-bd">


                                                <span><i class="icon icon-service"></i><input name="supports" type="text" style="border:0;BACKGROUND-COLOR: transparent;" disabled value="顺丰包邮"></span>
                                                <span><i class="icon icon-service"></i><input name="golden" style="border:0;BACKGROUND-COLOR: transparent;" disabled value="7天无理由退货"></span>
                                        </dd>
                                    </dl>
                                <dl class="property-service-provider clearfix">
                                    <dt class="vm-metatit">服<span class="s-space"></span><span class="s-space"></span>务：
                                    </dt>
                                    <dd class="clearfix">
                                        <span id="J_installmentInfo"></span>
                                            本商品由 魅族 负责发货并提供售后服务
                                    </dd>
                                </dl>
                            </div>
                            <div class="property-buy">
                                <p class="vm-message" >
                                </p>
                                <dl class="property-buy-quantity">
                                    <dt class="vm-metatit">数<span class="s-space"></span><span class="s-space"></span>量：
                                    </dt>
                                    <dd class="clearfix">
                                        <div class="mod-control">
                                            <a title="减少" href="#" id="reduce" class="vm-minus">-</a>
                                          <span><input required id="number" name="number" type="text" value="1"></span>
                                            <a title="增加" href="#"  id="add" class="vm-plus ">+</a>
                                        </div>
                                        </dd>
                                        <dd>
                                        <div>
                                        <button id="buy-now" class="btn btn-primary btn-lg" >立即购买</button>
                                        <a id="addcar" class="btn btn-primary btn-lg" >加入购物车</a>

                                        </div>
                                    </dd>

                                </dl>
                            </div>
                                <div class="property-related">
                                    <dl class="property-related-item">
                                        <dt class="vm-metatit">还可以看：</dt>
                                        <dd class="clearfix">
                                            <ul>
                                                    <li>
                                                        <a href="http://detail.meizu.com/item/mx6" data-mtype="store_de_tj_1_10369"
                                                           target="_blank">
                                                            <img src="{{ url('/detail/picture/cnqojvenvdsaigcraa-eha0uf7a332.png@80x80.jpg')}}" width="32" height="32"
                                                                 alt="">魅族 MX6 全网通公开版1799元起
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="http://detail.meizu.com/item/meizu_pro6" data-mtype="store_de_tj_2_10167"
                                                           target="_blank">
                                                            <img src="{{ url('/detail/picture/1465895411-99697.png@80x80.jpg')}}" width="32" height="32"
                                                                 alt="">魅族PRO 6 32G版 2299元
                                                        </a>
                                                    </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                    </form>
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
                            <a href="#" class="btn btn-primary btn-lg"><i>现在购买</i></a>
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
                            <ul class="clearfix">
                                <li class="current">
                                    <a data-mtype="store_de_xq_1" href="#">商品详情</a>
                                </li>
                                <li>
                                    <a data-mtype="store_de_xq_2" href="#">规格参数</a>
                                </li>
                                    <li>
                                        <a data-mtype="store_de_xq_3" href="#">常见问题</a>
                                    </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="detail-content container">
                    <div class="introduce" id="introduce" style="display:block;">
                    @foreach($photo as $val)
                            <img class="lazy" data-original="{{url('/uploads/hm/photos/')}}/{{$val -> photo}}" width="1240" alt="">
                    @endforeach
                    </div>
                    <div class="standard" id="standard">
                        <table class="standard-table">
                            <tbody>
                                @foreach($parameter as $v)
                                    {!! $v -> parameter !!}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                        <div class="question" id="question">
                            <div class="question-list">
                                <h2>热门回答</h2>
                                @foreach($faq as $v)
                                    <dl class="mod-item">
                                        <dt class="vm-question">
                                        {!! $v -> question !!}
                                        </dt>
                                        <dd class="vm-answer">
                                        {!! $v -> answer !!}
                                        </dd>
                                    </dl>
                                @endforeach
                            </div>
                        </div>
                </div>
            </section>
        </main>


<div class="layout-footer clearfix">
    <div class="mzcontainer">
        <ul class="layout-footer-service clearfix">
            <li class="layout-footer-service-item">
                <i class="layout-font layout-font-foot1"></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">7天</span>无理由退货
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i class="layout-font layout-font-foot2"></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">15天</span>换货保障
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i class="layout-font layout-font-foot3"></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">1年</span>免费保修
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i class="layout-font layout-font-foot4"></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">百城</span>速达
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i class="layout-font layout-font-foot5"></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">全场</span>包邮
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i class="layout-font layout-font-foot6"></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">2000多家</span>专卖店
                </p>
            </li>
        </ul>
        <ul class="layout-footer-nav clearfix">
            <li class="layout-footer-nav-item">
                <p class="layout-footer-nav-title">帮助说明</p>
                <ul class="layout-footer-nav-list">
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://store.meizu.com/explain/payment_help.html">支付方式</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://store.meizu.com/explain/deliverynote.html">配送说明</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://store.meizu.com/explain/warranty_services.html">售后服务</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://store.meizu.com/explain/payment_helps.html">付款帮助</a></li>
                </ul>
            </li>
            <li class="layout-footer-nav-item">
                <p class="layout-footer-nav-title">Flyme</p>
                <ul class="layout-footer-nav-list">
                    <li><a class="layout-footer-nav-link" href="https://open.flyme.cn/" target="_blank">开放平台</a></li>
                    <li><a class="layout-footer-nav-link" href="http://www.flyme.cn/firmware.jsp" target="_blank">固件下载</a></li>
                    <li><a class="layout-footer-nav-link" href="http://app.flyme.cn/" target="_blank">软件商店</a></li>
                    <li><a class="layout-footer-nav-link" href="http://finder.flyme.cn/" target="_blank">查找手机</a></li>
                </ul>
            </li>
            <li class="layout-footer-nav-item">
                <p class="layout-footer-nav-title">关于我们</p>
                <ul class="layout-footer-nav-list">
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://www.meizu.com/about.html">关于魅族</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://hr.meizu.com/">加入我们</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://www.meizu.com/contact.html">联系我们</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://www.meizu.com/legalStatement.html">法律声明</a></li>
                </ul>

            </li>
            <li class="layout-footer-nav-item">
                <p class="layout-footer-nav-title">关注我们</p>
                <ul class="layout-footer-nav-list">
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://weibo.com/meizumobile">新浪微博</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://t.qq.com/meizu_tech">腾讯微博</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://user.qzone.qq.com/2762957059">QQ空间</a></li>
                    <li>
                        <a class="layout-footer-nav-link layout-footer-nav-wechat" href="javascript:;">
                            官方微信
                            <img class="layout-footer-nav-wechat-img" src="{{url('/detail/picture/weixin.png')}}" alt="微信二维码">
                        </a>
                    </li>
                </ul>
            </li>
            <li class="layout-footer-nav-item ">
                <p class="layout-footer-nav-title tel">24小时全国服务热线</p>
                <p><a class="layout-footer-nav-tel" href="tel:400-788-3333">400-788-3333</a></p>
                <p>
                    <a class="layout-footer-nav-btn" href="javascript:;" onclick="window.open('http://live-i.meizu.com/live800/chatClient/chatbox.jsp?companyID=8957&amp;configID=4&amp;enterurl='+ encodeURIComponent(document.URL) + '&amp;pagereferrer=' + encodeURIComponent(document.referrer) + '&amp;info=&amp;k=1', '_blank','height=775,width=1200,fullscreen=3,top=100,left=100,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=no,location=no,titlebar=no,fullscreen=no');">
                        <i class="layout-font layout-font-talk"></i>24小时在线客服
                    </a>
                </p>
            </li>
        </ul>
        <div class="layout-footer-copyright">
            &copy;2016 Meizu Telecom Equipment Co., Ltd. All rights reserved.
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://www.miitbeian.gov.cn/" target="_blank">备案号：粤ICP备13003602号-2</a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="//www2.res.meizu.com/zh_cn/images/common/icp2.jpg')}}" target="_blank">经营许可证编号：粤B2-20130198</a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="//www2.res.meizu.com/zh_cn/images/common/com_licence.jpg')}}" target="_blank">营业执照</a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://210.76.65.188/" rel="nofollow" target="_blank">
                <i class="layout-icon layout-icon-license"></i>
            </a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://210.76.65.188/webrecord/innernet/Welcome.jsp?bano=4404013010531" rel="nofollow" target="_blank">
                <i class="layout-icon layout-icon-wel"></i>
            </a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="https://credit.szfw.org/CX20151204012550820380.html" rel="nofollow" target="_blank">
                <i class="layout-icon layout-icon-trust"></i>
            </a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://si.trustutn.org/info?sn=749160913024249024251&certType=1" rel="nofollow" target="_blank">
                <i class="layout-icon layout-icon-official"></i>
            </a>
        </div>
    </div>
</div>

<script src="{{url('/detail/js/layout-208548c914.js')}}" type="text/javascript"></script>

<script type="text/javascript">
            //商品源数据
            var MZ = {};
                MZ.modelData = {"itemId":10557,"type":2,"recommend":"14:18238;3:19;13:38","activeStatus":1,"shelveTime":null,"supportFastArrival":false,"cspuMap":{"14:18238;3:18412;13:38":{"cspuId":1557,"skuId":2488,"price":2699.00,"originPrice":2699.00,"names":"PRO 6s 全网通公开版 月光银 64GB","itemName":"PRO 6s","attributes":"全网通公开版 月光银 64GB","images":["http://open.file.meizu.com/group1/M00/00/A1/Cix_s1gaoH6AEGSVAA4LHSzbRQU925.png","http://open.file.meizu.com/group1/M00/00/A1/Cix_s1gaoHyAcKDLAAR7xefoHHk072.png","http://open.file.meizu.com/group1/M00/00/A0/CnQOjVgaoH-AVbqbAAhEbrrjVSo163.png","http://open.file.meizu.com/group1/M00/00/A1/Cix_s1gaoIGAFS1rAAKsR1bMnWo459.png"],"stock":0,"packageIds":[],"buyButton":"售罄","priceCent":269900},"14:18238;3:18413;13:38":{"cspuId":1558,"skuId":2489,"price":2699.00,"originPrice":2699.00,"names":"PRO 6s 全网通公开版 星空黑 64GB","itemName":"PRO 6s","attributes":"全网通公开版 星空黑 64GB","images":["http://open.file.meizu.com/group1/M00/00/A0/CnQOjVgaoHCAElUeAAt-NlibcLE021.png","http://open.file.meizu.com/group1/M00/00/A0/CnQOjVgaoG6AFdBvAARSVT1Ofl4789.png","http://open.file.meizu.com/group1/M00/00/A1/Cix_s1gaoHCAXy2aAAV67G8l3X0685.png","http://open.file.meizu.com/group1/M00/00/A0/CnQOjVgaoHKAdz42AAJngEiD5r0412.png"],"stock":0,"packageIds":[],"buyButton":"即将发售","priceCent":269900},"14:18238;3:19;13:38":{"cspuId":1555,"skuId":2486,"price":2699.00,"originPrice":2699.00,"names":"PRO 6s 全网通公开版 玫瑰金 64GB","itemName":"PRO 6s","attributes":"全网通公开版 玫瑰金 64GB","images":["http://open.file.meizu.com/group1/M00/00/A0/CnQOjVgaoByAbEJwAA4t7Qnqigw892.png","http://open.file.meizu.com/group1/M00/00/9F/CnQOjVgaoBqABmgVAASUSOKl9Bo121.png","http://open.file.meizu.com/group1/M00/00/A0/Cix_s1gaoByAcCEEAAiV6z8lYNM553.png","http://open.file.meizu.com/group1/M00/00/A0/CnQOjVgaoB6AA5D9AAKkvhYacwM442.png"],"stock":0,"packageIds":[],"buyButton":"售罄","priceCent":269900}},"packageMap":{},"packageStockMap":{"14:18238;3:18412;13:38":{"skuId":2488,"stock":0,"buyButton":"售罄"},"14:18238;3:18413;13:38":{"skuId":2489,"stock":0,"buyButton":"即将发售"},"14:18238;3:19;13:38":{"skuId":2486,"stock":0,"buyButton":"售罄"}},"packageItems":{},"skuMap":{"2488":"14:18238;3:18412;13:38","2489":"14:18238;3:18413;13:38","2486":"14:18238;3:19;13:38"},"discount":null}
        </script>

<script type="text/javascript"
        src="{{url('/detail/js/pkg-detail-7108b78.js')}}"></script>

<script type="text/javascript"
        src="js/pkg-detail-7108b78.js"></script>


<script type="text/javascript" src="url('/hm/js/jqury-1.8.3.min.js')"></script>
<script type="text/javascript">
//验证选择
$('#buy-now').on('click', function(){
    var net = $("input[name='net']");
    var count = 0;
    for (var i = 0; i < net.length; i++) {
        if(!net[i].checked)
        {
            count++;
        }
    };
    if(count == net.length)
    {
        alert('请选择网络类型');
        return false;
    }

    var color = $("input[name='color']");
    var count2 = 0;
    for (var i = 0; i < color.length; i++) {
        if(!color[i].checked)
        {
            count2++;
        }
    };
    if(count2 == color.length)
    {
        alert('请选择颜色');
        return false;
    }

    var rom = $("input[name='rom']");
    var count3 = 0;
    for (var i = 0; i < rom.length; i++) {
        if(!rom[i].checked)
        {
            count3++;
        }
    };
    if(count3 == rom.length)
    {
        alert('内存容量');
        return false;
    }




});

// 根据rom改变价格
var rom = $("input[name='rom']");
rom.on('click', function(){
    changePrice();
});

function changePrice(){
    var romchecked = parseInt($("input[name='rom']:checked").attr('value'));
    var rom = $("input[name='rom']");
    var countMax = 0;
    for (var i = 0; i < rom.length; i++) {
        var count = parseInt(rom[i].value);
        if(countMax <= count)
        {
            countMax = count;
        }
    };
    // alert(countMax);
    var price2 = $("input[name='price2']");
    var price3 = parseInt($("input[name='price2']").attr('value'));
    var countMax2 = price3;
    var countMin = price3;
    for (var j = 0; j < price2.length; j++)
    {
        var count2 = parseInt(price2[j].value);
        if(countMax2 <= count2)
        {
            countMax2 = count2;
        }
    }
    if(romchecked == countMax)
    {
        $("input[name='price']").attr('value', countMax2);
    }else
    {
        $("input[name='price']").attr('value', countMin);
    }
}

//改变数量
$('#add').on('click', function(){
    var value = parseInt($('#number').attr('value'));
    value +=1;
    $('#number').attr('value', value);
    return false;
});

$('#reduce').on('click', function(){
    var value = parseInt($('#number').attr('value'));
    if(value == 1)
    {
        return false;
    }
    value -=1;
    $('#number').attr('value', value);
    return false;
});
</script>


<script type="text/javascript" src="url('/hm/js/jquery.fly.min.js')"></script>
<script type="text/javascript">
//ajax添加购物车
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#addcar').on('click', function(event){

                 //验证选择

                var net = $("input[name='net']");
                var count = 0;
                for (var i = 0; i < net.length; i++) {
                    if(!net[i].checked)
                    {
                        count++;
                    }
                };
                if(count == net.length)
                {
                    alert('请选择网络类型');
                    return false;
                }

                var color = $("input[name='color']");
                var count2 = 0;
                for (var i = 0; i < color.length; i++) {
                    if(!color[i].checked)
                    {
                        count2++;
                    }
                };
                if(count2 == color.length)
                {
                    alert('请选择颜色');
                    return false;
                }

                var rom = $("input[name='rom']");
                var count3 = 0;
                for (var i = 0; i < rom.length; i++) {
                    if(!rom[i].checked)
                    {
                        count3++;
                    }
                };
                if(count3 == rom.length)
                {
                    alert('内存容量');
                    return false;
                }
            var name = $("input[name='name']").val();
            var price = $("input[name='price']").val();
            var net = $("input:checked[name='net']").val();
            var color = $("input:checked[name='color']").val();
            var rom = $("input:checked[name='rom']").val();
            var number = $("input[name='number']").val();

            $.ajax({
                type: "POST",
                url: "{{ url('home/cart/ajax') }}",
                data: {name:name, price:price, net:net, color:color, rom:rom, number:number},
                success:function(data){
                    if(data == 1)
                    {
                        $("#msg").show().animate({width: '250px'}, 200).fadeOut(1000); //提示信息
                    } else if(data == 0)
                    {
                        alert('添加失败');
                    }else if(data == 2)
                    {
                        alert('此商品已在购物车');
                    }
                },
                error:function()
                {
                    alert('请求异常');
                }
            });
    });

$(function() {
    var offset = $("#end").offset();
    $(".#addcar").click(function(event){
                         var addcar = $('#addcar');
        var img = $('#fly-photo').attr('src');
        var flyer = $('<img class="u-flyer" src="'+img+'">');
        alert(img);
        flyer.fly({
            start: {
                left: event.pageX, //开始位置（必填）#fly元素会被设置成position: fixed
                top: event.pageY //开始位置（必填）
            },
            end: {
                left: offset.left+10, //结束位置（必填）
                top: offset.top+10, //结束位置（必填）
                width: 0, //结束时宽度
                height: 0 //结束时高度
            },
            onEnd: function(){ //结束回调
                $("#msg").show().animate({width: '250px'}, 200).fadeOut(2000); //提示信息
                addcar.removeClass('btn-primary').unbind('click');
                this.destory(); //移除dom
            }
        });
        });
        });


</script>


    <div class="m-sidebar">
        <div class="cart">
            <i id="end"></i>
            <a id="cartsonclick" href="{{url('/home/cart/index')}}"><span color="blue"><img width="25px" src="{{url('/detail/images/cartoon.png')}}" alt="">购物车</span></a>
        </div>
    </div>
    <div id="msg" bgcolor="blue">已成功加入购物车！</div>

</body>
</html>

