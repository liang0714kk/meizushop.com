<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="欢迎登录和注册魅族Flyme账号，您可以体验手机云服务功能，包括：在线下载应用，同步手机数据和查找手机等，让您的手机管理更加智能。">
  <meta name="keywords" content="魅族  meizu 登录flyme 云服务  查找手机  充值账号  MX M9 MX2">
  <meta content="width=1080" name="viewport">
  <meta name="csrf-token" content="{{csrf_token()}}">
  <title>账号管理</title>
  <link href="/hm/personal/ePhoto_files/base.css" type="text/css" rel="Stylesheet">
  <link href="/hm/personal/ePhoto_files/head.css" type="text/css" rel="Stylesheet">
  <link href="/hm/personal/ePhoto_files/jquery-ui.css" type="text/css" rel="Stylesheet">
  <link href="/hm/personal/ePhoto_files/jquery.css" type="text/css" rel="Stylesheet">
  <link href="/hm/personal/ePhoto_files/mzhead20130905.css" type="text/css" rel="Stylesheet">
  <link href="/hm/personal/ePhoto_files/modifyIcon.css" type="text/css" rel="Stylesheet">
  <link href="/hm/personal/ePhoto_files/jquery_002.css" type="text/css" rel="stylesheet">
  <script type="text/javascript" src="/jquery-1.8.3.min.js"></script>
</head>
<body style="min-height: 800px;">
  <div id="content" class="content">


<input id="mz_csrf_tks" value="" type="hidden">
<div id="header-top" class="headWrap">
  <a href="http://www.meizu.com/index.html" class="headLogo"><i class="i_icon"></i></a>
  <ul class="headLeft">
    <li class="head-store">
      <a href="http://store.meizu.com/" class="" hidefocus=""><i class="i_icon"></i></a>
    </li>
    <li class="head-products">
      <a href="http://www.meizu.com/products/pro5/summary.html" class="" hidefocus=""><i class="i_icon"></i></a>
    </li>
    <li class="head-retail">
      <a href="http://retail.meizu.com/" class="" hidefocus=""><i class="i_icon"></i></a>
    </li>
    <li class="head-flyme">
      <a href="http://www.flyme.cn/" class="" hidefocus=""><i class="i_icon"></i></a>
    </li>
    <li class="head-services">
      <a href="http://service.meizu.com/" class="" hidefocus=""><i class="i_icon"></i></a>
    </li>
    <li class="head-bbs">
      <a href="http://bbs.meizu.cn/" class="" hidefocus=""><i class="i_icon"></i></a>
    </li>
  </ul>

  <div class="headRight">
    <span id="loginWrap" style="">
      <a id="head-name" class="linkAGray" href="" title="放牛的小羊">{{session('master') -> nickname}}</a>
      <span id="show-msg-pub" class="none">1</span>
      <span class="line_head">|</span>
      <a id="head-logout" class="linkAGray" href="/home/user/logout">退出</a>

    </span>

        <!--密码风险提示-->
        <div id="show-psw-tip" class="none">
            <div class="tip-content">
                <div class="tip-span-msg">当前密码风险较高，请尽快修改密码</div>
                <div class="tip-cancel"></div>
            </div>
        </div>

    <span id="unloginWrap" style="display:none;">
      <a href="/home/user/login" class="head-name">登录</a>
      <span class="line_head">|</span>
      <a href="/home/user/register" class="head-logout">注册</a>
    </span>
  </div>
</div>

    <div class="flymeContent">

<div id="navWrap" class="navWrap">
  <ul class="nav">
    <li id="accountManage"><a href="" class="linkABlue">账号管理</a><div class="current"></div></li>
  </ul>
</div>
<div class="clear"></div>

      <div id="mainWrap" class="mainWrap">
        <div id="topWrap" class="topWrap">
          <div class="top-leftWrap">
            <span class="display fontBig">当前头像</span>
            <img id="userImg" src="/uploads/avater/{{session('master') -> photo}}">
          </div>
          <div class="clear"></div>
        </div>
        <div class="grayBorderB">
          <div class="titleWrap">
            <div class="leftWrap-bottom">
              <span style="margin-left: 300px;">支持jpg、jpeg、png、bmp格式，文件小于5M</span>
              <span class="fontBig fleft">设置新头像</span>
            </div>
            <div class="clear"></div>
          </div>
          </div>
        <div id="upload">
          <form name="uploadForm" action="{{url('home/user/personal/editPhoto')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
            <input type="hidden" name="id" value="{{session('master') -> id}}">
            <input  name="photo"  size="28" accept="image/*" type="file" onchange="previewImage(this)"><br><br><br>
              <div id="preview">
              <img id="imghead" width=100 height=100 border=0 src='{{('/uploads/avater/')}}/{{session('master') -> photo}}')}}'>
              </div><br><br>
              <input type="submit" style="width:158px;height:50px;line-height:50px;font-size:18px;background-color:#2b8cc5;color:#fff;">
            <!--[if lte IE 8]><span style="position:absolute; left:140px; top:5px">双击选择照片</span><![endif]-->
          </form>
