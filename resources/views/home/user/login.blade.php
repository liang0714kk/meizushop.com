




<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=11;IE=10;IE=9;IE=8;" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="欢迎登录和注册魅族Flyme账号，您可以体验手机云服务功能，包括：在线下载应用，同步手机数据和查找手机等，让您的手机管理更加智能。" />
    <meta name="keywords" content="魅族  meizu 登录flyme 云服务  查找手机  充值账号  MX M9 MX2" />
    <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>验证码登录</title>
    <link href="/hm/login/css/base.css" type="text/css" rel="Stylesheet"/>
    <link href="/hm/login/css/cycode.css" rel="stylesheet"/>
    <link href="/hm/login/css/vcodelogin.css" type="text/css" rel="Stylesheet"/>
    <!--阿里pt.js-->
  <!--<script src="js/pt.js" data-app="ewogICJjb21tb24iOiB7CiAgICAiYXBwa2V5IjogIlJIVjIiLAogICAgInVzZUN1c3RvbVRva2VuIjogZmFsc2UsCiAgICAic2NlbmUiOiAiTG9naW4iLAogICAgImZvcmVpZ24iOiAwCiAgfSwKICAidWFiIjogewogICAgIkV4VGFyZ2V0IjogWwogICAgICAicHdkaWQiCiAgICBdLAogICAgInVzZUN1c3RvbVRva2VuIjogZmFsc2UsCiAgICAiRm9ybUlkIjogIm15X2Zvcm0iLAogICAgIkxvZ1ZhbCI6ICJ1YV9sb2ciLAogICAgIlNlbmRJbnRlcnZhbCI6IDIwLAogICAgIlNlbmRNZXRob2QiOiAzLAogICAgIk1heE1DTG9nIjogMTUwLAogICAgIk1heEtTTG9nIjogMTUwLAogICAgIk1heE1QTG9nIjogMTUwLAogICAgIk1heEdQTG9nIjogNSwKICAgICJNYXhUQ0xvZyI6IDE1MCwKICAgICJHUEludGVydmFsIjogNTAsCiAgICAiTVBJbnRlcnZhbCI6IDUwLAogICAgIk1heEZvY3VzTG9nIjogMTUwLAogICAgImlzU2VuZEVycm9yIjogMSwKICAgICJJbWdVcmwiOiAiLy9jZmQuYWxpeXVuLmNvbS9jb2xsZWN0b3IvYW5hbHl6ZS5qc29ucCIsCiAgICAiR2V0QXR0cnMiOiBbCiAgICAgICJocmVmIiwKICAgICAgInNyYyIKICAgIF0sCiAgICAiRmxhZyI6IDE5NjU1NjcKICB9LAogICJ1bWlkIjogewogICAgInRpbWVvdXQiOiAzMDAwLAogICAgInRpbWVzdGFtcCI6ICIkIXRpbWVzdGFtcCIsCiAgICAidG9rZW4iOiAiJCF0b2tlbiIsCiAgICAic2VydmljZVVybCI6ICJodHRwczovL3ludWYuYWxpcGF5LmNvbS9zZXJ2aWNlL3VtLmpzb24iLAogICAgImFwcE5hbWUiOiAiJCFhcHBOYW1lIiwKICAgICJjb250YWluZXJzIjogewogICAgICAiZmxhc2giOiAiY29udGFpbmVyIiwKICAgICAgImRjcCI6ICJjb250YWluZXIiCiAgICB9CiAgfQp9"></script>-->
</head>
<body>
    <div id='content' class="content">



<div class=ucSimpleHeader id="header">
    <a href="http://www.meizu.com" class='meizuLogo'><i class='i_icon'></i></a>
    <div id="trigger">
        <a href="https://login.flyme.cn/sso" id="toLogin" class='linkAGray'>登录</a>
        <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
        <a href="https://i.flyme.cn/register" id="toRegister" class='linkAGray'>注册</a>
    </div>
