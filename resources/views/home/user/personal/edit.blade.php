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

            <li class="layout-topbar-right-links signin"><a id="topbarMsg" class="layout-topbar-link has-msg" data-mdesc="页头-消息" data-mtype="store_index_yt_msg " target="_blank" href="http://me.meizu.com/member/message/index">消息</a></li>
            <li class="layout-topbar-right-links"><a class="layout-topbar-link" data-mdesc="页头-收藏   " data-mtype="store_index_yt_collect" target="_blank" href="http://me.meizu.com/member/favorite/index">我的收藏<i class="layout-icon layout-icon-new"></i></a></li>
            <li class="layout-topbar-right-links"><a id="topbarOrderMsg" class="layout-topbar-link has-msg" data-mdesc="页头-我的订单" data-mtype="store_index_yt_order" target="_blank" href="http://ordercenter.meizu.com/list/index.html">我的订单</a></li>
            <li class="layout-topbar-right-links signout"><a class="layout-topbar-link" href="javascript:window.location.href=&#39;https://login.flyme.cn/vCodeLogin?sid=unionlogin&amp;service=store&amp;autodirct=true&amp;useruri=http://store.meizu.com/member/login.htm?useruri=&#39;+window.location.href;">登录</a></li>
            <li class="layout-topbar-right-links signout"><a class="layout-topbar-link" target="_blank" href="https://member.meizu.com/register">注册</a></li>
            <li class="layout-topbar-right-links member signin">
                <a class="layout-topbar-link" target="_blank" href=""><span class="layout-topbar-username" id="topbarUser">{{session('master') -> nickname}}</span>的商城<i class="layout-topbar-triangle"></i></a>
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
        <li id="accountManage"><a href="https://i.flyme.cn/uc/webjsp/member/detail" class="linkABlue">账号管理</a><div class="current"></div></li>
        <li id="contact"><a href="" class="linkAGray">魅币</a></li>
    </ul>
</div>
<div class="clear"></div>

            <div class="topWrap">
                <div class="top-leftWrap">
                    <img id="userImg" src="/uploads/avater/{{ session('master') -> photo}}">
                    <a id="modifyIconTip" class="modifyIconTip modify" href="/home/user/personal/ePhoto">编辑头像</a>
                    <a class="modifyIconTip-bg"></a>
                </div>
                <div class="top-rightWrap">
                    <div id="nickNameTitle" class="lineWrap nickname">
                        <label id="nickName">
                            {{session('master') -> nickname}}
                        </label> &nbsp;
                       <img src="/eNickname.jpg" id="nickNameEdite">
                    </div>
                    <div id="nickNameCon" class="lineWrap modify_content nickNameCon" style="display: none">
                        <form style="*display:inline">
                            <div class="lineWrap">
                                <input type="text" value="" name="nickname" id="newnickName" class="normalInput">
                            </div>

                            <div class="edit">
                                <a id="editSave" class="fullBtnBlue save_form fleft">保存</a>
                                <a id="editCancel" class="fullBtnGray cancel_form fleft">取消</a>
                            </div>

                        </form>
                    </div>
                        <div class="lineWrap grayTip nameWrapTop" id="getUserNameWrap">
                        <label>账号：</label>
                        <span id="userName">{{session('master') -> name}}@flyme.cn</span>
                        <input type="hidden" value="liang0714kk" id="memberFlyme">
                        </div>
                    </div>
                <div class="clear"></div>
            </div>
<!-- 修改昵称 -->
<script type="text/javascript">
     var click = document.getElementById('nickNameCon');
     var id = {{session('master') -> id}};
        //token认证
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                    }
                    });
        //修改昵称
        $('#nickNameEdite').on('click', function()
        {
            click.style.display = 'block';
        });
        // var newnickName = $("#newnickName").val();
        $('#editSave').on('click', function()
        {
            $.ajax({
                url:"{{ url('home/user/personal/ajaxNickname')}}",
                type:"POST",
                data:{name:$("#newnickName").val(),id:id},
                success:function(data)
                {
                    if(data == 1)
                    {
                        alert('修改成功');
                        $('#nickName').html($("#newnickName").val());
                    }else if(data == 2)
                    {
                        alert('修改失败');
                    }else if(data == 3){
                        alert('修改信息不能为空');
                    }
                },
                error:function()
                {
                    alert('数据异常');
                }
            });
            //单击隐藏修改昵称框
            click.style.display = 'none';
        });
        $('#editCancel').on('click', function()
        {
            //取消修改
            click.style.display = 'none';
        });

</script>

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

        //设置定时器 淡出
        setInterval(function()
        {
            $("#jg").fadeOut('1000');
        },1000);

