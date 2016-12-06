<!DOCTYPE html>
<!-- saved from url=(0032)http://me.meizu.com/member/index -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{config('app.name')}} - 个人中心</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="/jquery-1.8.3.min.js"></script>
    <link href="http://store.res.meizu.com/resources/php/store/java/layout/img/favicon-2e71785f44.ico" rel="shortcut icon" type="image/x-icon">
    <link href="http://store.res.meizu.com/resources/php/store/java/layout/img/favicon-2e71785f44.ico" rel="icon" type="image/x-icon">
    <meta name="description" content="会员中心，我的商城">
    <meta name="Keywords" content="魅族官方在线商店、魅族在线商城、魅族官网在线商店、魅族商城">
    <link rel="stylesheet" href="/hm/personal/meizu_files/layout-ea436a570a.css">


    <!--[if lt IE 9]>
    <script src="//store.res.meizu.com/resources/php/store/java/layout/js/html5shiv-3ed50bb69a.js" type="text/javascript"></script>
    <script src="//store.res.meizu.com/resources/php/store/java/layout/js/es5-shim-50bbaee56e.js" type="text/javascript"></script>
    <![endif]-->
    <link rel="stylesheet" href="/hm/personal/meizu_files/site-base.css">
    <link rel="stylesheet" href="/hm/personal/meizu_files/aio.css">
