



<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="//store.res.meizu.com/resources/php/store/java/layout/img/favicon-2e71785f44.ico" rel="icon" type="image/x-icon" />
    <meta name="description" content="Welcome to log in and register Meizu Flyme account. You can experience diversified cloud services with your mobile phone, including online downloading apps, synchronizing mobile phone data, and finding your phone. The Flyme account makes your phone management more intelligent." />
    <meta name="keywords" content="Meizu, meizu, Log in to Flyme, Cloud service, Find your phone, Top up account, MX M9 MX2 MX3" />
    <meta content="width=1080" name="viewport"/>
    <title>Flyme账号 - 注册</title>
    <link href="/hm/register/css/base.css" type="text/css" rel="Stylesheet"/>
    <link href="/hm/register/css/cycode.css" rel="stylesheet"/>
    <link href="/hm/register/css/register.css" type="text/css" rel="Stylesheet"/>
</head>
<body>
    <div id='content' class="content">



<div class=ucSimpleHeader id="header">
    <a href="meizushop/user/index/index" class='meizuLogo'><i class='i_icon'></i></a>

</div>

        <div class="banner-box">
            <form id="mainForm" class="main-form" enctype="application/x-www-form-urlencoded" novalidate="novalidate">
                <div class="tab-title">
                    <a class="linkABlue" id="toTelRegister" href="javascript:void(0);">注册</a>
                </div>
                <div class='normalInput cycode-box show-cycode' id="cycode-box">
                    <div class="cycode-selectbox">
                        <span class="cycode-selected">
                            <input readonly class="ipt-cycode" id="cycode" value="+86" >
                            <i class="arrow-down"></i>
                        </span>
                        <input id="phone" name="phone" class="ipt-phone" maxlength="11" placeholder="手机号码" autocomplete='off' />
                    </div>
                    <div id="cycode-container" class="cycode-container"></div>
                </div>
                <div class="normalInput">
                    <input type="text" name="kapkey" id="kapkey" maxlength="6" placeholder="验证码" autocomplete='off'/>
                    <span class="form-line"></span>
                    <a id="getKey" href="javascript:void(0);" class="linkABlue">获取验证码</a>
                </div>
                <div class='normalInput'>
                    <input type="text" name="password" id="password" placeholder="密码" maxlength="16" value='' autocomplete="off" />
                    <input type="password" name="password" id="password1" placeholder="确认密码" maxlength="16" style='display:none' value='' autocomplete="off" />
                    <a id="pwdBtn" class="pwdBtnShow noselect" onselectstart="return false">
                        <i class="i_icon"></i>
                    </a>
                    <div class='clear'></div>
                </div>
                <div class='normalInput fieldInput' style='display:none;'>
                    <input id="tips-show"/>
                </div>
                <div id='flymeService' class="rememberField" style="font-size:12px;">
                    <label class="pointer" for="acceptFlyme" tabindex="0">点击注册,即表示您同意并愿意遵守</label>
                    <a href="/home/user/service" target='_blank' class="linkABlue"> Flyme服务协议</a>
                    <label class="pointer">和</label>
                    <a href="http://www.meizu.com/in/legal.html" target='_blank' class="linkABlue"> 法律声明</a>
                </div>
                <a id="register" class="fullBtnBlue register-btn">注册</a>
                <div class="transferField">
                    <a class="go2register linkABlue" href="/home/user/login" id="toLogin" >登录</a>
                </div>
            </form>
        </div>
        <input type="hidden" name="appuri" value="" id="appuri" />
        <input type="hidden" name="useruri" value="" id="useruri" />
        <input type="hidden" name="service" value="" id="service" />
        <input type="hidden" name="sid" value="" id="sid" />
    </div>
<div class="mz_footerWrap tb" id="meizu-footer">
  <div class="mz_footerInner">
    <div class="mz_footer-layer1">
      <div class="mz_footer-innerLink">
        <a title="About us" target="_blank" href="http://www.meizu.com/in/aboutus.html">关于魅族</a>
        <img src="picture/space.gif" class="mz_foot-line">
        <a title="Contact us" target="_blank" href="http://www.meizu.com/in/contact.html">联系我们</a>
        <img src="picture/space.gif" class="mz_foot-line">
        <a title="Legal Statment" target="_blank" href="http://www.meizu.com/in/legalstatement.html">法律声明</a>
        <img src="picture/space.gif" class="mz_foot-line">
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
          <span class="mz_service-label">客服热线 &nbsp; 400-788-3333</span>
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


    <script charset="utf-8" type="text/javascript" src="/hm/register/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="/hm/register/js/jquery.form.js" charset="utf-8"></script>
    <script type="text/javascript" src="/hm/register/js/jquery.validate.js" charset="utf-8"></script>
    <script type="text/javascript" src="/hm/register/js/lang.js" charset="utf-8"></script>
    <script type="text/javascript" src="/hm/register/js/utils.js" charset="utf-8"></script>
    <script type="text/javascript" src="/hm/register/js/flyme.elements.js" charset="utf-8"></script>
    <script type="text/javascript" src="/hm/register/js/base.js" charset="utf-8"></script>
    <script src="/hm/register/js/cycode.js"></script>
    <script type="text/javascript" src="/hm/register/js/register.js" charset="utf-8"></script>
    <script type="text/javascript" src="/hm/register/js/crypp.min.js" charset="utf-8"></script>
    </body>
</html>