</script>
            <div class="mainWrap">
                   <div class="titleWrap grayBorderB grayBorderTop">
                    <div class="title-leftWrap">
                        <span>账号安全</span>
                    </div>
                    <div class="title-rightWrap">
                        <span>安全等级：</span>
                        <span id="safeLevel" class="red">
                        @if(!empty(session('master') -> password))
                        20
                        @endif
                        </span>
                        <a id="safeLevelTip" class="pointer"><i class="i_icon"></i></a>
                    </div>
                    <div class="clear"></div>
                </div><br>
                <div class="bodyWrap">
                    <div id="pwdWrap" class="lineWrap pwdWrapTop">
                        <div class="item-right"><a href="javascript:void(0);" class="linkABlue modify" id="modifyPassword">修改</a></div>
                        <div class="item-left">密码</div>
                        <div class="item-middle"></div>
                        <div class="clear"></div>
                    </div><br>


                    <div id="passwordCon"  style="display:none;">
                        <div class="cEmail-titleWrap">
                            <span>修改密码</span>
                        </div>
                        <form class="cEmail-bodyWrap" action="{{url('/home/user/personal/changePassword')}}" method="post" enctype="application/x-www-form-urlencoded" novalidate="novalidate">
                        {{csrf_field()}}
                            <input type="hidden" name="id" value="{{ session('master') -> id}}">
                            <div class="lineWrap">
                                <div class="leftWrap">
                                    <label class="leftLabel"> &nbsp;&nbsp;&nbsp;&nbsp;原 密 码</label>
                                </div>
                                <input type="password" value="" name="OldPassword" id="oldPassword" class="normalInput" maxlength="16">
                            </div>
                            <div class="lineWrap">
                                <div class="leftWrap">
                                    <label class="leftLabel"> &nbsp;&nbsp;&nbsp;&nbsp;新 密 码</label>
                                </div>
                                <div class="normalInput">
                                    <input type="password" value="" name="NewPassword" id="newPassword" maxlength="16" autocomplete="off">
                                    <input type="password" value="" id="ce-u-new_pwd2" maxlength="16" autocomplete="off" style="display:none">
                                    <a id="pwdBtn" class="pwdBtnShow noselect" onselectstart="return false">
                                        <i class="i_icon"></i>
                                    </a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="lineWrap">
                                <div class="leftWrap">
                                    <label class="leftLabel">确认新密码</label>
                                </div>
                                <div class="normalInput">
                                    <input type="password" value="" name="reNewPassword" id="newPassword" maxlength="16" autocomplete="off">
                                    <input type="password" value="" id="ce-u-new_pwd2" maxlength="16" autocomplete="off" style="display:none">
                                    <a id="pwdBtn" class="pwdBtnShow noselect" onselectstart="return false">
                                        <i class="i_icon"></i>
                                    </a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="lineWrap">
                                <label class="fleft">&nbsp;</label>
                                <input type="submit" name="" class="fullBtnBlue save_form fleft" id="ce-u-pwdsave" value="提交" style="width:158px;height:50px;line-height:50px;font-size:18px;background-color:#2b8cc5;color:#fff;">
                                <a href="javascript:;" class="fullBtnGray cancel_form fleft" id="ce-u-pwdcancel">取消</a>
                                <div class="clear"></div>
                            </div>
                        </form>
                    </div>
<!-- 修改密码 -->
<script type="text/javascript">
     var change = document.getElementById('passwordCon');
     var pwdWrap = document.getElementById('pwdWrap');
     var id = {{session('master') -> id}};
        //token认证
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                    }
                    });
        //修改密码
        $('#modifyPassword').on('click', function()
        {
            change.style.display = 'block';
            pwdWrap.style.display = 'none';
        });
        $('#ce-u-pwdsave').on('click', function()
        {
            //单击隐藏
            change.style.display = 'none';
            pwdWrap.style.display = 'block';
        });
        $('#ce-u-pwdcancel').on('click', function()
        {
            //取消修改
            change.style.display = 'none';
            pwdWrap.style.display = 'block';
        });

</script>
                    <div id="emailWrap" class="lineWrap">
                        <div class="item-right" >
                            <a id="emailEdite" href="javascript:void(0);" class="linkABlue modify" data-type="modify">修改</a>
                        </div>
                        <!-- end if -->
                        <div class="item-left" >邮箱</div>
                        <!--if-->
                        <div class="item-middle" id="email-item-middle1">
                            <span id="current_email" class="email bold">{{ session('master') -> email}}</span><br>
                            <span class="grayTip">已验证，可通过邮箱找回密码</span>
                        </div>
                        <!-- end if -->
                        <div class="clear"></div>
                    </div><br>
                    <div id="changeEmail-pass" class="grayBorderT grayBorderB modify_content " style="display:none;">
                        <div class="cEmail-titleWrap">
                            <span id="editEmail">修改邮箱（验证密码）</span>
                        </div>
                        <form class="cEmail-bodyWrap" novalidate="novalidate">
                            <div class="lineWrap">
                                <div class="leftWrap">
                                    <label class="leftLabel">账号密码</label>
                                </div>
                                <input type="password" value="" name="password" id="ce-u-password" class="normalInput" maxlength="16">
                            </div>
                            <div class="lineWrap">
                                <label class="fleft">&nbsp;</label>
                                <a class="fullBtnBlue ce-u-save save_form fleft" id="ce-u-savenext">下一步</a>
                                <a class="fullBtnGray ce-u-cancel cancel_form fleft" id="ce-u-savenextcancel">取消</a>
                                <div class="clear"></div>
                            </div>
                                    <div class="clear"></div>
                        </form>
                    </div>
                    <!-- 修改邮箱 1 -->
