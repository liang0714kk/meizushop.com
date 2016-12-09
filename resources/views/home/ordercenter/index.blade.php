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


            <li class="layout-topbar-right-links"><a id="topbarOrderMsg" class="layout-topbar-link has-msg" data-mdesc="页头-我的订单" data-mtype="store_index_yt_order" target="_blank" href="{{url('/home/ordercenter/index')}}">我的订单</a></li>
            <li class="layout-topbar-right-links signout"><a class="layout-topbar-link" href="javascript:window.location.href='https://login.flyme.cn/vCodeLogin?sid=unionlogin&service=store&autodirct=true&useruri=http://store.meizu.com/member/login.htm?useruri='+window.location.href;">登录</a></li>
            <li class="layout-topbar-right-links signout"><a class="layout-topbar-link" target="_blank" href="https://member.meizu.com/register">注册</a></li>
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
            <a href="http://store.meizu.com/index.html">首页&gt;</a><a href="http://me.meizu.com/member/index">我的商城&gt;</a><a href="" class="active">我的订单</a>
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
                <div class="order-main">
                    <a class="orderSearch" href="http://ordercenter.meizu.com/list/phone.html" target="_blank">找不到订单？用手机号查询试试&gt;&gt;</a>
                    <div class="type-tab-btn">
                        <a href="{{url('/home/ordercenter/index')}}" class="allOrder @if($active == 'index')
                        active
                        @endif" data-type="-1">全部订单</a><i class="line">|</i>
                        <a class="waitPay
                        @if($active == 'nopay')
                        active
                        @endif" href="{{url('/home/ordercenter/nopay')}}" data-type="0">待付款<span class="amount _actAmount"></span></a><i class="line">|</i>
                        <a class="waitDeliver
                        @if($active == 'nodeliver')
                        active
                        @endif" href="{{url('/home/ordercenter/nodeliver')}}" data-type="1">待发货</a><i class="line">|</i>
                        <a class="hasDeliver
                        @if($active == 'nostate')
                        active
                        @endif"  href="{{url('/home/ordercenter/nostate')}}" data-type="2">已发货</a><i class="line">|</i>
                        <a class="other
                        @if($active == 'achive')
                        active
                        @endif" href="{{url('/home/ordercenter/achive')}}" data-type="99">交易成功</a>
                    </div>
                    <div class="list-head">
                        <ul class="clearfix">
                            <li class="w50">订单明细</li>
                            <li class="w125">售后</li>
                            <li class="w125">金额</li>
                            <li class="w125">状态</li>
                            <li class="w125">操作</li>
                        </ul>
                    </div>
                    @foreach($data as $v)
                    <div id="tableList" class="type-contain ui-load-container"><div class="ui-load-content"><input id="unPayNum" type="hidden" value="0">
<table class="orderItem">
      <tbody><tr class="trHead">
        <td colspan="5" class="title clearfix">
            <div class="f-fl">下单时间：<span class="time">{{$v -> date}}</span>订单号：<span class="orderNumber">{{$v -> no}}</span>
            </div>
        </td>
      </tr>
      <tr class="list-box b-l b-r b-b">
          <td class="list b-r">
                      <div class="item clearfix">
                        <a class="productDetail nameWidth" href="http://detail.meizu.com/item/meilan5.html" target="_blank">
                        <img src="{{ url('/uploads/goods/')}}/{{ $v -> photo}}" class="f-fl"></a>
                        <div class="describe f-fl">
                            <div class="vertic clearfix">
                                <span class="clearfix">
                                    <a class="productDetail nameWidth" href="http://detail.meizu.com/item/meilan5.html" target="_blank">
                                    {{ $v -> goodname}}<br>{{ $v -> net}} {{ $v -> color}} {{ $v -> rom}}</a>
                                    <p>
                                      {{ $v -> price}}
×{{ $v -> num}}
                                    </p>
                                </span>
                            </div>
                        </div>
                        <input type="hidden" class="orderSn" value="21112321452014624021">
                    </div>
          </td>
          <td class="b-r w125 center price">
              <div class="priceDiv">
                  ￥ {{ ($v -> price) * ($v -> num)}}

              </div>
          </td>
          <td class="b-r w125 center state">
              <div class="stateDiv">
                  <div>@if($v -> pay == 1)
                                    <p>已付款</p>
                                    @elseif($v -> pay == 0)
                                    <p>未付款</p>
                                    @endif
                                    @if($v -> deliver == 1)
                                    <p>已发货</p>
                                    @elseif($v -> deliver == 0)
                                    <p>未发货</p>
                                    @endif
                                    @if($v -> state == 1)
                                    <p>已收货</p>
                                    @elseif($v -> state == 0)
                                    <p>未收货</p>
                                    @endif</div>

              </div>
          </td>
          <td class="w125 center opreat">
              <ul>
                  <li class="more">
                  @if($v -> pay == 0 && $v -> deliver == 0 && $v -> state == 0)<p><a href="{{url('/home/ordercenter/paynow/')}}/{{ $v -> id}}">立即付款</a></p>@endif
                  @if($v -> pay == 1 && $v -> deliver == 0 && $v -> state == 0)<p>提醒发货</a></p>@endif
                  @if($v -> pay == 1 && $v -> deliver == 1 && $v -> state == 1)<p><a href="{{url('/home/ordercenter/delete/')}}/{{ $v -> id}}">删除</a></p>@endif
                  @if($v -> pay == 1 && $v -> deliver == 1 && $v -> state == 0)<p><a href="{{url('/home/ordercenter/update/')}}/{{ $v -> id}}">确认收货</a></p>@endif</li>
              </ul>
          </td>
      </tr>
      <tr class="empty">
          <td></td>
      </tr>
</tbody></table>
@endforeach

                    <div class="list-head">
                        <ul class="clearfix">
                            <li class="layout-footer-service-item">{!! $data -> render()!!}
                        </ul>
                    </div>
</div></div>
                    <input type="hidden" id="pageId" value="0">
                </div>
            </div>
        </div>
    </div>
    <!-- common js -->

    <!-- end content -->

</li></ul></div></div></div></div></div></div></div>

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


</body>
</html>
