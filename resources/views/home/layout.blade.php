<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{session('config') -> title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>| {{ config('app.name') }} - @yield('title')</title>
    <script type="text/javascript" src="/jquery-1.8.3.min.js"></script>
    <link href="//store.res.meizu.com/resources/php/store/java/layout/img/favicon-2e71785f44.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="//store.res.meizu.com/resources/php/store/java/layout/img/favicon-2e71785f44.ico" rel="icon" type="image/x-icon" />
    <meta name="description" content="{{session('config') -> des}}">
    <meta name="Keywords" content="{{session('config') -> keywords}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{url('/hm/css/layout.css')}}" />
    <link rel="stylesheet" href="{{url('/detail/css/main-610bbe3.css')}}">
    <link rel="stylesheet" href="{{url('/detail/css/main-610bbe3.css')}}">
    <link rel="stylesheet" href="{{url('/detail/css/layout-ea436a570a.css')}}" />

    <!--[if lt IE 9]>
    <script src="js/html5shiv-3ed50bb69a.js" type="text/javascript"></script>
    <script src="js/es5-shim-50bbaee56e.js" type="text/javascript"></script>
    <![endif]-->
<link rel="stylesheet" href="{{url('/hm/css/main.css')}}"/>
<link rel="stylesheet" href="{{url('/hm/css/pkg-home.css')}}"/>
<link rel="stylesheet" href="{{url('/order/layout-ea436a570a.css')}}">
<link rel="stylesheet" href="{{url('/order/order-newPayment-2c85fe848a.css')}}">
<style>
    .sureGet .ui-pop-main .ui-pop-cont{
        line-height: 28px !important;
        margin: 64px auto 30px !important;
        padding:0 30px;
    }
    .font-14{
        font-size: 14px;
    }
    .big-font{
        font-size: 18px;
    }
</style>
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
                    <li class="layout-topbar-downmenu-item"><a class="layout-topbar-downmenu-link exit" data-mdesc="我的商城下拉框4" data-mtype="store_index_yt_my_4" href="{{url('/home/user/logout')}}">退出</a></li>
                </ul>
            </li>
            <!-- @endif -->
        </ul>
    </div>
</div>
<div class="layout-header clearfix">
    <div class="mzcontainer">
        <div class="layout-header-logo">
            <a href="{{url('/home/index/index')}}"><img width="152px" height="72px" src="{{url('/uploads/logo')}}/{{session('config') -> logo}}" alt="LOGO"></a>
        </div>

        <div class="layout-header-nav-downmenu" id="layoutHeaderNavDownmenu"></div>
    </div>
</div>


@yield('content')

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
                @foreach(session('name') as $k => $v)
                    <li><a class="layout-footer-nav-link" href="{{$v['1']}}">{{$v['0']}}</a></li>
                @endforeach
                </ul>
            </li>
            <li class="layout-footer-nav-item">
                <p class="layout-footer-nav-title">Flyme</p>
                <ul class="layout-footer-nav-list">
                    <li><a class="layout-footer-nav-link">开放平台</a></li>
                    <li><a class="layout-footer-nav-link">固件下载</a></li>
                    <li><a class="layout-footer-nav-link">软件商店</a></li>
                    <li><a class="layout-footer-nav-link">查找手机</a></li>
                </ul>
            </li>
            <li class="layout-footer-nav-item">
                <p class="layout-footer-nav-title">关于我们</p>
                <ul class="layout-footer-nav-list">
                    <li><a class="layout-footer-nav-link">关于魅族</a></li>
                    <li><a class="layout-footer-nav-link">加入我们</a></li>
                    <li><a class="layout-footer-nav-link">联系我们</a></li>
                    <li><a class="layout-footer-nav-link">法律声明</a></li>
                </ul>

            </li>
            <li class="layout-footer-nav-item">
                <p class="layout-footer-nav-title">关注我们</p>
                <ul class="layout-footer-nav-list">
                    <li><a class="layout-footer-nav-link">新浪微博</a></li>
                    <li><a class="layout-footer-nav-link">腾讯微博</a></li>
                    <li><a class="layout-footer-nav-link">QQ空间</a></li>
                    <li>
                        <a class="layout-footer-nav-link layout-footer-nav-wechat" href="javascript:;">
                            官方微信
                            <img class="layout-footer-nav-wechat-img" src="{{ url('/hm/picture/weixin.png') }}" alt="微信二维码">
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
        <div class="layout-footer-copyright">{{session('config') -> copyright}}
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://www.miitbeian.gov.cn/" target="_blank">备案号：粤ICP备13003602号-2</a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="//www2.res.meizu.com/zh_cn/images/common/icp2.jpg') }}" target="_blank">经营许可证编号：粤B2-20130198</a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="//www2.res.meizu.com/zh_cn/images/common/com_licence.jpg') }}" target="_blank">营业执照</a>
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


<script src="{{url('/hm/js/layout.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{url('/hm/js/pkg-home.js') }}"></script>
<script charset="utf-8">var $=require("common:lib/jquery/jquery-1.11.3");
$(function(){
    require("home:widgets/settlement-ad/settlement-ad"),
    require("home:widgets/home-slider/home-slider"),
    require("home:widgets/home-recommend/home-recommend"),
    require("home:widgets/home-category/home-category"),
    require("home:widgets/home-gotop/home-gotop"),
    require("home:js/jquery.lazyload/jquery.lazyload"),
    $("img.home-img-lazy").lazyload({})
});
</script>
<script>
    var __mzt = __mzt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "{{ url('/hm/js/analytics-min.js') }}";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

<script type="text/javascript" charset="utf-8">
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src ="{{ url('/hm/js/flow.js') }}";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<script type="text/javascript">
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "{{ url('/hm/js/hm.js')}}";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script></body>
</html>