<script type="text/javascript">
//获取选项
var changeEmail = document.getElementById('changeEmail-pass');
var emailWrap   = document.getElementById('emailWrap');
//token认证
$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
            });
//单击事件显示输入框
$('#emailEdite').on('click', function()
{
    changeEmail.style.display = 'block';
    emailWrap.style.display = 'none';
})
//单击取消隐藏输入框
$('#ce-u-savenextcancel').on('click', function()
{
    changeEmail.style.display = 'none';
    emailWrap.style.display = 'block';
})
</script>
<div id="sendEmail" style="display:none;" class="grayBorderT grayBorderB modify_content ">
    <div class="cEmail-titleWrap">
        <span id="editEmail">修改邮箱</span>
    </div>
    <form class="cEmail-bodyWrap" novalidate="novalidate" action="{{url('/home/user/personal/verEmail')}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{session('master') -> id}}">
    <div class="lineWrap">
        <div class="leftWrap">
            <label class="leftLabel">新邮箱</label>
        </div>
        <input type="email" value="" data-key="kapkey" name="newEmail" id="ce-u-new_email" class="normalInput" maxlength="32">
    </div>
    <div class="lineWrap">
        <div class="leftWrap">
            <label class="leftLabel">邮件验证码</label>
        </div>
        <div class="normalInput bottom">
            <input type="text" name="kapkey" id="ce-u-passwordvalidate_code" class="kapkey" maxlength="6" autocomplete="off">
            <span class="form-line"></span>
            <a id="getKeynewEmail" data-value="15" href="javascript:void(0);" data-type="1" class="linkABlue invalidBtn get_kapkey">获取验证码</a>
            <a style="position:relative;width:100px;height:45px;margin-left:30px;display:none;color:red;font-size:weight;border-radius:10%;" id="dt" type="button">60s</a>
        </div>
    </div>
    <div class="lineWrap">
        <label class="fleft">&nbsp;</label>
        <input type="submit" name="" value="提交" class="fullBtnBlue ce-u-save save_form fleft" id="ce-u-save" style="width:158px;height:50px;line-height:50px;font-size:18px;background-color:#2b8cc5;color:#fff;">
        <a class="fullBtnGray ce-u-cancel cancel_form fleft" id="ce-u-cancel">取消</a>
        <div class="clear"></div>
    </div>
    </form>