</div>
        <img src="/hm/login/picture/flyme.png" alt="Flyme" class="logo hide" id="logo"/>
        <form id="mainForm" enctype="application/x-www-form-urlencoded" novalidate="novalidate">
            <div class="number">
                <a class="linkAGray" id="toAccountLogin" href="/home/user/pLogin">普通登录</a>
                <span class="register-line"></span>
                <a class="linkABlue" id="toVCodeLogin" href="javascript:void(0);">验证码登录</a>
            </div>
            <div class='normalInput cycode-box show-cycode' id="cycode-box">
                <div class="cycode-selectbox phoneText" sytle="height: 36px;">
                    <span class="cycode-selected cycode-height cycodePhone">
                        <input readonly class="ipt-cycode phone_num" id="cycode" value="+86" >
                        <i class="arrow-down"></i>
                    </span>
                    <input id="phone" name="phone" class="ipt-phone phone_num" maxlength="20" placeholder="手机号码" autocomplete='off' tabindex="2"/>
                </div>
                <div id="cycode-container" class="cycode-container"></div>
            </div>
            <!-- <div class='normalInput'>
                <input type="text" value="" name="phone" id="phone" maxlength="11" placeholder='手机号码' autocomplete='off'>
            </div> -->
            <div class="normalInput box-input" style="margin-bottom: 13px;">
                <input type="text" class="pswInput" name="kapkey" id="kapkey" maxlength="6" placeholder='验证码' autocomplete='off' tabindex="3" />
                <span class="form-line"></span>
                <a id="getKey" href="javascript:void(0);" class="linkABlue">获取验证码</a>
            </div>
            <div style="padding-bottom: 17px;"><a class="hide a_acount_login" id="a_login" href="https://login.flyme.cn/login/login.html">普通登录</a></div>
            <!-- 极速验证 -->
      <!--<div class='box-geetest'>
          <div id="div_id_embed"></div>
          <div id="div_geetest_lib"></div>
      </div>
      <span id="j_geetest_error" class="error geetest_error" style="display:none"></span>-->
            <!--<div id='rememberField' class="rememberField" style="height:0px;">
                <span><input name="acceptFlyme" id="acceptFlyme" type="checkbox" value="1" checked='checked'></span>
                <label class='pointer' for="acceptFlyme" tabindex="0">我已阅读并接受</label>
                <a href="/serviceAgreement" target='_blank' class="linkABlue">《Flyme服务协议条款》</a>
            </div>
            <span id='acceptError' class='otherError' style='display:none;'>请确认已阅读并同意Flyme服务协议条款</span>-->
            <a id="register" class="fullBtnBlue">登录</a>
        </form>

        <input type="hidden" name="appuri" value="" id="appuri" />
        <input type="hidden" name="useruri" value="http://store.meizu.com/member/login.htm?useruri=http://me.meizu.com/member/index" id="useruri" />
        <input type="hidden" name="service" value="" id="service" />
        <input type="hidden" name="sid" value="unionlogin" id="sid" />
    </div>





