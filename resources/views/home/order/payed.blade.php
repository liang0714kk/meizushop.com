@extends('home.layout')
@section('content')

 <div class="payment">
        <div class="mzcontainer">
            <div class="order-header">
                <div class="order-header-title">
                    在线支付
                </div>
                <ul class="order-header-bread">
                    <li class="order-header-bread-block active">确认订单</li>
                    <li class="order-header-bread-block active">在线支付</li>
                    <li class="order-header-bread-block active">完成</li>
                </ul>
            </div>
            <div class="payment-body">
                    <div class="payment-info clearfix">
                        <i class="order-font payment-success"></i>
                        <div class="payment-info-content">
                            <div class="payment-info-title">
                                支付成功，已付金额
                                <span class="payment-info-total">{{ $data2 -> total}}</span>
                            </div>
                            <p class="payment-info-tips">订单号：{{$data2 -> no}}&nbsp;&nbsp;&nbsp;&nbsp;</p>

                            <div class="payment-info-bottom">
                                    <p class="payment-info-row">
                                        <span class="payment-info-label">商品：</span>
                                        <span class="payment-info-product">{{ $data2 -> goodname}} {{ $data2 -> net}} {{ $data2 -> color}} {{ $data2 -> rom}} X {{$data2 -> num}}
                                            &nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </p>
                                <p class="payment-info-row">
                                    <span class="payment-info-label">收货地址：</span>
                                    <span> {{ $data2 -> adder}} {{ $data2 -> name}}(收) {{ $data2 -> phone}}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <a class="mz-btn warning xl payment-tools-submit" style="float:right;margin-right: 30px;margin-bottom:10px;"href="{{url('/home/index/index')}}" >继续浏览</a>
                    </div>


@endsection