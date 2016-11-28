




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Welcome to log in and register Meizu Flyme account. You can experience diversified cloud services with your mobile phone, including online downloading apps, synchronizing mobile phone data, and finding your phone. The Flyme account makes your phone management more intelligent." />
    <meta name="keywords" content="Meizu, meizu, Log in to Flyme, Cloud service, Find your phone, Top up account, MX M9 MX2 MX3" />
    <meta content="width=1080" name="viewport">
    <title>Flyme账号 - 登录</title>
    <script type="text/javascript">
        var cdn = 'https://uc-res.mzres.com';
    </script>
    <link href="https://uc-res.mzres.com/resources/i18n/en_US/uc/wlogin/base/css/base.css?ver=20140707" type="text/css" rel="Stylesheet">
    <link href="https://uc-res.mzres.com/resources/uc/wlogin/base/css/cycode.css" rel="stylesheet">
    <link href="https://uc-res.mzres.com/resources/i18n/en_US/uc/wlogin/member/css/login.css?ver=20140707" type="text/css" rel="Stylesheet">
</head>
<body>
    <div id='content' class="content">



<div class=ucSimpleHeader id="header">
    <a href="http://www.meizu.com/en" class='meizuLogo'><i class='i_icon'></i></a>
</div>
        <div class="banner-box">
            <form id="mainForm" class="main-form" enctype="application/x-www-form-urlencoded">
                <div class="tab-title">
                    <a class="linkABlue" id="toAccountLogin" href="javascript:void(0);">登录</a>
                </div>
<form action="home/user/dlogin" method="post">
                <div class='normalInput cycode-box' id="cycode-box">
                    <div class="cycode-selectbox">
                        <input class="ipt-account" name="name" id="account" maxlength="50" placeholder="手机号/Flyme账号" autocomplete='off' />
                    </div>
                    <div id="cycode-container" class="cycode-container"></div>
                </div>
                <div class="normalInput pswd-box">
                    <input type="password" value="" name="password" id="password" maxlength='16' placeholder='密码' autocomplete='off'>
                </div>
                <p id="j_abnormalTips" class="abnormal-tips"></p>
                <input type="hidden" name="appuri" value="http://www.meizu.com/accounts/login" id="appuri" />
                <input type="hidden" name="useruri" value="http://www.meizu.com/" id="useruri" />
                <input type="hidden" name="service" value="www" id="service" />
                <input type="hidden" name="sid" value="" id="sid" />

                <div class='normalInput fieldInput' style='display:none;'>
                    <input id="tips-show">
                </div>
                <!-- 极速验证 -->
                <div class='box-geetest'>
                    <div id="div_id_embed"></div>
                    <div id="div_geetest_lib"></div>
                </div>
                <!-- <span id="j_geetest_error" class="error geetest_error" style="display:none"></span> -->
                <div class='rememberField'>
                 <span><input name="remember" id="remember" type="checkbox" value="1"></span>
                    <label for="remember" tabindex="0">记住登录状态</label>
                </div>
                <div style="width:300px;height:50px;background:#199ef8;text-align: center;">
                    <input type="submit" value="登录" style="font-size:20px;color:white;line-height:45px;background-color:#199ef8;">
                </div>

                <div class='transferField'>
                    <a class="go2forgetpwd linkABlue rememberFieldForA" href="https://i.flyme.cn/forgetpwd">忘记密码？</a>
                    <a class="go2register linkABlue" href="home/user/register" id="toRegister" >注册</a>
                </div>
</form>
                <a href="javascript:void(0)" id="qr-btn" class="qr-btn"></a>
                <div id="qr-panel" class="qr-panel hide">
                    <h3>扫描安全登录</h3>
                    <div class="qr-img-box">

                    </div>
                    <p class="tips">请使用最新Flyme系统相机扫码功能，扫码登录</p>
                    <p class="qr-success-tips hide">扫描成功，请在手机点击“确认登陆”</p>
                </div>
            </form>
        </div>
    </div>