<div id='flymeFooter' class='footerWrap'>
    <div class='footerInner'>
        <div class='footer-layer1'>
            <div class='footer-innerLink'>
                <a href="http://www.meizu.com/about.html" target="_blank" title="关于魅族">关于魅族</a>
                <img class="foot-line" src="/hm/login/picture/space.gif">
                <a href="http://hr.meizu.com" target="_blank" title="工作机会">工作机会</a>
                <img class="foot-line" src="/hm/login/picture/space.gif">
                <a href="http://www.meizu.com/contact.html" target="_blank" title="联系我们">联系我们</a>
                <img class="foot-line" src="/hm/login/picture/space.gif">
                <a href="http://www.meizu.com/legalStatement.html" target="_blank" title="法律声明">法律声明</a>
                <img class="foot-line" src="/hm/login/picture/space.gif">
                <a href="https://uc-res.mzres.com/resources/uc/wlogin/faq/html/index.html" target="_blank" title="常见问题">常见问题</a>
                <img class="foot-line" src="/hm/login/picture/space.gif">
                <a href="javascript:void(0);" id="globalName" class="footer-language" title="简体中文">简体中文&nbsp;&nbsp;&nbsp;</a>
            </div>
            <div class='footer-service'>
                <span class='service-label'>客服热线</span>
                <span class='service-num'>400-788-3333</span>
                <a id='service-online' class='service-online' href="javascript:void(0);" title="在线客服">在线客服</a>
            </div>
            <div class='footer-outerLink'>
                <a class='footer-sinaMblog' href="http://weibo.com/meizumobile" target="_blank"><i class='i_icon'></i></a>

                <a id='footer-weChat' class='footer-weChat' href="javascript:void(0);" target="_blank"><i class='i_icon'></i></a>
                <a class='footer-qzone' href="http://user.qzone.qq.com/2762957059" target="_blank"><i class='i_icon'></i></a>
            </div>
            <div id="globalContainer" class="footer-language_menu">
                <a href="javascript:void(0)" title="简体中文" class="checked">简体中文</a>
                <a href="javascript:void(0)" id="i18n-link" title="English" class="ClobalItem">English</a>
                <script>
                    ;(function() {
                        var url = location.href
                        if (url.indexOf('vCodeLogin')>=0){
                            url = url.replace('vCodeLogin', 'sso')
                        }
                        var u = decodeURIComponent(url)
                        var r = /lang=([^&\s]+)/
                        var lowB = !('addEventListener' in window)
                        var addEvent = lowB ? window.attachEvent : window.addEventListener

                        if(r.test(u)) u = u.replace(r, 'lang=en_US')
                        else u += (~u.indexOf('?') ? '&' : '?') + 'lang=en_US'

                        addEvent(lowB ? 'onload' : 'load', function() {document.getElementById('i18n-link').setAttribute('href',u)})
                    }());
                </script>
            </div>
        </div>
        <div class='clear'></div>
        <div id='flymeCopyright' class="copyrightWrap">
            <div class="copyrightInner">
                <span>©2016 Meizu Telecom Equipment Co., Ltd. All rights reserved.</span>
                <a href="http://www.miitbeian.gov.cn/" class='linkAGray' target="_blank">备案号: 粤ICP备13003602号-4</a>
                <a href="http://www3.res.meizu.com/static/cn/widget/footer/images/icp2_b2dcb54.jpg" class='linkAGray' target="_blank">经营许可证编号: 粤B2-20130198</a>
                <a target="_blank" href="http://www2.res.meizu.com/zh_cn/images/common/com_licence.jpg" hidefocus="true" class="linkAGray">营业执照</a>
            </div>
        </div>
    </div>
</div>
<div id="wechatPic"></div>
<script type="text/javascript">
(function() {
    var ga = document.createElement('script'), s;
    ga.type = 'text/javascript';
    ga.src = ('https:' == document.location.protocol ? 'https://tongji-res.meizu.com' : 'http://tongji-res1.meizu.com') + '/resources/tongji/flow.js';
    s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();
</script>

    <script charset="utf-8" type="text/javascript" src="/hm/login/js/jquery-1.7.1.min.js"></script>

    <script type="text/javascript" src="/hm/login/js/jquery.form.js" charset="utf-8"></script>
    <script type="text/javascript" src="/hm/login/js/jquery.validate.js" charset="utf-8"></script>
    <script type="text/javascript" src="/hm/login/js/utils.js" charset="utf-8"></script>
    <script type="text/javascript" src="/hm/login/js/flyme.elements.js" charset="utf-8"></script>
    <script type="text/javascript" src="/hm/login/js/base.js" charset="utf-8"></script>
    <script src="/hm/login/js/cycode.js"></script>
    <script type="text/javascript" src="/hm/login/js/vcodelogin.js" charset="utf-8"></script>
    <!--接入风控sh.min.js-->
    <script type="text/javascript" src="/hm/login/s/sh.min.js" charset="utf-8"></script>
    </body>
</html>