</div>
<!-- 修改邮箱 2  -->
<script type="text/javascript">
    var sendEmail = document.getElementById('sendEmail');
    //token认证
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }
                });
    // 单击下一步修改邮箱验证密码ajax
    $('#ce-u-savenext').on('click', function()
    {
        var verPass = $('#ce-u-password').val();
        $.ajax({
            url:"{{url('/home/user/personal/verPass')}}",
            type:"POST",
            data:{verPass:verPass,id:id},
            success:function(data)
            {
                if(data == 1)
                {
                    changeEmail.style.display = 'none';
                    sendEmail.style.display = 'block';
                }
                else if(data == 2)
                {
                    alert('账号密码不正确');
                }
            },
            error:function()
            {
                alert('数据异常');
            }
            })

    })
    //获取验证码
    $('#getKeynewEmail').on('click', function()
    {
         //定时器
            $('#getKeynewEmail').hide();
            $('#dt').show();
            var ii = 60;
            var time = setInterval(function()
            {
                ii--;
                $('#dt').html(ii+"s");
                if(ii==0){
                    $('#getKeynewEmail').show();
                     $('#dt').hide();
                    clearInterval(time);
                }
            },1000)
        var newEmail = $('#ce-u-new_email').val();
        $.ajax({
            url:"{{url('home/user/personal/ajaxNewEmail')}}",
            type:"POST",
            data:{newEmail:newEmail,id:id},
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

    //单击保存隐藏输入框
    $('#ce-u-save').on('click', function()
    {
        sendEmail.style.display = 'none';
        emailWrap.style.display = 'block';
    })
    //单击取消隐藏输入框
    $('#ce-u-cancel').on('click', function()
    {
        sendEmail.style.display = 'none';
        emailWrap.style.display = 'block';
    })
</script>

                    <div id="telWrap" class="lineWrap">
                        <div class="item-right">
                            <a id="editMobile" href="javascript:void(0);" class="linkABlue modify">@if(session('master') -> phone)
                            <span id="phoneEdit"  >修改</span>
                            @else
                            <span id="phoneAdd"  >绑定</span>
                            @endif</a>
                        </div>
                        <!-- end if -->
                        <div class="item-left">手机号码</div>
                        <!--if-->

                        <!-- end if -->
                        <!--if-->
                        <div class="item-middle" id="telBind">
                            <span class="bold">@if(session('master') -> phone)
                            已绑定 <br>
                            可通过手机:{{session('master') -> phone}} 找回密码
                            @else
                            未绑定 <br>
                            绑定后可通过手机找回密码
                            @endif</span><br>
                            <span class="grayTip">
                            </span>
                        </div>
                        <!-- end if -->
                        <div class="clear"></div>
                    </div><br>
<script type="text/javascript">
$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
             }
            });
    window.onload = function()
    {
        $('#phoneAdd').on('click',function()
        {
            $('#bindTel-step1').show();
            $('#telWrap').hide();
        })
        $('#phonePassSave').on('click', function()
        {
            var verPhonePass = $('#ce-u-passwordNew-bindTel').val();
            $.ajax({
                url:"{{url('/home/user/personal/verPhonePass')}}",
                type:"POST",
                data:{verPhonePass:verPhonePass,id:id},
                success:function(data)
                {
                    if(data == 1)
                    {
                        $('#bindTel-step1').hide();
                        $('#bindTelWrap').show();
                    }
                    else if(data == 2)
                    {
                        alert('账号密码不正确');
                    }
                    else if(data == 3)
                    {
                        alert('账号密码不能为空');
                    }
                },
                error:function()
                {
                    alert('数据异常');
                }
            })
        })
        $('#phonePassCancel').on('click', function()
        {
            $('#bindTel-step1').hide();
            $('#telWrap').show();
        })
    }
</script>

                    <!-- 绑定手机，验证密码 -->
                    <div id="bindTel-step1" class="grayBorderT grayBorderB modify_content" style="display:none;">
                        <div class="setQuestion-titleWrap">
                            <span>绑定手机号（验证密码）</span>
                        </div>
                        <form class="setQuestion-bodyWrap" novalidate="novalidate">
                                <div class="lineWrap">
                                    <div class="leftWrap">
                                        <label class="leftLabel">账号密码</label>
                                    </div>
                                    <input type="password" value="" name="password" id="ce-u-passwordNew-bindTel" class="normalInput" maxlength="16">
                                </div>
                                <div class="lineWrap">
                                    <label class="fleft">&nbsp;</label>
                                    <a class="fullBtnBlue save_form fleft" id="phonePassSave">下一步</a>
                                    <a class="fullBtnGray cancel_form fleft" id="phonePassCancel">取消</a>
                                    <div class="clear"></div>
                                </div>
                                    <div class="clear"></div>
                        </form>
                    </div>
                    <div id="bindTelWrap" class="grayBorderT grayBorderB modify_content" style="display: none;">
                        <div class="bindTel-titleWrap">
                            <span>绑定手机号码</span>
                        </div>
                        <form class="bindTel-bodyWrap" novalidate="novalidate">
                            <div class="lineWrap">
                                <div class="leftWrap">
                                    <label class="leftLabel">手机号码</label>
                                </div>
                                <!-- <input type="text" data-key="kapkey" name="phone" id="ce-u-bind_tel" class='normalInput' /> -->
                                <div class="normalInput cycode-box show-cycode" id="cycode-box">
                                    <div class="cycode-selectbox">
                                        <span class="cycode-selected">
                                            <span class="ipt-cycode" id="cycode">+86</span>
                                            <i class="arrow-down"></i>
                                        </span>
                                        <input type="text" data-key="kapkey" name="phone" id="ce-u-bind_tel" maxlength="11">
                                    </div>
                                      </div>
                            </div>
                            <div class="lineWrap">
                                <div class="leftWrap">
                                    <label class="leftLabel">验证码</label>
                                </div>
                                <div class="normalInput bottom">
                                    <input type="text" name="kapkey" id="kapkeyEmail" class="kapkey" maxlength="6" autocomplete="off">
                                    <span class="form-line"></span>
                                    <a id="getKey-bindTel" data-value="6" href="javascript:void(0);" data-type="1" class="linkABlue invalidBtn get_kapkey">获取验证码</a>
                                    <!-- <a href="javascript:void(0);" class="linkABlue kapkey_requested" style="display:none;">已发送 <span class="interval_num" id="dt">60</span></a> -->
                                    <a style="position:relative;width:100px;height:45px;margin-left:30px;display:none;color:red;font-size:weight;border-radius:10%;" id="dt" type="button">60s</a>
                                </div>
                            </div>
                            <div class="lineWrap">
                                <label class="fleft">&nbsp;</label>
                                <a class="fullBtnBlue save_form fleft" id="ce-u-bindTelsave">保存</a>
                                <a class="fullBtnGray cancel_form fleft" id="ce-u-bindTelcancel">取消</a>
                                <div class="clear"></div>
                            </div>
                        </form>
                    </div>
<script type="text/javascript">

    $('#getKey-bindTel').on('click', function()
    {
        //定时器
            $('#getKey-bindTel').hide();
            $('#dt').show();
            var ii = 60;
            var time = setInterval(function()
            {
                ii--;
                $('#dt').html(ii+"s");
                if(ii==0){
                    $('#getKey-bindTel').show();
                     $('#dt').hide();
                    clearInterval(time);
                }
            },1000)
            //判断手机号是否为空
            var newPhone = $('#ce-u-bind_tel').val();
            if(newPhone=='')
            {
                $('#getKey-bindTel').show();
                $('#dt').hide();
                clearInterval(time);
                alert('请输入手机号');
                return;
            }
            //判断手机格式
            var reg = /^1\d{10}$/;
            var res = reg.test(newPhone);
            if(!res)
            {
                $('#getKey-bindTel').show();
                $('#dt').hide();
                clearInterval(time);
                alert('手机号格式不正确');
                return;
            }

            $.ajax({
                url:"{{ url('home/user/personal/verNewPhone')}}",
                type:"POST",
                data:{newPhone:newPhone,id:id},
                success:function(data)
                {
                    alert(data);
                },
                error:function()
                {
                    alert('数据异常');
                }
            })
    })
    $('#ce-u-bindTelsave').on('click', function()
    {
        $('#bindTelWrap').hide();
        $('#telWrap').show();
    })
    $('#ce-u-bindTelcancel').on('click',function()
    {
        $('#bindTelWrap').hide();
        $('#telWrap').show();
    })
 </script>



                    <!-- 修改手机 验证密码 -->
                    <div id="setTelCheckPass" class="grayBorderT grayBorderB modify_content" style="display:none;">
                        <div class="setQuestion-titleWrap">
                            <span>修改手机号（验证原手机）</span>
                        </div>
                        <form class="setQuestion-bodyWrap" novalidate="novalidate">
                                <div class="lineWrap">
                                    <div class="leftWrap">
                                        <label class="leftLabel">原手机号</label>
                                    </div>
                                    <input type="text" value="" data-key="kapkey" name="bindPhone" id="ce-u-cTelOld" class="normalInput" maxlength="11">
                                </div>
                                <div class="lineWrap">
                                    <div class="leftWrap">
                                        <label class="leftLabel">验证码</label>
                                    </div>
                                    <div class="normalInput bottom">
                                        <input type="text" name="kapkey" id="kapkeyTelOld" class="kapkey" maxlength="6" autocomplete="off">
                                        <span class="form-line"></span>
                                        <a id="getKey-activeTelOld" data-value="23" data-action="bindPhone" href="javascript:void(0);" data-type="1" class="linkABlue invalidBtn get_kapkey">获取验证码</a>
                                        <a href="javascript:void(0);" class="linkABlue kapkey_requested" style="display:none;">已发送 <span class="interval_num">60</span></a>
                                    </div>
                                    <div clear="clear"></div>
                                </div>
                                <div class="lineWrap">
                                    <label class="fleft">&nbsp;</label>
                                    <a class="fullBtnBlue save_form fleft" id="setTelCheckPassSave">下一步</a>
                                    <a class="fullBtnGray cancel_form fleft" id="setTelCheckPassCancel">取消</a>
                                    <div class="clear"></div>
                                </div>
                                    <div class="clear"></div>
                        </form>
                    </div>
                    <div id="changeTelWrap-activeNew" class="grayBorderT grayBorderB modify_content" style="display:none;">
                        <div class="cTel-titleWrap">
                            <span>输入新手机号</span>
                        </div>
                        <form class="cEmail-bodyWrap" novalidate="novalidate">
                            <div class="lineWrap">
                                <div class="leftWrap">
                                    <label class="leftLabel">新手机号码</label>
                                </div>
                                <input type="text" value="" data-key="kapkey" name="phone" id="ce-u-cTelNew" class="normalInput" maxlength="11">
                            </div>
                            <div class="lineWrap">
                                <div class="leftWrap">
                                    <label class="leftLabel">验证码</label>
                                </div>
                                <div class="normalInput bottom">
                                    <input type="text" name="kapkey" id="kapkeyTelNew" class="kapkey" maxlength="6" autocomplete="off">
                                    <span class="form-line"></span>
                                    <a id="getKey-activeTelNew" data-value="14" href="javascript:void(0);" data-type="1" class="linkABlue invalidBtn get_kapkey">获取验证码</a>
                                    <a href="javascript:void(0);" class="linkABlue kapkey_requested" style="display:none;">已发送 <span class="interval_num">60</span></a>
                                </div>
                                <div clear="clear"></div>
                            </div>
                            <div class="lineWrap">
                                <label class="fleft">&nbsp;</label>
                                <a class="fullBtnBlue save_form fleft" id="ce-u-telsaveNew">保存</a>
                                <a class="fullBtnGray cancel_form fleft" id="ce-u-telcancelNew">取消</a>
                                <div class="clear"></div>
                            </div>
                        </form>
                    </div>
                    <!-- <div id="questionWrap" class="lineWrap">
                        <div class="item-left">密保问题</div>


                            <div id="questionSetTip" class="item-right">
                                <a id="setSafe" href="javascript:void(0);" class="linkABlue modify">设置</a>
                            </div>
                            <div id="questionUnSettedTip" class="item-middle">
                                <span id="tip" class="bold">未设置</span><br> <span class="grayTip">设置密保可大幅提升账号安全</span>
                            </div>

                        <div class="clear"></div>
                    </div> -->
                    <!-- 设置密保 -->
                   <!--  <div id="setQuestion-stepOne" class="grayBorderT grayBorderB modify_content" style="display:none;">
                        <div class="setQuestion-titleWrap">
                            <span>设置密保（验证密码）</span>
                        </div>
                        <form class="setQuestion-bodyWrap" novalidate="novalidate">
                                <div class="lineWrap">
                                    <div class="leftWrap">
                                        <label class="leftLabel">账号密码</label>
                                    </div>
                                    <input type="password" value="" name="password" id="setQuestion_pwd" class="normalInput" maxlength="16">
                                </div>

                                <div class="lineWrap">
                                    <label class="fleft">&nbsp;</label>
                                    <a class="fullBtnBlue save_form fleft" id="setQuestionSave">下一步</a>
                                    <a class="fullBtnGray cancel_form fleft" id="setQuestionCancel">取消</a>
                                    <div class="clear"></div>
                                </div>
                                    <div class="clear"></div>
                        </form>
                    </div> -->
                    <!-- <div id="setQuestion-stepTwo" class="grayBorderT grayBorderB modify_content" style="display:none;">
                        <div class="setQuestion-titleWrap">
                            <span>设置密保</span>
                        </div>
                        <form class="setQuestion-bodyWrap" novalidate="novalidate">
                                <div class="lineWrap">
                                    <div class="leftWrap">
                                        <label class="leftLabel">问题一：</label>
                                    </div>
                                    <button type="button" class="dropdown" data-name="questionCode1" id="questionCode1" style="position: relative;"><span>请选择密保问题</span><i class="dropdown_arrow" style="top:25px; right:10px"></i><input type="hidden" name="questionCode1"></button>
                                </div>
                                <div class="lineWrap">
                                    <div class="leftWrap">
                                        <label class="leftLabel">答案：</label>
                                    </div>
                                    <input type="text" value="" maxlength="32" name="answer1" id="qanswer1" class="normalInput">
                                </div>
                                <div class="lineWrap">
                                    <div class="leftWrap">
                                        <label class="leftLabel">问题二：</label>
                                    </div>
                                    <button type="button" class="dropdown" data-name="questionCode2" id="questionCode2" style="position: relative;"><span>请选择密保问题</span><i class="dropdown_arrow" style="top:25px; right:10px"></i><input type="hidden" name="questionCode2"></button>

                                </div>
                                <div class="lineWrap">
                                    <div class="leftWrap">
                                        <label class="leftLabel">答案：</label>
                                    </div>
                                    <input type="text" value="" maxlength="32" name="answer2" id="qanswer2" class="normalInput">
                                </div>
                                <div class="lineWrap">
                                    <label class="fleft">&nbsp;</label>
                                    <a class="fullBtnBlue save_form fleft" id="ce-u-setQuetionsave">保存</a>
                                    <a class="fullBtnGray cancel_form fleft" id="ce-u-setQuetioncancel">取消</a>
                                    <div class="clear"></div>
                                </div>
                        </form>
                    </div> -->
                    <!-- 修改密保 -->
                    <!-- <div id="changeQuestionWrap" class="grayBorderT grayBorderB modify_content" style="display:none;">
                        <div class="cQuestion-titleWrap">
                            <span>修改密保(验证)</span>
                        </div>
                        <form class="cQuestion-bodyWrap" novalidate="novalidate">
                            <div class="questionlineWrap">
                                <div class="leftWrap">
                                    <label class="leftLabel">问题一：</label>
                                </div>
                                <span id="cqone" class="normalInput current_email"></span>
                                <input type="hidden" name="questionCode1" value="">
                            </div>
                            <div class="lineWrap">
                                <div class="leftWrap">
                                    <label class="leftLabel">答案：</label>
                                </div>
                                <input type="text" value="" maxlength="32" name="answer1" id="answer1" class="normalInput">
                            </div>
                            <div class="questionlineWrap">
                                <div class="leftWrap">
                                    <label class="leftLabel">问题二：</label>
                                </div>
                                <span id="cqtwo" class="normalInput current_email"></span>
                                <input type="hidden" name="questionCode2" value="">
                            </div>
                            <div class="lineWrap">
                                <div class="leftWrap">
                                    <label class="leftLabel">答案：</label>
                                </div>
                                <input type="text" value="" maxlength="32" name="answer2" id="answer2" class="normalInput">
                            </div>
                            <div class="lineWrap">
                                <label class="fleft">&nbsp;</label>
                                <a class="fullBtnBlue save_form fleft" id="ce-u-cquestionsave">下一步</a>
                                <a class="fullBtnGray cancel_form fleft" id="ce-u-cquestioncansel">取消</a>
                                <div class="clear"></div>
                            </div>
                        </form>
                    </div>
                    <div id="resetQuestion" class="grayBorderT grayBorderB modify_content" style="display:none;">
                        <div class="cQuestion-titleWrap">
                            <span>修改密保(设置新的密保问答)</span>
                        </div>
                        <form class="cQuestion-bodyWrap" novalidate="novalidate">
                            <div class="lineWrap">
                                <div class="leftWrap">
                                    <label class="leftLabel">问题一:</label>
                                </div>
                                <button type="button" class="dropdown" data-name="questionCode1" id="questionCode3" style="position: relative;"><span>请选择密保问题</span><i class="dropdown_arrow" style="top:25px; right:10px"></i><input type="hidden" name="questionCode1"></button>
                            </div>
                            <div class="lineWrap">
                                <div class="leftWrap">
                                    <label class="leftLabel">答案：</label>
                                </div>
                                <input type="text" value="" maxlength="32" name="answer1" id="resetanswer1" class="normalInput">
                            </div>
                            <div class="lineWrap">
                                <div class="leftWrap">
                                    <label class="leftLabel">问题二:</label>
                                </div>
                                <button type="button" class="dropdown" data-name="questionCode2" id="questionCode4" style="position: relative;"><span>请选择密保问题</span><i class="dropdown_arrow" style="top:25px; right:10px"></i><input type="hidden" name="questionCode2"></button>
                            </div>
                            <div class="lineWrap">
                                <div class="leftWrap">
                                    <label class="leftLabel">答案：</label>
                                </div>
                                <input type="text" value="" maxlength="32" name="answer2" id="resetanswer2" class="normalInput">
                            </div>
                            <div class="lineWrap">
                                <label class="fleft">&nbsp;</label>
                                <a class="fullBtnBlue save_form fleft" id="ce-u-resetQuetionsave">保存</a>
                                <a class="fullBtnGray cancel_form fleft" id="ce-u-resetQuetioncancel">取消</a>
                                <div class="clear"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->

            <!-- <form id="mainForm" enctype="application/x-www-form-urlencoded">
                <input type="text" value="" name="username" id="username" class='normalInput' maxlength='32' placeholder='手机号/ Flyme 账号'/>
                <input type="password" value="" name="password" id="password" class='normalInput' maxlength='16' placeholder='密码'/>
                <div class='rememberField'>
                    <span><input name="remember" id="remember" type="checkbox" value="1"/></span>
                    <label for="remember" tabindex="0">记住登录状态</label>
                    <a id="forgetpwd" href="forgetpwd.jsp" class='linkABlue'>忘记密码?</a>
                </div>
                <a id="login" class='fullBtnBlue'>登录</a>
                <div class='transferField'>
                    <a name="btnArea" id="transfer" href="bbsUserToFlyme.jsp" class='linkAGray'>社区账号转换为 Flyme 账号</a>
                </div>
            </form> -->
<!--         </div>
    </div>
    <input type="hidden" name="form_resubmit_token_key" id="form_resubmit_token_key" value="9KZSZNNLSA5ECNXJD7G35LJVYWJWM25V">
    <ul style="display:none;" id="mail" class="bRadius2 boxShadow10"><li data-mail="@qq.com" class="item">@qq.com</li><li data-mail="@sina.com" class="item">@sina.com</li><li data-mail="@126.com" class="item">@126.com</li><li data-mail="@163.com" class="item">@163.com</li><li data-mail="@gmail.com" class="item">@gmail.com</li></ul>

 -->
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
<div id="wechatPic"></div>



    <ul class="dropdown_menu" data-target="#questionCode1" style="display: none; position: absolute; z-index: 999;">

    <li data-text="您的出生地是？" data-value="1">您的出生地是？</li>

    <li data-text="您母亲的姓名是？" data-value="2">您母亲的姓名是？</li>

    <li data-text="您父亲的姓名是？" data-value="3">您父亲的姓名是？</li>

    <li data-text="您配偶的姓名是？" data-value="4">您配偶的姓名是？</li>

    <li data-text="您的小学校名是？" data-value="5">您的小学校名是？</li>

    <li data-text="您母亲的生日是？" data-value="6">您母亲的生日是？</li>

    <li data-text="您父亲的生日是？" data-value="7">您父亲的生日是？</li>

    <li data-text="您配偶的生日是？" data-value="8">您配偶的生日是？</li>

    <li data-text="您初中班主任的名字是？" data-value="9">您初中班主任的名字是？</li>

    <li data-text="您小时候的绰号是什么？" data-value="10">您小时候的绰号是什么？</li>

    <li data-text="您小时候最好的朋友是？" data-value="11">您小时候最好的朋友是？</li>

    </ul>
    <ul class="dropdown_menu" data-target="#questionCode2" style="display: none; position: absolute; z-index: 999;">

    <li data-text="您的出生地是？" data-value="1">您的出生地是？</li>

    <li data-text="您母亲的姓名是？" data-value="2">您母亲的姓名是？</li>

    <li data-text="您父亲的姓名是？" data-value="3">您父亲的姓名是？</li>

    <li data-text="您配偶的姓名是？" data-value="4">您配偶的姓名是？</li>

    <li data-text="您的小学校名是？" data-value="5">您的小学校名是？</li>

    <li data-text="您母亲的生日是？" data-value="6">您母亲的生日是？</li>

    <li data-text="您父亲的生日是？" data-value="7">您父亲的生日是？</li>

    <li data-text="您配偶的生日是？" data-value="8">您配偶的生日是？</li>

    <li data-text="您初中班主任的名字是？" data-value="9">您初中班主任的名字是？</li>

    <li data-text="您小时候的绰号是什么？" data-value="10">您小时候的绰号是什么？</li>

    <li data-text="您小时候最好的朋友是？" data-value="11">您小时候最好的朋友是？</li>

    </ul>
    <ul class="dropdown_menu" data-target="#questionCode3" style="display: none; position: absolute; z-index: 999;">

    <li data-text="您的出生地是？" data-value="1">您的出生地是？</li>

    <li data-text="您母亲的姓名是？" data-value="2">您母亲的姓名是？</li>

    <li data-text="您父亲的姓名是？" data-value="3">您父亲的姓名是？</li>

    <li data-text="您配偶的姓名是？" data-value="4">您配偶的姓名是？</li>

    <li data-text="您的小学校名是？" data-value="5">您的小学校名是？</li>

    <li data-text="您母亲的生日是？" data-value="6">您母亲的生日是？</li>

    <li data-text="您父亲的生日是？" data-value="7">您父亲的生日是？</li>

    <li data-text="您配偶的生日是？" data-value="8">您配偶的生日是？</li>

    <li data-text="您初中班主任的名字是？" data-value="9">您初中班主任的名字是？</li>

    <li data-text="您小时候的绰号是什么？" data-value="10">您小时候的绰号是什么？</li>

    <li data-text="您小时候最好的朋友是？" data-value="11">您小时候最好的朋友是？</li>

    </ul>
    <ul class="dropdown_menu" data-target="#questionCode4" style="display: none; position: absolute; z-index: 999;">

    <li data-text="您的出生地是？" data-value="1">您的出生地是？</li>

    <li data-text="您母亲的姓名是？" data-value="2">您母亲的姓名是？</li>

    <li data-text="您父亲的姓名是？" data-value="3">您父亲的姓名是？</li>

    <li data-text="您配偶的姓名是？" data-value="4">您配偶的姓名是？</li>

    <li data-text="您的小学校名是？" data-value="5">您的小学校名是？</li>

    <li data-text="您母亲的生日是？" data-value="6">您母亲的生日是？</li>

    <li data-text="您父亲的生日是？" data-value="7">您父亲的生日是？</li>

    <li data-text="您配偶的生日是？" data-value="8">您配偶的生日是？</li>

    <li data-text="您初中班主任的名字是？" data-value="9">您初中班主任的名字是？</li>

    <li data-text="您小时候的绰号是什么？" data-value="10">您小时候的绰号是什么？</li>

    <li data-text="您小时候最好的朋友是？" data-value="11">您小时候最好的朋友是？</li>

    </ul>

</body></html>