
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="欢迎登录和注册魅族Flyme账号，您可以体验手机云服务功能，包括：在线下载应用，同步手机数据和查找手机等，让您的手机管理更加智能。" />
    <meta name="keywords" content="魅族 meizu 登录flyme 云服务 查找手机 充值账号 MX M9 MX2" />
    <meta content="width=1080" name="viewport">
    <script type="text/javascript" src="/jquery-1.8.3.min.js"></script>
    <title>Flyme账号 - 注册</title>
    <link href="{{ url('/hm/register/uc-res.mzres.com/resources/uc/web/base/css/base.css?ver=20140707') }}" type="text/css" rel="Stylesheet">
    <link href="{{ url('/hm/register/uc-res.mzres.com/resources/uc/wlogin/base/css/cycode.css') }}" rel="stylesheet">
    <link href="{{ url('/hm/register/uc-res.mzres.com/resources/uc/web/member/css/register.css?ver=20140707') }}" type="text/css" rel="Stylesheet">
</head>
<body>

   <div id='content' class="content">
    <div class=ucSimpleHeader id="header">
    <img src="{{url('/uploads/logo/saf.jpg')}}" class='meizuLogo'><i class='i_icon'></i>
    </div>
        <center>
        <div style="width:1423px;height:660px;background-color:black;">
            <div style="background-color:white;width:400px;height:580px;float:right;margin-right:250px;margin-top:45px;">
                <h2 style="margin-top:30px;color:#2292DD;">账号注册</h2>
                <hr color="#2292DD" width="335px">
                <br>
                <form action="/home/user/doregister" method="post" style="text-align: center;font-size:15px;">

@if(session('info'))
<center><div id="jg" style="color:white;background-color:#2292DD;width:200px;">
<p>{{ session('info')}}</p>
</div><br></center>
@endif

@if(count($errors) > 0)
<center><div id="jg" style="color:white;background-color:#2292DD;width:200px;">
@foreach($errors->all() as $error)
<p>{{ $error }}</p>
@endforeach
</div><br></center>
@endif
<script type="text/javascript">
window.onload = function()
{
//设置定时器 淡出
setInterval(function()
{
$("#jg").fadeOut('1000');
},1000);
}
</script>
                {{csrf_field()}}
                <div>
                <b>账 &nbsp;&nbsp;&nbsp;&nbsp; 号 : &nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" name="name" style="border:1px solid #ccc; width:250px;height:40px;" placeholder=" &nbsp;请输入6-18位Flyme账号"><br><br>
                <b>密 &nbsp;&nbsp;&nbsp;&nbsp; 码 : </b> &nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" style="border:1px solid #ccc; width:250px;height:40px;" placeholder=" &nbsp;请输入6-18位密码"><br><br>
                <b>确认密码 : </b>&nbsp;&nbsp;&nbsp;<input type="password" name="repassword" style="border:1px solid #ccc; width:250px;height:40px;" placeholder=" &nbsp;请输入确认密码"><br><br>
                <b>邮 &nbsp;&nbsp;&nbsp;&nbsp; 箱 : </b> &nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" style="border:1px solid #ccc; width:250px;height:40px;" placeholder=" &nbsp;请输入邮箱" id="resEmail"><br><br>
                <div style="border:1px solid #ccc; width:250px;height:40px;margin-left:115px;line-height:40px;">
                <input type="text" name="vkey" id="ce-u-passwordvalidate_code"  maxlength="6" autocomplete="off">|
                <span class="form-line"></span>
                <a id="regetKeyEmail" data-value="15" href="javascript:void(0);" data-type="1" class="linkABlue invalidBtn get_kapkey">获取验证码</a>
                <a style="position:relative;width:100px;height:45px;margin-left:30px;display:none;color:red;font-size:weight;border-radius:10%;" id="dt" type="button">60s</a>
                </div><br>
                <input type="hidden" name="nickname">
                <input type="hidden" name="status">
                <input type="hidden" name="sex">
                <input type="hidden" name="remember_token">
                <input type="hidden" name="created_at">
                <input type="hidden" name="updated_at">
                </div>
                <center><div style="font-size:14px;width:338px;text-align:left;">
                    点击注册,即表示您同意并愿意遵守
                    <a href="#" style="color:#2292DD;">Flyme服务协议</a>
                    和
                    <a href="#" style="color:#2292DD;">法律声明</a>
                </div></center><br>
                <button style="width:340px;height:50px;text-align:center;background-color:#2292DD;font-size:20px;color:white;font-weight: bold;">注册</button><br><br>


                <a href="{{url('/home/user/login')}}" style="color:#2292DD; float:left;margin-left: 30px;">登录</a>
                </form>
            </div>
        </div>
        </center>

<script type="text/javascript">
     //token认证
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }
                });
     //获取验证码
    $('#regetKeyEmail').on('click', function()
    {
         //定时器
            $('#regetKeyEmail').hide();
            $('#dt').show();
            var ii = 60;
            var time = setInterval(function()
            {
                ii--;
                $('#dt').html(ii+"s");
                if(ii==0){
                    $('#regetKeyEmail').show();
                     $('#dt').hide();
                    clearInterval(time);
                }
            },1000)
        var resEmail = $('#resEmail').val();
        // alert(resEmail);
        $.ajax({
            url:"{{url('home/user/ajaxResEmail')}}",
            type:"POST",
            data:{resEmail:resEmail},
            success:function(data)
            {
                if(data == 1)
                {
                    alert('验证码发送成功');
                }else if(data == 2)
                {
                    alert('发送失败，请重新发送');
                }
            },
            error:function()
            {
                alert('数据异常');
            }
        })
    })
</script>




<div id='flymeFooter' class='footerWrap'>
    <div class='footerInner'>
        <div class='footer-layer1'>
            <div class='footer-innerLink'>
                <a href="http://www.meizu.com/about.html" target="_blank" title="关于魅族">关于魅族</a>
                <img class="foot-line" src="{{ url('/hm/register/uc-res.mzres.com/resources/common/images/default/space.gif') }}">
                <a href="http://hr.meizu.com" target="_blank" title="工作机会">工作机会</a>
                <img class="foot-line" src="{{ url('/hm/register/uc-res.mzres.com/resources/common/images/default/space.gif') }}">
                <a href="http://www.meizu.com/contact.html" target="_blank" title="联系我们">联系我们</a>
                <img class="foot-line" src="{{ url('/hm/register/uc-res.mzres.com/resources/common/images/default/space.gif') }}">
                <a href="http://www.meizu.com/legalStatement.html" target="_blank" title="法律声明">法律声明</a>
                <img class="foot-line" src="{{ url('/hm/register/uc-res.mzres.com/resources/common/images/default/space.gif') }}">
                <div href="javascript:void(0);" id="globalName" class="footer-language" title="简体中文">
                    简体中文&nbsp;&nbsp;&nbsp;
                    <div id="globalContainer" class="footer-language_menu">
                        <a href="javascript:void(0)" id="i18n-link" title="English" class="ClobalItem">English</a>
                        <script>
                            ;(function() {
                                var u = decodeURIComponent(location.href)
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
    ga.src = ('https:' == document.location.protocol ? 'https://tongji-res.meizu.com' : 'http://tongji-res1.meizu.com') + 'resources/tongji/flow.js';
    s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();
</script>



    </body>

</html>



