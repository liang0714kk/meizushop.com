<!DOCTYPE html>
<!-- saved from url=(0052)http://ordercenter.meizu.com/list/index.html?type=-1 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script charset="utf-8" src="./我的订单-魅族商城_files/v.js')}}"></script><script src="{{url('/order/hm.js')}}"></script><script src="{{url('/order/flow.js')}}"></script><script src="{{url('/order/analytics-min.js')}}"></script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>我的订单-魅族商城</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="http://store.res.meizu.com/resources/php/store/java/layout/img/favicon-2e71785f44.ico" rel="shortcut icon" type="image/x-icon">
    <link href="http://store.res.meizu.com/resources/php/store/java/layout/img/favicon-2e71785f44.ico" rel="icon" type="image/x-icon">
    <meta name="description" content="魅族商城是魅族面向全国服务的官方电子商务平台,提供魅族PRO系列、魅族MX系列和魅蓝系列等产品的预约和购买.官方正品,全国联保.">
    <meta name="keywords" content="魅族官方在线商店、魅族在线商城、魅族官网在线商店、魅族商城">
    <link rel="stylesheet" href="{{url('/order/layout-ea436a570a.css')}}">


    <!--[if lt IE 9]>
    <script src="//store.res.meizu.com/resources/php/store/java/layout/js/html5shiv-3ed50bb69a.js" type="text/javascript"></script>
    <script src="//store.res.meizu.com/resources/php/store/java/layout/js/es5-shim-50bbaee56e.js" type="text/javascript"></script>
    <![endif]-->
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
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第1个" data-mtype="store_index_yt_1" target="_blank" href="http://www.meizu.com/">魅族官网</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第2个" data-mtype="store_index_yt_2" href="http://store.meizu.com/index.html">魅族商城</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第3个" data-mtype="store_index_yt_3" target="_blank" href="http://www.flyme.cn/">Flyme</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第4个" data-mtype="store_index_yt_4" target="_blank" href="http://retail.meizu.com/index.html">专卖店</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第5个" data-mtype="store_index_yt_5" target="_blank" href="http://service.meizu.com/index.html">服务</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第6个" data-mtype="store_index_yt_6" target="_blank" href="http://bbs.meizu.cn/">社区</a></li>
        </ul>
        <ul class="layout-topbar-right clearfix">
            <li class="layout-topbar-right-links"><a id="topbarOrderMsg" class="layout-topbar-link has-msg" data-mdesc="页头-我的订单" data-mtype="store_index_yt_order" target="_blank" href="{{ url('/home/ordercenter/index') }}">我的订单</a></li>
            <li class="layout-topbar-right-links signout"><a class="layout-topbar-link" href="{{url('home/user/login')}}">登录</a></li>
            <li class="layout-topbar-right-links signout"><a class="layout-topbar-link" target="_blank" href="{{url('home/user/register')}}">注册</a></li>
            <li class="layout-topbar-right-links member signin">
                <a class="layout-topbar-link" target="_blank" href="{{url('/home/user/psersonal/index')}}"><span class="layout-topbar-username" id="topbarUser">{{session('master') -> nickname}}</span>的商城<i class="layout-topbar-triangle"></i></a>
                <ul class="layout-topbar-downmenu">
                    <li class="layout-topbar-downmenu-item"><a class="layout-topbar-downmenu-link" data-mdesc="我的商城下拉框1" data-mtype="store_index_yt_my_1" target="_blank" href="{{ url('/home/ordercenter/address') }}">地址管理</a></li>

                    <li class="layout-topbar-downmenu-item"><a class="layout-topbar-downmenu-link" data-mdesc="我的商城下拉框3" data-mtype="store_index_yt_my_3" target="_blank" href="{{ url('/home/feedback/add') }}">问题反馈</a></li>
                    <li class="layout-topbar-downmenu-item"><a class="layout-topbar-downmenu-link exit" data-mdesc="我的商城下拉框4" data-mtype="store_index_yt_my_4" href="{{url('home/user/logout')}}">退出</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>



  @if(session('info'))
                    <div id="jg" class="callout callout-info">
                        <p>{{ session('info')}}</p>
                    </div>
                    @endif

    <div class="store-wrap">
        <div class="crumbs">
            <a href="{{url('/home/index/index')}}">首页&gt;</a><a href="{{url('/home/user/personal/index')}}">我的商城&gt;</a><a href="" class="active">地址管理</a>
        </div>
        <div class="main clearfix">
    <div class="left-nav f-fl">
        <div class="nav-main">
            <a href="{{url('/home/user/personal/index')}}" class="type-title"><i class=""></i>个人中心</a>
            <a href="{{ url('/home/user/personal/edit') }}" class="ml ">个人信息</a>
            <a href="{{ url('/home/ordercenter/index') }}" class="ml ">我的订单</a>
            <a href="{{ url('/home/ordercenter/address') }}" class="ml ">地址管理</a>
            <a href="{{ url('/home/feedback/add') }}" class="ml ">建议反馈</a>
        </div>
    </div>
            <div class="right-content f-fr">
            <div class="address-main">
                <div class="main">
                    <div class="row">
                        <span class="title rollit">新增收货地址</span>
                        <span class="gray">（您目前已有地址<i class="already">{{$count}}</i>个，最多还可以增加<i class="settle">{{$leftcount}}</i>个）</span>
                    </div>
                    <form action="{{url('/home/ordercenter/address/add')}}" method="post">
                    {{csrf_field()}}
                        <!-- 修改地址时要用的地址id -->
                        <input class="addressId" value="" type="hidden">

                        <div class="content">
                            <div class="row namePhone clearfix">
                                <div class="f-fl addressName">
                                    <span>收货人姓名<i class="mark red">*</i></span>
                                    <input class="varify" name="add-name" type="text" placeholder="长度不超过12个字" maxlength="12">
                                </div>
                                <div class="f-fl addressPhone">
                                    <span>收货人电话<i class="mark red">*</i>
                                    <input id="phone" name="add-phone" class="varify" type="text" placeholder="请输入11位手机号" maxlength="11"></span>
                                </div>
                                </div>
                            <div class="row clearfix receverAddress">
                                <span class="f-fl">收货人地址<i class="mark">*</i></span>
                                <div class="info">

    <div>

    <select id="s_province" name="s_province"></select>  

    <select id="s_city" name="s_city" ></select>

    <select id="s_county" name="s_county"></select>

    <script class="resources library" src="{{url('/hm/js/area.js')}}" type="text/javascript"></script>



    <script type="text/javascript">_init_area();</script>

    </div>

    <div id="show"></div>

