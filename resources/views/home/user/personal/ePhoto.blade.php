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
            <li class="layout-topbar-right-links signout"><a class="layout-topbar-link" target="_blank" href="{{url('hme/user/register')}}">注册</a></li>
            <li class="layout-topbar-right-links member signin">
                <a class="layout-topbar-link" target="_blank" href="{{url('home/user/personal/index')}}"><span class="layout-topbar-username" id="topbarUser">{{session('master') -> nickname}}</span>的商城<i class="layout-topbar-triangle"></i></a>
                <ul class="layout-topbar-downmenu">
                    <li class="layout-topbar-downmenu-item"><a class="layout-topbar-downmenu-link" data-mdesc="我的商城下拉框1" data-mtype="store_index_yt_my_1" target="_blank" href="{{ url('/home/ordercenter/address') }}">地址管理</a></li>

                    <li class="layout-topbar-downmenu-item"><a class="layout-topbar-downmenu-link" data-mdesc="我的商城下拉框3" data-mtype="store_index_yt_my_3" target="_blank" href="{{ url('/home/feedback/add') }}">问题反馈</a></li>
                    <li class="layout-topbar-downmenu-item"><a class="layout-topbar-downmenu-link exit" data-mdesc="我的商城下拉框4" data-mtype="store_index_yt_my_4" href="{{url('home/user/logout')}}">退出</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>

    <meta name="csrf-token" content="{{csrf_token()}}">
    <script type="text/javascript" src="/jquery-1.8.3.min.js"></script>
    <title>账号管理</title>
    <link href="/hm/personal/edit_files/base.css" type="text/css" rel="Stylesheet">
    <link href="/hm/personal/edit_files/head.css" type="text/css" rel="Stylesheet">
    <link href="/hm/personal/edit_files/cycode.css" rel="stylesheet">
    <link href="/hm/personal/edit_files/actmanage.css" type="text/css" rel="Stylesheet">
<script type="text/javascript">
    var ReceiveEmail = '2****409@qq.com';
    var isHit = 'false';
</script>
</head>
<body style="min-height: 848px;">
    <div id="content" class="content">

<input type="hidden" id="mz_csrf_tks" value="">


        <div class="flymeContent">


<style type="text/css">
    .navWrap{
        height: 58px;
        border-bottom: #e4e7e9 1px solid;
    }
    .navWrap .nav{
        display: block;
        float: left;
        line-height: 58px;
    }
    .navWrap .nav li{
        position: relative;
        display: inline-block;
        margin-right: 40px;
        width: 100px;
        height: 100%;
        float: left;
    }
    .navWrap .nav li a{
        display: inline-block;
        width: 100%;
        height: 56px;
        font-size: 16px;
        text-align: center;
    }
    .navWrap .nav .current{
        margin: 0px auto;
        height: 2px;
        width: 100px;
        overflow: hidden;
        background-color: #1daeed;
    }
</style>
<div id="navWrap" class="navWrap">
    <ul class="nav">
        <li id="accountManage"><a href="{{url('home/user/personal/ePhoto')}}" class="linkABlue">修改头像</a><div class="current"></div></li>

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
              <img id="imghead" width=200 height=200 border=0 src='{{('/uploads/avater/')}}/{{session('master') -> photo}}')}}'>
              </div><br><br>
              <input type="submit" style="width:158px;height:50px;line-height:50px;font-size:18px;background-color:#2b8cc5;color:#fff;" value="保存">
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
//      img.style.marginLeft = rect.left+'px';
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
  <div id="flymeFooter" class="footerWrap" style="top: 855px;">
    <div class="footerInner">
        <div class="footer-layer1">
            <div class="footer-innerLink">
                <a href="http://www.meizu.com/about.html" target="_blank" title="关于魅族">关于魅族</a>
                <img class="foot-line" src="/hm/personal/edit_files/space.gif">
                <a href="http://hr.meizu.com/" target="_blank" title="工作机会">工作机会</a>
                <img class="foot-line" src="/hm/personal/edit_files/space.gif">
                <a href="http://www.meizu.com/contact.html" target="_blank" title="联系我们">联系我们</a>
                <img class="foot-line" src="/hm/personal/edit_files/space.gif">
                <a href="http://www.meizu.com/legalStatement.html" target="_blank" title="法律声明">法律声明</a>
                <img class="foot-line" src="/hm/personal/edit_files/space.gif">

                <div href="javascript:void(0);" id="globalName" class="footer-language" title="简体中文">
                    简体中文&nbsp;&nbsp;&nbsp;
                    <div id="globalContainer" class="footer-language_menu" style="left: 513px;">
                        <a href="https://i.flyme.cn/uc/webjsp/member/detail?lang=en_US" id="i18n-link" title="English" class="ClobalItem">English</a>
                        <script>
                            (function() {
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





</body></html>