@extends('home.layout')
@section('content')
<!--下面是模板标签，不可删除-->
<link rel="stylesheet" href="{{ url('/hm/css/main-3951eee.css') }}"/>
<main class="wrapper" id="main">
    <div class="container">
        <section class="crumbs clearfix">
            <a href="{{url('/home/index/index')}}">首页</a> &nbsp;&gt;&nbsp;
            <span class="crumbs-level" id="crumbsLevel">全部商品</span>
        </section>

        <section class="selector" id="selector">
            <!--  分类部分 start -->
           <div class="sl-category" id="slCategory">
            <div class="sl-line-wrap">
                <div class="mod-key"><strong>分类：</strong></div>
                <div class="mod-value">
                    <div class="mod-value-list">
                        <ul>
                        @foreach($goodsBig as $k => $v)
                        <li class="">
                            <a href="{{url('/home/index/list')}}/{{$v -> id }}" title="{{$v -> name}}">
                            {{$v -> name}}
                            </a>
                        </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
           </div>
        </section>
<!-- 搜索部分 -->
<section class="filter clearfix" id="filter">
    <div class="filter-order" id="J_filterOrder">
    <form action="{{ url('/home/index/list') }}/{{session('classId') }}" method="get">
        <input value="{{ $request['keywords'] or '' }}" name="keywords" type="text"/>
        <input type="submit" value="搜索"/>
    </form>
</section>
<!-- 主体商品区 -->
<section class="goods-list" id="goodsList">
        <ul class="goods-list-wrap clearfix" id="goodsListWrap">
        @foreach($detailsList as $k => $v)
                <li class="gl-item">
                    <dl class="gl-item-wrap">
                        <dd class="mod-pic">
                            <a>
                    <img width="220" height="220" src="{{url('/uploads/goods/')}}/{{$v -> photo}}"/>
                            </a>
                        </dd>
                        <dd class="mod-name">
                    <a target="_blank" href="{{url('/home/gdetail/')}}{{$v -> pid}}/{{$v -> name}}" title="{{$v -> name}}">
                            {{$v -> name}}
                            </a>
                        </dd>
                        <dd class="mod-price">
                                <span>￥</span>
                                <span class="vm-price">{{ $v -> price }}</span>
                        </dd>
                    </dl>
                </li>
        @endforeach
        </ul>
</section>
<section class="empty clearfix" id="empty" style="display:none;">
    <div class="empty-bd">
        <div class="empty-bd-pic"></div>
        <div class="empty-bd-info">
            <h4 class="yahei">抱歉没有找到相关商品</h4>
            <p>建议您：<br>
                1.适当减少筛选条件<br>
                2.尝试其他关键字
            </p>
        </div>
    </div>
</section>
 {{ $detailsList ->render() }}
{!! $detailsList -> appends($request) -> render() !!}

<!-- 热品推荐区 -->
    <section class="recommend" id="recommend">
        <div class="recommend-hd">
            <h2 class="mod-title">为您推荐</h2>
            <div class="mod-control" id="recommendDirectionNav">
                <a class="vm-prev flex-prev flex-disabled">
                    <i> </i>
                </a>
                <a class="vm-next flex-next">
                    <i></i>
                </a>
            </div>
        </div>
        <div class="recommend-slider" id="J_recommendSlider">

        <div class="flex-viewport" style="overflow: hidden; position: relative;">
            <ul class="recommend-slider-wrap" style="width: 2000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                @foreach($hotList as $k => $v )
                <li class="rs-item" style="width: 245.6px; margin-right: 5px; float: left; display: block;">
                    <a class="rs-item-wrap"  href="{{url('/home/gdetail/')}}{{$v -> pid}}/{{$v -> name}}" target="_blank">
                        <div class="mod-pic">
                            <img src="{{url('/uploads/goods/')}}/{{ $v -> photo }}" width="180" height="180" draggable="false">
                        </div>
                        <div class="mod-desc">
                            <h4 class="vm-title">{{ $v -> name }}</h4>
                            <h6 class="vm-subtitle">{{ $v -> explain }}</h6>
                            <p class="vm-price">
                                <span>¥</span><span class="vm-price-text">{{ $v -> price }}</span>
                            </p>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        </div>
    </section>
</main>

<script src="{{url('/hm/js/pkg-list-f679883.js')}}"></script>
  <!-- 反馈建议   -->
<div class="site-gotop" id="siteGotop" style="display: block;">
<a class="gotop-suggest" title="建议反馈"
href="@if(session('master'))
 {{ url('/home/feedback/add') }}
 @else
 {{url('/home/user/login')}}
 @endif" target="_blank"></a>
<div class="gotop-arrow" title="回到顶部"></div>
</div>
@endsection