</div>

<script type="text/javascript">

var Gid  = document.getElementById;

var showArea = function(){

    Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +

    Gid('s_city').value + " - 县/区" +

    Gid('s_county').value + "</h3>"

                            }

Gid('s_county').setAttribute('onchange','showArea()');

</script></div>
                            <div class="row  detailAddress">
                                <span>详细地址<i class="mark">*&nbsp;&nbsp;&nbsp;</i></span>
                                <input id="detailAddress" name="address" class="varify" placeholder="请输入不超过50个字的详细地址，例如：路名，门牌号" maxlength="50" type="text">
                            </div>
                            <div class="opreat">
                                <label for="default">
                                    <input id="default" class="setDefault" name="isDefault" type="radio" value="1">设为默认
                                </label>
                                <label for="default">
                                    <input id="default" class="setDefault" name="isDefault" type="radio" value="0" checked="checked">不设为默认
                                </label>
                                <button href="javascript:;" class="saveAddress">保存</button>
                            </div>
                        </div>
                    </form>

                    <div class="list">
                        <div class="row">
                            <div class="title">
                                <div>已有地址</div>
                                <div class="upload hide">
                                    <i class="iconfont icon-zhuyi"></i>
                                    <span>因配送地址库数据升级，请点击地址进行升级，让您享受更好的配送服务！</span>
                                </div>
                            </div>
                        </div>
                        <div class="listHead">
                            <span class="center w15">收货人姓名</span><span class="center w35">收货人地址</span><span class="center w25">收货人手机号</span><span class="center w10">操作</span>
                        </div>
                        <ul id="tableList" class="">
                        @foreach($data as $v)
                        <li class="">
    <input class="addressId" value="6226478975000" type="hidden">
    <input class="isOld" value="0" type="hidden">

    <span class="center w15">{{$v -> name}}</span>
    <span class="completeAddress center w35">{{$v -> adder}}</span>
    <span class="center w25">{{$v -> phone}}</span>
    <span class="center w10">
      <a class="edit" href="javascript:;"></a>
      <a class="delete" href="{{url('/home/ordercenter/address/delete')}}/{{$v -> id}}">删除</a>
    </span>
    <span class="left w15">
        <a class="beDefault hide" href="javascript:;">设为默认</a>
    </span>
