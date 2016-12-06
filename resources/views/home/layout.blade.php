<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>魅族官网在线商店-提供魅族 PRO 5、魅族MX系列、魅蓝note系列、魅蓝metal系列产品的预约和购买</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//store.res.meizu.com/resources/php/store/java/layout/img/favicon-2e71785f44.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="//store.res.meizu.com/resources/php/store/java/layout/img/favicon-2e71785f44.ico" rel="icon" type="image/x-icon" />
    <meta name="description" content="魅族商城是魅族面向全国服务的官方电商平台，提供魅族 PRO 系列、MX系列、魅蓝note系列和魅蓝metal系列的手机，配件和智能硬件的预约和购买。官方正品，全国联保，全场包邮，7天无理由退货，15天换货保障。">
    <meta name="Keywords" content="魅族官方在线商店、魅族在线商城、魅族官网在线商店、魅族商城">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{url('/hm/css/layout.css')}}" />


    <!--[if lt IE 9]>
    <script src="js/html5shiv-3ed50bb69a.js" type="text/javascript"></script>
    <script src="js/es5-shim-50bbaee56e.js" type="text/javascript"></script>
    <![endif]-->
<link rel="stylesheet" href="{{url('/hm/css/main-3951eee.css')}}"/>
</head>
<body>
<!-- common header -->
<div class="layout-topbar clearfix" id="topbar">
    <div class="mzcontainer">
        <ul class="layout-topbar-left clearfix">
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第1个" data-mtype="store_index_yt_1" target="_blank" href="http://www.meizu.com">魅族官网</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第2个" data-mtype="store_index_yt_2" href="http://store.meizu.com/index.html">魅族商城</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第3个" data-mtype="store_index_yt_3" target="_blank" href="http://www.flyme.cn">Flyme</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第4个" data-mtype="store_index_yt_4" target="_blank" href="http://retail.meizu.com/index.html">专卖店</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第5个" data-mtype="store_index_yt_5" target="_blank" href="http://service.meizu.com/index.html">服务</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第6个" data-mtype="store_index_yt_6" target="_blank" href="http://bbs.meizu.cn">社区</a></li>
        </ul>
        <ul class="layout-topbar-right clearfix">
            <li class="layout-topbar-right-links pop">
                <div class="layout-topbar-pop" id="topbarPop">
                    <a class="layout-topbar-pop-title" data-mdesc="页头消息气泡" data-mtype="store_index_yt_qp" href=""></a>
                    <div class="layout-tpobar-pop-close"></div>
                </div>
            </li>
            <li class="layout-topbar-right-links signin"><a id="topbarMsg" class="layout-topbar-link" data-mdesc="页头-消息" data-mtype="store_index_yt_msg " target="_blank" href="http://me.meizu.com/member/message/index">消息</a></li>
            <li class="layout-topbar-right-links"><a class="layout-topbar-link" data-mdesc="页头-收藏   " data-mtype="store_index_yt_collect" target="_blank" href="http://me.meizu.com/member/favorite/index">我的收藏<i class="layout-icon layout-icon-new"></i></a></li>
            <li class="layout-topbar-right-links"><a id="topbarOrderMsg" class="layout-topbar-link" data-mdesc="页头-我的订单" data-mtype="store_index_yt_order" target="_blank" href="http://ordercenter.meizu.com/list/index.html">我的订单</a></li>
            <li class="layout-topbar-right-links signout"><a class="layout-topbar-link" href="{{ url('home/user/login') }}">登录</a></li>
            <li class="layout-topbar-right-links signout"><a class="layout-topbar-link" target="_blank" href="{{url('/home/user/register')}}">注册</a></li>
            <li class="layout-topbar-right-links member signin">
                <a class="layout-topbar-link" target="_blank" href="http://me.meizu.com/member/index"><span class="layout-topbar-username" id="topbarUser"></span>的商城<i class="layout-topbar-triangle"></i></a>
                <ul class="layout-topbar-downmenu">
                    <li class="layout-topbar-downmenu-item"><a class="layout-topbar-downmenu-link" data-mdesc="我的商城下拉框1" data-mtype="store_index_yt_my_1" target="_blank" href="http://me.meizu.com/member/address/index">地址管理</a></li>
                    <li class="layout-topbar-downmenu-item"><a class="layout-topbar-downmenu-link" data-mdesc="我的商城下拉框2" data-mtype="store_index_yt_my_2" target="_blank" href="http://me.meizu.com/member/repo_ticket/index">我的回购券</a></li>
                    <li class="layout-topbar-downmenu-item"><a class="layout-topbar-downmenu-link" data-mdesc="我的商城下拉框3" data-mtype="store_index_yt_my_3" target="_blank" href="http://me.meizu.com/member/advice/index">问题反馈</a></li>
                    <li class="layout-topbar-downmenu-item"><a class="layout-topbar-downmenu-link exit" data-mdesc="我的商城下拉框4" data-mtype="store_index_yt_my_4" href="javascript:window.location.href='http://store.meizu.com/member/logout.htm?useruri='+window.location.href;">退出</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="layout-header clearfix">
    <div class="mzcontainer">
        <div class="layout-header-logo">
            <a target="_blank" href="http://www.meizu.com" class="layout-header-logo-link" alt="魅族科技"><i
                    class="layout-font layout-font-logo"></i></a>
        </div>
        <ul class="layout-header-nav clearfix" id="layoutHeaderNav">
                <li class="layout-header-nav-item">
                    <a href="javascript:;" class="layout-header-nav-link">PRO手机</a>
                    <div class="layout-header-nav-child">
                        <div class="mzcontainer">
                            <ul class="layout-header-nav-child-list">
                                        <li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link"
                                               data-mtype="store_index_dh_1_1"
                                               data-mdesc="导航中第1个下第1个坑" target="_blank"
                                               href="http://detail.meizu.com/item/pro6s.html?click=store_index_dh_1_1">
                                                <p><img src="{{url('/hm/picture/cix_s1gbchaaevu5aa0vjoomivw373_126x126.png')}}"
                                                        class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name">魅族PRO 6s</p>
                                                <p class="layout-header-nav-child-bottom">
                                                    <span class="layout-header-nav-child-price">2699</span>

                                                </p>
                                            </a>
                                        </li>
                                        <li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link"
                                               data-mtype="store_index_dh_1_2"
                                               data-mdesc="导航中第1个下第2个坑" target="_blank"
                                               href="http://detail.meizu.com/item/meizu_pro6.html?click=store_index_dh_1_2">
                                                <p><img src="{{url('/hm/picture/cnqojvee2e-aagzcabhuf4hwkyw117_126x126.png') }}"
                                                        class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name">魅族PRO 6</p>
                                                <p class="layout-header-nav-child-bottom">
                                                    <span class="layout-header-nav-child-price">2299</span>

                                                </p>
                                            </a>
                                        </li>
                                        <li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link"
                                               data-mtype="store_index_dh_1_3"
                                               data-mdesc="导航中第1个下第3个坑" target="_blank"
                                               href="http://detail.meizu.com/item/meizu_pro5.html?click=store_index_dh_1_3">
                                                <p><img src="{{url('/hm/picture/1450928403@126x126.png') }}"
                                                        class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name">魅族PRO 5</p>
                                                <p class="layout-header-nav-child-bottom">
                                                    <span class="layout-header-nav-child-price">2199</span>

                                                </p>
                                            </a>
                                        </li>
                                <!-- more -->
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="layout-header-nav-item">
                    <a href="javascript:;" class="layout-header-nav-link">魅蓝手机</a>
                    <div class="layout-header-nav-child">
                        <div class="mzcontainer">
                            <ul class="layout-header-nav-child-list">
                                        <li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link"
                                               data-mtype="store_index_dh_2_1"
                                               data-mdesc="导航中第2个下第1个坑" target="_blank"
                                               href="http://detail.meizu.com/item/meilan_5.html?click=store_index_dh_2_1">
                                                <p><img src="{{url('/hm/picture/cnqojvgxd2saduwtaahqpljs718976_126x126.png') }}"
                                                        class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name">魅蓝 5</p>
                                                <p class="layout-header-nav-child-bottom">
                                                    <span class="layout-header-nav-child-price">699</span>

                                                </p>
                                            </a>
                                        </li>
                                        <li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link"
                                               data-mtype="store_index_dh_2_2"
                                               data-mdesc="导航中第2个下第2个坑" target="_blank"
                                               href="http://detail.meizu.com/item/meilan_u10.html?click=store_index_dh_2_2">
                                                <p><img src="{{url('/hm/picture/cix_s1fodiqaqprmaajwkwqc8nw622_126x126.png') }}"
                                                        class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name">魅蓝 U10</p>
                                                <p class="layout-header-nav-child-bottom">
                                                    <span class="layout-header-nav-child-price">999</span>

                                                </p>
                                            </a>
                                        </li>
                                        <li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link"
                                               data-mtype="store_index_dh_2_3"
                                               data-mdesc="导航中第2个下第3个坑" target="_blank"
                                               href="http://detail.meizu.com/item/meilanU20.html?click=store_index_dh_2_3">
                                                <p><img src="{{url('/hm/picture/cix_s1fdkdyab0ygaeede0cxiv8257_126x126.png') }}"
                                                        class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name">魅蓝 U20</p>
                                                <p class="layout-header-nav-child-bottom">
                                                    <span class="layout-header-nav-child-price">1099</span>

                                                </p>
                                            </a>
                                        </li>
                                        <li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link"
                                               data-mtype="store_index_dh_2_4"
                                               data-mdesc="导航中第2个下第4个坑" target="_blank"
                                               href="http://detail.meizu.com/item/meilan_e1.html?click=store_index_dh_2_4">
                                                <p><img src="{{url('/hm/picture/cnqojveq0ugasgufaazq2opb7qi013_126x126.png') }}"
                                                        class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name">魅蓝 E</p>
                                                <p class="layout-header-nav-child-bottom">
                                                    <span class="layout-header-nav-child-price">1299</span>

                                                </p>
                                            </a>
                                        </li>
                                        <li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link"
                                               data-mtype="store_index_dh_2_5"
                                               data-mdesc="导航中第2个下第5个坑" target="_blank"
                                               href="http://detail.meizu.com/item/meilan3s.html?click=store_index_dh_2_5">
                                                <p><img src="{{url('/hm/picture/cix_s1epgr6ad8kbaa2l_exlrok404_126x126.png') }}"
                                                        class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name">魅蓝 3s</p>
                                                <p class="layout-header-nav-child-bottom">
                                                    <span class="layout-header-nav-child-price">699</span>

                                                </p>
                                            </a>
                                        </li>
                                        <li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link"
                                               data-mtype="store_index_dh_2_6"
                                               data-mdesc="导航中第2个下第6个坑" target="_blank"
                                               href="http://detail.meizu.com/item/meilan_note3.html?click=store_index_dh_2_6">
                                                <p><img src="{{url('/hm/picture/1459927797@126x126.png') }}"
                                                        class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name">魅蓝 Note3</p>
                                                <p class="layout-header-nav-child-bottom">
                                                    <span class="layout-header-nav-child-price">799</span>

                                                </p>
                                            </a>
                                        </li>
                                <!-- more -->
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="layout-header-nav-item">
                    <a href="javascript:;" class="layout-header-nav-link">MX手机</a>
                    <div class="layout-header-nav-child">
                        <div class="mzcontainer">
                            <ul class="layout-header-nav-child-list">
                                        <li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link"
                                               data-mtype="store_index_dh_3_1"
                                               data-mdesc="导航中第3个下第1个坑" target="_blank"
                                               href="http://detail.meizu.com/item/mx6.html?click=store_index_dh_3_1">
                                                <p><img src="{{url('/hm/picture/cix_s1en3iiasxvxaa9ipq8-shg169_126x126.png') }}"
                                                        class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name">魅族MX6</p>
                                                <p class="layout-header-nav-child-bottom">
                                                    <span class="layout-header-nav-child-price">1799</span>

                                                </p>
                                            </a>
                                        </li>
                                        <li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link"
                                               data-mtype="store_index_dh_3_2"
                                               data-mdesc="导航中第3个下第2个坑" target="_blank"
                                               href="http://detail.meizu.com/item/meizu_mx5.html?click=store_index_dh_3_2">
                                                <p><img src="{{url('/hm/picture/cnqojvfd9pwas6vzaautvljefx8425_126x126.png') }}"
                                                        class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name">魅族MX5</p>
                                                <p class="layout-header-nav-child-bottom">
                                                        <span class="layout-header-nav-child-price origin">1999</span>
                                                    <span class="layout-header-nav-child-price">999</span>

                                                </p>
                                            </a>
                                        </li>
                                        <li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link"
                                               data-mtype="store_index_dh_3_3"
                                               data-mdesc="导航中第3个下第3个坑" target="_blank"
                                               href="http://detail.meizu.com/item/meizu_mx5e.html?click=store_index_dh_3_3">
                                                <p><img src="{{url('/hm/picture/cix_s1fniqaapdejaautvljefx8334_126x126.png') }}"
                                                        class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name">魅族MX5e 经典版</p>
                                                <p class="layout-header-nav-child-bottom">
                                                        <span class="layout-header-nav-child-price origin">1499</span>
                                                    <span class="layout-header-nav-child-price">999</span>

                                                </p>
                                            </a>
                                        </li>
                                <!-- more -->
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="layout-header-nav-item">
                    <a href="javascript:;" class="layout-header-nav-link">精选配件</a>
                    <div class="layout-header-nav-child">
                        <div class="mzcontainer">
                            <ul class="layout-header-nav-child-list">
                                        <li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link"
                                               data-mtype="store_index_dh_4_1"
                                               data-mdesc="导航中第4个下第1个坑" target="_blank"
                                               href="http://detail.meizu.com/item/meizu_ep51.html?skuid=696&click=store_index_dh_4_1">
                                                <p><img src="{{url('/hm/picture/cnqojvgkhhwauh85aahowfpsrus585_126x126.png') }}"
                                                        class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name">魅族 EP51蓝牙运动耳机</p>
                                                <p class="layout-header-nav-child-bottom">
                                                    <span class="layout-header-nav-child-price">269</span>

                                                </p>
                                            </a>
                                        </li>
                                        <li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link"
                                               data-mtype="store_index_dh_4_2"
                                               data-mdesc="导航中第4个下第2个坑" target="_blank"
                                               href="http://detail.meizu.com/item/meizu_hd50.html?skuid=839&click=store_index_dh_4_2">
                                                <p><img src="{{url('/hm/picture/cnqojvgtci-ayfqraar2vqneyva922_126x126.png') }}"
                                                        class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name">魅族HD50 头戴式耳机</p>
                                                <p class="layout-header-nav-child-bottom">
                                                    <span class="layout-header-nav-child-price">399</span>

                                                </p>
                                            </a>
                                        </li>
                                        <li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link"
                                               data-mtype="store_index_dh_4_3"
                                               data-mdesc="导航中第4个下第3个坑" target="_blank"
                                               href="http://detail.meizu.com/item/meizu_bag.html?click=store_index_dh_4_3">
                                                <p><img src="{{url('/hm/picture/cnqojvfqpd-aejicaavbtlzlu4u578_126x126.png') }}"
                                                        class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name">魅族 休闲旅行双肩包</p>
                                                <p class="layout-header-nav-child-bottom">
                                                    <span class="layout-header-nav-child-price">199</span>

                                                </p>
                                            </a>
                                        </li>
                                        <li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link"
                                               data-mtype="store_index_dh_4_4"
                                               data-mdesc="导航中第4个下第4个坑" target="_blank"
                                               href="http://detail.meizu.com/item/mpower_m8e.html?skuid=1061&click=store_index_dh_4_4">
                                                <p><img src="{{url('/hm/picture/cix_s1efsdmaypt5aakdypuhrpq307_126x126.png') }}"
                                                        class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name">魅族移动电源（标准版）</p>
                                                <p class="layout-header-nav-child-bottom">
                                                    <span class="layout-header-nav-child-price">99</span>

                                                </p>
                                            </a>
                                        </li>
                                        <li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link"
                                               data-mtype="store_index_dh_4_5"
                                               data-mdesc="导航中第4个下第5个坑" target="_blank"
                                               href="http://detail.meizu.com/item/lifeme_bts30.html?click=store_index_dh_4_5">
                                                <p><img src="{{url('/hm/picture/cnqojvfik1qabwwmaauloxmuyli896_126x126.png') }}"
                                                        class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name">魅族 Lifeme BTS30 蓝牙音箱</p>
                                                <p class="layout-header-nav-child-bottom">
                                                    <span class="layout-header-nav-child-price">399</span>

                                                </p>
                                            </a>
                                        </li>
                                <!-- more -->
                                    <li class="layout-header-nav-child-more">
                                        <ul>
                                                <li class="layout-header-nav-child-row">
                                                    <a class="layout-header-nav-child-more-link" target="_blank"
                                                       href="http://lists.meizu.com/page/list?categoryid=79&rc=sdsd">
                                                        <img class="layout-header-nav-child-icon" src="{{ url('/hm/picture/1467696166-40112.png') }}"
                                                             width="28" height="28">耳机 / 音箱
                                                    </a>
                                                </li>
                                                <li class="layout-header-nav-child-row">
                                                    <a class="layout-header-nav-child-more-link" target="_blank"
                                                       href="http://lists.meizu.com/page/list?categoryid=80&rc=sd">
                                                        <img class="layout-header-nav-child-icon" src="{{ url('/hm/picture/1467696197-95413.png') }}"
                                                             width="28" height="28">路由器 / 移动电源
                                                    </a>
                                                </li>
                                                <li class="layout-header-nav-child-row">
                                                    <a class="layout-header-nav-child-more-link" target="_blank"
                                                       href="http://lists.meizu.com/page/list?categoryid=81&rc=sd">
                                                        <img class="layout-header-nav-child-icon" src="{{ url('/hm/picture/1467696220-57637.png') }}"
                                                             width="28" height="28">保护套 / 后盖 / 贴膜
                                                    </a>
                                                </li>
                                                <li class="layout-header-nav-child-row">
                                                    <a class="layout-header-nav-child-more-link" target="_blank"
                                                       href="http://lists.meizu.com/page/list?categoryid=82&rc=sd">
                                                        <img class="layout-header-nav-child-icon" src="{{ url('/hm/picture/1467696242-24236.png') }}"
                                                             width="28" height="28">数据线 / 电源适配器
                                                    </a>
                                                </li>
                                                <li class="layout-header-nav-child-row">
                                                    <a class="layout-header-nav-child-more-link" target="_blank"
                                                       href="http://lists.meizu.com/page/list?categoryid=83&rc=sd">
                                                        <img class="layout-header-nav-child-icon" src="{{ url('/hm/picture/1467705893-97644.png') }}"
                                                             width="28" height="28">周边配件
                                                    </a>
                                                </li>
                                        </ul>
                                    </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="layout-header-nav-item">
                    <a href="javascript:;" class="layout-header-nav-link">智能硬件</a>
                    <div class="layout-header-nav-child">
                        <div class="mzcontainer">
                            <ul class="layout-header-nav-child-list">
                                        <li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link"
                                               data-mtype="store_index_dh_5_1"
                                               data-mdesc="导航中第5个下第1个坑" target="_blank"
                                               href="http://detail.meizu.com/item/router_f1.html?skuid=1112&click=store_index_dh_5_1">
                                                <p><img src="{{ url('/hm/picture/cix_s1gjergacpa4aabxvrwlvgu324_126x126.jpg') }}"
                                                        class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name">魅族路由器 极速版</p>
                                                <p class="layout-header-nav-child-bottom">
                                                    <span class="layout-header-nav-child-price">199</span>

                                                </p>
                                            </a>
                                        </li>
                                        <li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link"
                                               data-mtype="store_index_dh_5_2"
                                               data-mdesc="导航中第5个下第2个坑" target="_blank"
                                               href="http://detail.meizu.com/item/HANGJIA_pro3s_wifi.html?skuid=1995&click=store_index_dh_5_2">
                                                <p><img src="{{ url('/hm/picture/cix_s1gr0uyar5gdaahkf8_dz-u475_126x126.png') }}"
                                                        class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name">航嘉智慧云防雷pro3s-wifi</p>
                                                <p class="layout-header-nav-child-bottom">
                                                    <span class="layout-header-nav-child-price">112</span>

                                                </p>
                                            </a>
                                        </li>
                                        <li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link"
                                               data-mtype="store_index_dh_5_3"
                                               data-mdesc="导航中第5个下第3个坑" target="_blank"
                                               href="http://detail.meizu.com/item/ROMOSS_A10.html?skuid=1766&click=store_index_dh_5_3">
                                                <p><img src="{{ url('/hm/picture/cnqojvgj1ckae4qsaafw6g3x6ei583_126x126.png') }}"
                                                        class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name">罗马仕AC10快充适配器</p>
                                                <p class="layout-header-nav-child-bottom">
                                                        <span class="layout-header-nav-child-price origin">39</span>
                                                    <span class="layout-header-nav-child-price">35.9</span>

                                                </p>
                                            </a>
                                        </li>
                                        <li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link"
                                               data-mtype="store_index_dh_5_4"
                                               data-mdesc="导航中第5个下第4个坑" target="_blank"
                                               href="http://detail.meizu.com/item/meihang_MC6.html?skuid=1119&click=store_index_dh_5_4">
                                                <p><img src="{{ url('/hm/picture/cnqojvgr0ywatx8jaappc6xx8sa241_126x126.png') }}"
                                                        class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name">魅航智能行车记录仪MC6</p>
                                                <p class="layout-header-nav-child-bottom">
                                                    <span class="layout-header-nav-child-price">399</span>

                                                </p>
                                            </a>
                                        </li>
                                        <li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link"
                                               data-mtype="store_index_dh_5_5"
                                               data-mdesc="导航中第5个下第5个坑" target="_blank"
                                               href="http://detail.meizu.com/item/JJQ_1.html?skuid=1687&click=store_index_dh_5_5">
                                                <p><img src="{{ url('/hm/picture/cnqojvgj1isau8fxaav3hql3ely964_126x126.png') }}"
                                                        class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name">南山大夫颈舒按摩仪</p>
                                                <p class="layout-header-nav-child-bottom">
                                                        <span class="layout-header-nav-child-price origin">399</span>
                                                    <span class="layout-header-nav-child-price">369</span>

                                                </p>
                                            </a>
                                        </li>
                                        <li class="layout-header-nav-child-item">
                                            <a class="layout-header-nav-child-link"
                                               data-mtype="store_index_dh_5_6"
                                               data-mdesc="导航中第5个下第6个坑" target="_blank"
                                               href="http://detail.meizu.com/item/Moikit_Cuptime2.html?skuid=1196&click=store_index_dh_5_6">
                                                <p><img src="{{ url('/hm/picture/cnqojvgsc0iabm12aaaezklac6w876_126x126.png') }}"
                                                        class="layout-header-nav-child-img"></p>
                                                <p class="layout-header-nav-child-name">麦开智能水杯Cuptime2</p>
                                                <p class="layout-header-nav-child-bottom">
                                                    <span class="layout-header-nav-child-price">339</span>

                                                </p>
                                            </a>
                                        </li>
                                <!-- more -->
                            </ul>
                        </div>
                    </div>
                </li>
        </ul>
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
        <div class="layout-footer-copyright">
            &copy;2016 Meizu Telecom Equipment Co., Ltd. All rights reserved.
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