<script type="text/javascript">


                //图片上传预览    IE是用了滤镜。
        function previewImage(file)
        {
          var MAXWIDTH  = 260;
          var MAXHEIGHT = 180;
          var div = document.getElementById('preview');
          if (file.files && file.files[0])
          {
              div.innerHTML ='<img id=imghead>';
              var img = document.getElementById('imghead');
              img.onload = function(){
                var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                img.width  =  rect.width;
                img.height =  rect.height;
//                 img.style.marginLeft = rect.left+'px';
                img.style.marginTop = rect.top+'px';
              }
              var reader = new FileReader();
              reader.onload = function(evt){img.src = evt.target.result;}
              reader.readAsDataURL(file.files[0]);
          }
          else //兼容IE
          {
            var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
            file.select();
            var src = document.selection.createRange().text;
            div.innerHTML = '<img id=imghead>';
            var img = document.getElementById('imghead');
            img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
            var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
            status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
            div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
          }
        }
        function clacImgZoomParam( maxWidth, maxHeight, width, height ){
            var param = {top:0, left:0, width:width, height:height};
            if( width>maxWidth || height>maxHeight )
            {
                rateWidth = width / maxWidth;
                rateHeight = height / maxHeight;

                if( rateWidth > rateHeight )
                {
                    param.width =  maxWidth;
                    param.height = Math.round(height / rateWidth);
                }else
                {
                    param.width = Math.round(width / rateHeight);
                    param.height = maxHeight;
                }
            }

            param.left = Math.round((maxWidth - param.width) / 2);
            param.top = Math.round((maxHeight - param.height) / 2);
            return param;
        }
</script>




        </div>
          <form id="scropForm" name="scropForm" enctype="application/x-www-form-urlencoded">
            <input id="origIconUrl" name="origIconUrl" value="https://image.meizu.com/image/uc/aa362455465872554e2d572ee159859f?t=1480565246000" type="hidden">
            <input id="x" name="x" value="0" type="hidden">
            <input id="y" name="y" value="113" type="hidden">
            <input id="w" name="w" value="1" type="hidden">
            <input id="h" name="h" value="1" type="hidden">
          </form>
      </div>
    </div>
  </div>





<div id="flymeFooter" class="footerWrap">
  <div class="footerInner">
    <div class="footer-layer1">
      <div class="footer-innerLink">
        <a href="http://www.meizu.com/about.html" target="_blank" title="关于魅族">关于魅族</a>
        <img class="foot-line" src="/hm/personal/ePhoto_files/space.gif">
        <a href="http://hr.meizu.com/" target="_blank" title="工作机会">工作机会</a>
        <img class="foot-line" src="/hm/personal/ePhoto_files/space.gif">
        <a href="http://www.meizu.com/contact.html" target="_blank" title="联系我们">联系我们</a>
        <img class="foot-line" src="/hm/personal/ePhoto_files/space.gif">
        <a href="http://www.meizu.com/legalStatement.html" target="_blank" title="法律声明">法律声明</a>
        <img class="foot-line" src="/hm/personal/ePhoto_files/space.gif">

        <div href="javascript:void(0);" id="globalName" class="footer-language" title="简体中文">
          简体中文&nbsp;&nbsp;&nbsp;
          <div id="globalContainer" class="footer-language_menu" style="left: 512px; display: none;">
            <a href="https://i.flyme.cn/uc/webjsp/membericon/modify?lang=en_US" id="i18n-link" title="English" class="ClobalItem">English</a>

            </script>
          </div>
        </div>
      </div>
      <div class="footer-service">
        <span class="service-label">客服热线</span>
        <span class="service-num">400-788-3333</span>
        <a id="service-online" class="service-online" href="javascript:void(0);" title="在线客服">在线客服</a>
      </div>
      <div class="footer-outerLink">
        <a class="footer-sinaMblog" href="http://weibo.com/meizumobile" target="_blank"><i class="i_icon"></i></a>

        <a id="footer-weChat" class="footer-weChat" href="javascript:void(0);" target="_blank"><i class="i_icon"></i></a>
        <a class="footer-qzone" href="http://user.qzone.qq.com/2762957059" target="_blank"><i class="i_icon"></i></a>
      </div>
    </div>
    <div class="clear"></div>
    <div id="flymeCopyright" class="copyrightWrap">
      <div class="copyrightInner">
        <span>©2016 Meizu Telecom Equipment Co., Ltd. All rights reserved.</span>
        <a href="http://www.miitbeian.gov.cn/" class="linkAGray" target="_blank">备案号: 粤ICP备13003602号-4</a>
        <a href="http://www3.res.meizu.com/static/cn/widget/footer/images/icp2_b2dcb54.jpg" class="linkAGray" target="_blank">经营许可证编号: 粤B2-20130198</a>
        <a target="_blank" href="http://www2.res.meizu.com/zh_cn/images/common/com_licence.jpg" hidefocus="true" class="linkAGray">营业执照</a>
      </div>
    </div>
  </div>
</div>
<div id="wechatPic"></div>



</body></html>