</li>
@endforeach
</ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->

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
                            <img class="layout-footer-nav-wechat-img" src="./我的订单-魅族商城_files/weixin.png" alt="微信二维码">
                        </a>
                    </li>
                </ul>
            </li>
            <li class="layout-footer-nav-item ">
                <p class="layout-footer-nav-title tel">24小时全国服务热线</p>
                <p><a class="layout-footer-nav-tel" href="tel:400-788-3333">400-788-3333</a></p>
                <p>
                    <a class="layout-footer-nav-btn" href="javascript:;" onclick="window.open(&#39;http://live-i.meizu.com/live800/chatClient/chatbox.jsp?companyID=8957&amp;configID=4&amp;enterurl=&#39;+ encodeURIComponent(document.URL) + &#39;&amp;pagereferrer=&#39; + encodeURIComponent(document.referrer) + &#39;&amp;info=&amp;k=1&#39;, &#39;_blank&#39;,&#39;height=775,width=1200,fullscreen=3,top=100,left=100,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=no,location=no,titlebar=no,fullscreen=no&#39;);">
                        <i class="layout-font layout-font-talk"></i>24小时在线客服
                    </a>
                </p>
            </li>
        </ul>
        <div class="layout-footer-copyright">
            ©2016 Meizu Telecom Equipment Co., Ltd. All rights reserved.
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://www.miitbeian.gov.cn/" target="_blank">备案号：粤ICP备13003602号-2</a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://www2.res.meizu.com/zh_cn/images/common/icp2.jpg" target="_blank">经营许可证编号：粤B2-20130198</a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://www2.res.meizu.com/zh_cn/images/common/com_licence.jpg" target="_blank">营业执照</a>
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



<script src="{{url('/hm/js/jquery-1.8.3.min.js')}}" type="text/javascript"></script>
<script src="{{url('/order/layout-208548c914.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{url('/order/order-newPayment-f813d67ce1.js')}}"></script>

<script type="text/javascript">window.onload = function()
{
    //设置定时器 淡出
    setInterval(function()
    {
        $("#jg").fadeOut('1000');
    },1000);
}
</script>
<script>
    var __mzt = __mzt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "//sccom.res.meizu.com/js/analytics-min.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

<script type="text/javascript" charset="utf-8">
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = ('https:' == document.location.protocol ? 'https://tongji-res.meizu.com' : 'http://tongji-res1.meizu.com') + '/resources/tongji/flow.js';
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

<script type="text/javascript">
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?2a0c04774115b182994cfcacf4c122e9";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>


<script type="text/javascript">

var Gid  = document.getElementById;

var showArea = function(){

    Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +

    Gid('s_city').value + " - 县/区" +

    Gid('s_county').value + "</h3>"

                            }

Gid('s_county').setAttribute('onchange','showArea()');

</script>

</body>
</html>
