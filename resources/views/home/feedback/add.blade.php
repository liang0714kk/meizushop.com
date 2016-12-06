
@extends('home.layout')

@section('content')
<link rel="stylesheet" href="{{ url('/hm/css/site-base.css') }}">
<link rel="stylesheet" href="{{ url('/hm/css/aio.css') }}">
<div class="store-wrap">
    <div class="crumbs">
        <a href="http://store.meizu.com/">首页&gt;</a>
        <a href="http://me.meizu.com/member/index">我的商城&gt;</a>
        <a href="http://me.meizu.com/member/advice/index" class="active">建议反馈</a>
    </div>
    <div class="main clearfix">
    <div class="left-nav f-fl">
        <div class="nav-main">
            <a href="javascript:;" class="type-title"><i class=" "></i>订单中心</a>
            <a href="http://ordercenter.meizu.com/list/index.html" class="ml ">我的订单</a>
            <a href="http://me.meizu.com/member/repo/index" class="ml ">我的回购单</a>
            <a href="http://insurance.meizu.com/list/insurance.html" class="ml ">我的意外保</a>
            <a href="javascript:;" class="type-title"><i class=""></i>个人中心</a>
            <a href="http://me.meizu.com/member/address/index" class="ml ">地址管理</a>
            <a href="http://me.meizu.com/member/favorite/index" class="ml ">我的收藏</a>
            <a href="http://me.meizu.com/member/message/index" class="ml ">消息提醒</a>
            <a href="http://me.meizu.com/member/advice/index" class="ml active">建议反馈</a>
            <a href="javascript:;" class="type-title"><i class="r"></i>资产中心</a>
            <a href="http://me.meizu.com/member/coupon/index" class="ml ">我的优惠券</a>
            <a href="http://me.meizu.com/member/redenvelop/index" class="ml ">我的红包</a>
            <a href="http://me.meizu.com/member/repo_ticket/index" class="ml ">我的回购券</a>
            <a href="javascript:;" class="type-title"><i class=""></i>服务中心</a>
            <a href="http://store.meizu.com/member/returned/index" class="ml" style="width: 105px">退款/退换货跟踪</a>
            <a href="http://me.meizu.com/member/service/insurance" class="ml ">意外保</a>
            <a href="http://me.meizu.com/member/service/recovery" class="ml ">以旧换新</a>
        </div>
    </div>
        <div class="right-content f-fr">
            <div class="suggest-main">
                <img src="{{ url('/hm/images/advice-banner.jpg') }}" alt="建议反馈">
                <div class="kf">
                    <p>如果您的问题急需处理，请咨询我们<br>  24小时全国服务热线或在线客服！</p>
                    <p class="text">24小时全国服务热线</p>
                    <p class="tel">400-788-3333</p>
                    <a class="online" href="http://live-i.meizu.com/live800/chatClient/chatbox.jsp?companyID=8957&amp;configID=4&amp;enterurl=http%3A%2F%2Fstore.meizu.com%2F&amp;pagereferrer=http%3A%2F%2Fwww.meizu.com%2F&amp;info=&amp;k=1" target="_blank">
                        <i class="icon"><img class="lineKf" src="{{ url('/hm/images/kfbg.jpg') }}"></i><i class="text">24小时在线客服</i></a>
                </div>
                <!-- <p class="Big-title">您的建议反馈是我们改进的最大动力</p> -->
                <div class="content">
                    <div class="type">
                        <span class="title">您想对哪一方面提出建议</span>
                        <div class="">
                            
                            <select id="problem" class="select varify" name="classical">
                                <option data-value="0" style="display:none"></option>
                                <option data-value="1">购物体验</option>
                                <option data-value="6">支付流程</option>
                                <option data-value="2">活动建议</option>
                                <option data-value="7">商品建议</option>
                                <option data-value="5">其他建议</option>
                                <!-- <option data-value="3">商品质量</option>
                               <option data-value="4">售后服务</option> -->
                            </select>
                        </div>
                    </div>
                    <div  class="question">
                        <span class="title">请详细描述您的问题</span>
                        <textarea id="suggest" class="area varify "></textarea>
                    </div>
                    <div  class="email">
                        <span class="title">邮箱（选填）</span>
                        <input id="email" class="self-email varify" maxlength="30" type="text">
                    </div>
                	<!-- <input type = "hidden" name = 'uid' value="session('master' -> id)"> -->
                	<!-- <input type = "hidden" name = 'id' value="session('master' -> id)"> -->
                    {{ csrf_field() }}
                    <label><button class="submit-btn">提交</button></label>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- <script type="text/javascript" src="{{url('/hm/js/memberCommon.js') }}"></script> -->
<!-- <script type="text/javascript" src="{{url('/hm/js/suggest.js') }}"></script> -->
<script type="text/javascript" src="{{url('/hm/js/jquery-1.8.3.min.js') }}"></script>

<script type="text/javascript">

window.onload = function()
{

    $.ajaxSetup({
        headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }
                 });
        //单击提交数据
        $('.submit-btn').on('click', function()
        {	
            //获取当前对象
            
            var uid = 5;
            // alert (uid);
            var problem = $('#problem option:selected').val();
            var suggest = $('#suggest').val();
            var email = $('#email').val();
            
           
            $.ajax({
                type:"POST",
                url:"{{ url('/home/feedback/ajaxFeedback') }}",
                data:{uid:uid,problem:problem,suggest:suggest,email:email},
                success:function(data)
                {
                    if(data == 1)
                    {
						alert('反馈成功');
						parent.location.href="{{ url('/home/index/index') }}";
                    }
                    else if(data == 2)
                    {
                    	alert('抱歉');
                    }
                },
                error:function()
                {
                    alert('数据异常');
                }
            });
        });
    }
 </script>
@endsection