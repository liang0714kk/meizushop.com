@extends('home.layout')
@section('content')

<div class="content-wrapper">


        @if(session('info'))
        <div id="jg" class="callout callout-info">
            <p>{{ session('info')}}</p>
        </div>
        @endif
 
        <div class="order">
        <div class="mzcontainer">
            <div class="order-header">
            <form action="{{ url('./home/cart/pay')}}" method="POST">
                <div class="order-header-title">
                    购物车
                </div>
                <ul class="order-header-bread">
                    <li class="order-header-bread-block active">购物车</li>
                </ul>
            </div>
			<center>	<h1>您的购物车是空的，您可以</h1><br>
	<img src="{{ url('/order/cart.jpg')}}" alt=""><br>
	<a href="{{ url('/home/index/index')}}"><h3>选购商品</h3></a>
	<a href="{{ url('/home/ordercenter/index')}}"><h3>查看订单</h3></a>
			</center>

@endsection