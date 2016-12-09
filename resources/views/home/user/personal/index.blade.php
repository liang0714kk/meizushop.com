@extends('home.layout')
@section('content')
<link rel="stylesheet" href="{{ url('/hm/css/site-base.css') }}">
<link rel="stylesheet" href="{{ url('/hm/css/aio.css') }}">
<div class="store-wrap">
    <div class="crumbs">
        <a href="{{ url('/home/index/index') }}">首页&gt;</a>
        <a href="{{ url('/home/user/personal/index') }}" class="active">我的商城</a>
    </div>
    <div class="main clearfix">
    <div class="left-nav f-fl">
        <div class="nav-main">
            <a href="{{url('/home/user/personal/index')}}" class="type-title"><i class=""></i>个人中心</a>
            <a href="{{ url('/home/user/personal/edit') }}" class="ml ">个人信息</a>
            <a href="{{ url('/home/ordercenter/index') }}" class="ml ">我的订单</a>
            <a href="{{ url('/home/ordercenter/address') }}" class="ml ">地址管理</a>
            <a href="{{ url('/home/feedback/add') }}" class="ml ">建议反馈</a>
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
                            <a class="detail f-fr" href="{{url('/home/ordercenter/index')}}">查看全部订单 &gt;</a>
                        </div>
                        <div class="content">
                            <div class="waitPay clearfix">
                                <span class="f-fl cercl">
                                <i class="iconfont icon-waitingPay"></i>
                                </span>
                                <div class="text f-fl">
                                    <p>待付款订单：<span class="num">{{$noPaycount}}</span></p>
                                    <a class="detail" href="{{url('/home/ordercenter/nopay')}}">查看全部待付款订单 &gt;</a>
                                </div>
                            </div>
                            <div class="waitDeliver clearfix">
                                <span class="f-fl cercl">
                                <i class="iconfont icon-waitingDeliver"></i>
                                </span>
                                <div class="text f-fl">
                                    <p>待发货订单：<span class="num">{{$noDelivercount}}</span></p>
                                    <a class="detail" href="{{url('/home/ordercenter/nodeliver')}}">查看全部待发货订单 &gt; </a>
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
@endsection