</head>
<body>
<div class="layout-topbar clearfix login" id="topbar">
    <div class="mzcontainer">
        <ul class="layout-topbar-left clearfix">
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第1个" data-mtype="store_index_yt_1" target="_blank" href="http://www.meizu.com/">魅族官网</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第2个" data-mtype="store_index_yt_2" href="meizushop.home.index.index">魅族商城</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第3个" data-mtype="store_index_yt_3" target="_blank" href="http://www.flyme.cn/">Flyme</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第4个" data-mtype="store_index_yt_4" target="_blank" href="http://retail.meizu.com/index.html">专卖店</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第5个" data-mtype="store_index_yt_5" target="_blank" href="http://service.meizu.com/index.html">服务</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第6个" data-mtype="store_index_yt_6" target="_blank" href="http://bbs.meizu.cn/">社区</a></li>
        </ul>
        <ul class="layout-topbar-right clearfix">

            <li class="layout-topbar-right-links signin"><a id="topbarMsg" class="layout-topbar-link has-msg" data-mdesc="页头-消息" data-mtype="store_index_yt_msg " target="_blank" href="http://me.meizu.com/member/message/index">消息</a></li>
            <li class="layout-topbar-right-links"><a class="layout-topbar-link" data-mdesc="页头-收藏   " data-mtype="store_index_yt_collect" target="_blank" href="http://me.meizu.com/member/favorite/index">我的收藏<i class="layout-icon layout-icon-new"></i></a></li>
            <li class="layout-topbar-right-links"><a id="topbarOrderMsg" class="layout-topbar-link has-msg" data-mdesc="页头-我的订单" data-mtype="store_index_yt_order" target="_blank" href="http://ordercenter.meizu.com/list/index.html">我的订单</a></li>
            <li class="layout-topbar-right-links signout"><a class="layout-topbar-link" href="javascript:window.location.href=&#39;https://login.flyme.cn/vCodeLogin?sid=unionlogin&amp;service=store&amp;autodirct=true&amp;useruri=http://store.meizu.com/member/login.htm?useruri=&#39;+window.location.href;">登录</a></li>
            <li class="layout-topbar-right-links signout"><a class="layout-topbar-link" target="_blank" href="https://member.meizu.com/register">注册</a></li>
            <li class="layout-topbar-right-links member signin">
                <a class="layout-topbar-link" target="_blank" href="http://me.meizu.com/member/index"><span class="layout-topbar-username" id="topbarUser">{{session('master') -> nickname}}</span>的商城<i class="layout-topbar-triangle"></i></a>
                <ul class="layout-topbar-downmenu">
                    <li class="layout-topbar-downmenu-item"><a class="layout-topbar-downmenu-link" data-mdesc="我的商城下拉框1" data-mtype="store_index_yt_my_1" target="_blank" href="http://me.meizu.com/member/address/index">地址管理</a></li>
                    <li class="layout-topbar-downmenu-item"><a class="layout-topbar-downmenu-link" data-mdesc="我的商城下拉框2" data-mtype="store_index_yt_my_2" target="_blank" href="http://me.meizu.com/member/repo_ticket/index">我的回购券</a></li>
                    <li class="layout-topbar-downmenu-item"><a class="layout-topbar-downmenu-link" data-mdesc="我的商城下拉框3" data-mtype="store_index_yt_my_3" target="_blank" href="http://me.meizu.com/member/advice/index">问题反馈</a></li>
                    <li class="layout-topbar-downmenu-item"><a class="layout-topbar-downmenu-link exit" data-mdesc="我的商城下拉框4" data-mtype="store_index_yt_my_4" href="{{url('home/user/logout')}}">退出</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="store-wrap">
    <div class="crumbs">
        <a href="http://store.meizu.com/">首页&gt;</a><a href="http://me.meizu.com/member/index" class="active">我的商城</a>
    </div>
    <div class="main clearfix">
    <div class="left-nav f-fl">
        <div class="nav-main">
            <a href="javascript:;" class="type-title"><i class="iconfont icon-orderCenter"></i>订单中心</a>
            <a href="http://ordercenter.meizu.com/list/index.html" class="ml ">我的订单</a>
            <a href="http://me.meizu.com/member/repo/index" class="ml ">我的回购单</a>
            <a href="http://insurance.meizu.com/list/insurance.html" class="ml ">我的意外保</a>
            <a href="javascript:;" class="type-title"><i class="iconfont icon-selfCenter"></i>个人中心</a>
            <a href="http://me.meizu.com/member/address/index" class="ml ">地址管理</a>
            <a href="http://me.meizu.com/member/favorite/index" class="ml ">我的收藏</a>
            <a href="http://me.meizu.com/member/message/index" class="ml ">消息提醒</a>
            <a href="http://me.meizu.com/member/advice/index" class="ml ">建议反馈</a>
            <a href="javascript:;" class="type-title"><i class="iconfont icon-moneyCenter"></i>资产中心</a>
            <a href="http://me.meizu.com/member/coupon/index" class="ml ">我的优惠券</a>
            <a href="http://me.meizu.com/member/redenvelop/index" class="ml ">我的红包</a>
            <a href="http://me.meizu.com/member/repo_ticket/index" class="ml ">我的回购券</a>
            <a href="javascript:;" class="type-title"><i class="iconfont icon-serverCenter"></i>服务中心</a>
            <a href="http://store.meizu.com/member/returned/index" class="ml" style="width: 105px">退款/退换货跟踪</a>
            <a href="http://me.meizu.com/member/service/insurance" class="ml ">意外保</a>
            <a href="http://me.meizu.com/member/service/recovery" class="ml ">以旧换新</a>
        </div>
    </div>
        <div class="right-content f-fr">
            <div class="index-main">
                <div class="top clearfix">
                    <div class="information clearfix f-fl">
                        <div class="pic f-fl">
                                <img src="{{('/uploads/avater/')}}/{{ session('master') -> photo }}" alt="">
                        </div>
                        <div class="name f-fl">
                            <span>{{ session('master') -> nickname }}</span>
                            <span>欢迎您回来！</span>
                        </div>
                        <div class="info f-fl">
                            <ul>
                                <li>Flyme账号：<span> &nbsp;{{ session('master') -> name }}</span></li>
                                <li>绑定手机号：<span>
                                    @if(session('master') -> phone )
                                    已绑定
                                    @else
                                    未绑定
                                    @endif
                                </span></li>
                                <li class="emailText">绑定邮箱：<span> &nbsp;{{ session('master') -> email }}</span></li>
                            </ul>
                            <a class="edit" href="{{ url('/home/user/personal/edit') }}" target="_blank">修改个人信息 &gt;</a>
                        </div>
                    </div>
                    <div class="backCouponNum f-fl">
                        <p>回购券：<span>0</span></p>
                    </div>
                </div>




                <div class="bottom clearfix">
                    <div class="orderState f-fl">
                        <div class="title clearfix">
                            <span class="f-fl">订单状态</span>
                            <a class="detail f-fr" href="http://ordercenter.meizu.com/list/index.html">查看全部订单 &gt;</a>
                        </div>
                        <div class="content">
                            <div class="waitPay clearfix">
                                <span class="f-fl cercl">
                                <i class="iconfont icon-waitingPay"></i>
                                </span>
                                <div class="text f-fl">
                                    <p>待付款订单：<span class="num">1</span></p>
                                    <a class="detail" href="http://ordercenter.meizu.com/list/index.html?type=0">查看全部待付款订单 &gt;</a>
                                </div>
                            </div>
                            <div class="waitDeliver clearfix">
                                <span class="f-fl cercl">
                                <i class="iconfont icon-waitingDeliver"></i>
                                </span>
                                <div class="text f-fl">
                                    <p>待发货订单：<span class="num">1</span></p>
                                    <a class="detail" href="http://ordercenter.meizu.com/list/index.html?type=1">查看全部待发货订单 &gt; </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="message f-fl">
                        <div class="title clearfix">
                            <span class="f-fl">活动消息</span>
                            <a class="f-fr detail" href="http://me.meizu.com/member/message/index">查看全部消息 &gt;</a>
                        </div>
                        <div id="tableList" class="list"><ul>
  <li class="clearfix">
      <p class="f-fl time">
          <input type="hidden" class="_timeFull" value="1480500000000">
          <span class="fullTime">2016-11-30</span>
          <span class="firstMounth">11-30</span>
          <span class="smallTime">18:00</span>
      </p>
      <p class="f-fl content">
          <a href="http://hd.meizu.com/activity/happyweek8.html?rc=xx" target="_blank"><i class="contentNum">【魅族商城】魅力狂欢周，部分机型立省200，领券放肆购！购机享分期送礼...</i><span class="detail"> 点击查看详细 &gt;</span></a>
      </p>
  </li>
  <li class="clearfix">
      <p class="f-fl time">
          <input type="hidden" class="_timeFull" value="1480491758000">
          <span class="fullTime hide">2016-11-30</span>
          <span class="firstMounth">11-30</span>
          <span class="smallTime">15:42</span>
      </p>
      <p class="f-fl content">
          <a href="http://hd.meizu.com/huodong/audio-technica.html" target="_blank"><i class="contentNum">【魅族商城】11.29 铁三角耳机 领券还能折上折 活动时间：11月2...</i><span class="detail"> 点击查看详细 &gt;</span></a>
      </p>
  </li>
  <li class="clearfix">
      <p class="f-fl time">
          <input type="hidden" class="_timeFull" value="1479888175000">
          <span class="fullTime hide">2016-11-23</span>
          <span class="firstMounth">11-23</span>
          <span class="smallTime">16:02</span>
      </p>
      <p class="f-fl content">
          <a href="http://hd.meizu.com/sale/thanksgiving2016.html?rc=xx" target="_blank"><i class="contentNum">【魅族感恩有你】超值赠品放肆送，百元优惠轻松得！活动时间：11月23日...</i><span class="detail"> 点击查看详细 &gt;</span></a>
      </p>
  </li>
</ul>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                            <img class="layout-footer-nav-wechat-img" src="/hm/personal/meizu_files/weixin.png" alt="微信二维码">
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
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://si.trustutn.org/info?sn=749160913024249024251&amp;certType=1" rel="nofollow" target="_blank">
                <i class="layout-icon layout-icon-official"></i>
            </a>
        </div>
    </div>
</div>




</body></html>