<div class="mz_footerWrap tb" id="meizu-footer">
  <div class="mz_footerInner">
    <div class="mz_footer-layer1">
      <div class="mz_footer-innerLink">
        <a title="About us" target="_blank" href="http://www.meizu.com/in/aboutus.html">关于魅族</a>
        <img src="http://www2.res.meizu.com/en/images/common/space.gif" class="mz_foot-line">
        <a title="Contact us" target="_blank" href="http://www.meizu.com/in/contact.html">联系我们</a>
        <img src="http://www2.res.meizu.com/en/images/common/space.gif" class="mz_foot-line">
        <a title="Legal Statment" target="_blank" href="http://www.meizu.com/in/legalstatement.html">法律声明</a>
        <img src="http://www2.res.meizu.com/en/images/common/space.gif" class="mz_foot-line">
        <div id="globalName" class="mz_footer-language">
          <a href="javascript:void(0);" title="English">简体中文&nbsp;&nbsp;&nbsp;&nbsp;</a>
          <div id="globalContainer" class="mz_footer-language_menu" style="display: none;">
            <a href="javascript:void(0)" id="i18n-link" title="English" class="ClobalItem"><!--<i class="cn"></i>--><span>English</a>
            <script>
                ;(function() {
                    var u = decodeURIComponent(location.href)
                    var r = /lang=([^&\s]+)/
                    var lowB = !('addEventListener' in window)
                    var addEvent = lowB ? window.attachEvent : window.addEventListener

                    if(r.test(u)) u = u.replace(r, 'lang=zh_CN')
                    else u += (~u.indexOf('?') ? '&' : '?') + 'lang=zh_CN'

                    addEvent(lowB ? 'onload' : 'load', function() {document.getElementById('i18n-link').setAttribute('href',u)})
                }());
            </script>
          </div>
        </div>
      </div>
      <div class="mz_footer-service">
        <a href="mailto:mzcs@meizu.com">
          <span class="mz_service-label">客服热线 &nbsp;&nbsp;&nbsp; 400-788-3333</span>
        </a>

      </div>
      <div class="mz_footer-outerLink">
        <a class="mz_footer-facebook" href="https://www.facebook.com/MeizuIndiaOfficial" target="_blank"><i class="mz_i_icon"></i></a>
        <a class="mz_footer-twitter" href="https://twitter.com/Meizu_India" target="_blank"><i class="mz_i_icon"></i></a>
        <a class="mz_footer-googleplus" href="https://plus.google.com/u/0/b/113858313108002162708/113858313108002162708/posts " target="_blank"><i class="mz_i_icon"></i></a>
        <a class="mz_footer-linkin" href="https://www.linkedin.com/company/meizu" target="_blank"><i class="mz_i_icon"></i></a>
      </div>
    </div>
    <div class="clear"></div>
    <div class="mz_copyrightWrap" id="Copyright">
      <div class="mz_copyrightInner">
        <span>©2016 Meizu Telecom Equipment Co., Ltd. All rights reserved.</span>
      </div>
    </div>
  </div>
</div>
<div id="wechatPic"></div>
<script type="text/javascript">
;(function() {
var ga = document.createElement('script'), s;
ga.type = 'text/javascript';
ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'tongji.meizu.com/js/flow.js';
s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(ga, s);
})();
</script>


    <script charset="utf-8" src="https://uc-res.mzres.com/resources/common/js/jquery-1.7.1.min.js?v=20140423"></script>
    <script src="https://uc-res.mzres.com/resources/uc/wlogin/base/js/jquery.form.js" charset="utf-8"></script>
    <script src="https://uc-res.mzres.com/resources/uc/wlogin/base/js/jquery.validate.js" charset="utf-8"></script>
    <script src="https://uc-res.mzres.com/resources/i18n/en_US/uc/wlogin/base/js/lang.js" charset="utf-8"></script>
    <script src="https://uc-res.mzres.com/resources/i18n/en_US/uc/wlogin/base/js/utils.js" charset="utf-8"></script>
    <script src="https://uc-res.mzres.com/resources/i18n/en_US/uc/wlogin/base/js/flyme.elements.js" charset="utf-8"></script>
    <script src="https://uc-res.mzres.com/resources/i18n/en_US/uc/wlogin/base/js/base.js" charset="utf-8"></script>
    <script src="https://uc-res.mzres.com/resources/i18n/en_US/uc/wlogin/member/js/geetest.js" charset="utf-8"></script>
    <script src="https://uc-res.mzres.com/resources/uc/wlogin/base/js/cycode.js" charset="utf-8"></script>
    <script src="https://uc-res.mzres.com/resources/i18n/en_US/uc/wlogin/member/js/login.js" charset="utf-8"></script>
    <!--接入风控sh.min.js-->
    <script type="text/javascript" src="https://uc-res.mzres.com/resources/uc/wlogin/base/js/sh.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="https://uc-res.mzres.com/resources/uc/wlogin/base/js/cryPP.min.js" charset="utf-8"></script>
    </body>
</html>

