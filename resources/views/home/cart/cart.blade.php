@extends('home.layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
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


            <div class="mzcontainer order-product">
                <div class="order-product-title">购物车信息</div>
                <div class="order-product-list" id="orderProductList">
                
                        {{ csrf_field()}}
                         
                <table cellpadding="0" cellspacing="0">
                <thead>
               	 <tr>
                    <th class="order-product-table-num"></th>
                	<th class="order-product-table-name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;商品名</th>
                	<th class="order-product-table-price">单价</th>
                	<th class="order-product-table-num">数量</th>
                	<th class="order-product-table-total">小计</th>
                	<th class="order-product-table-express">操作</th></tr>
                	</thead>
                	<tbody>
                    @foreach($data as $v)
                	<tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="checked" class="checked" value=""></td>
                	<td class="order-product-table-name"><img class="order-product-image" src="{{url('/uploads/goods/')}}/{{ $v -> photo}}"><div class="order-product-name"><a target="_blank" class="order-product-link" href="http://detail.meizu.com/item/meilan_u10.html">{{ $v -> name}}<br>{{ $v -> net}} {{ $v -> color}} {{ $v -> rom}}</a></div></td>
                	<td class="order-product-table-price"><p></p><span class="order-product-price">&nbsp;&nbsp;{{$v -> price}}</span></td>
                    <td class="order-product-table-num">{{$v -> number}}</td>
                	<td id="{{ $v -> gid}}" class="order-product-table-total"><p id="money" class="order-product-price red">{{($v -> price) *($v -> number) }}</p></td>
                    <td class="order-product-table-express" rowspan="1"><a href=""></a><br><a href="{{ url('home/cart/delete')}}/{{ $v -> gid}}">删除</a></td>
                	</tr>
                    @endforeach
                	</tbody>
                	</table>

                         <input type="hidden" name="num" style="border:0;BACKGROUND-COLOR: transparent;color:red" value="{{ $v -> number }}">
                         <input type="hidden" name="gid" style="border:0;BACKGROUND-COLOR: transparent;color:red" value="">

            <div class="order-total clearfix">
                <div class="order-total-content">
                    <div class="order-total-line"></div>
                    <div class="order-total-row">
                        应付：
                        <div class="order-total-price total"></div>
                        <input type="hidden" name="total" style="border:0;BACKGROUND-COLOR: transparent;color:red" value="">
                    </div>
                    <div class="order-total-row order-total-valid-row clearfix">
                        <button class="mz-btn success" id="submitForm">立即支付</button>
                    </div>
                    <div class="order-total-row order-total-row-tips" id="totalTips"></div>
                </div>

				</form>
            </div>
        </div>
    </div>
<script type="text/javascript" src="{{url('/hm/js/jquery-1.8.3.min.js')}}"></script>
<script type="text/javascript">

window.onload = function()
{
    //设置定时器 淡出
    setInterval(function()
    {
        $("#jg").fadeOut('1000');
    },1000);

    
    // 计算总金额
        
    var checked = $('.checked');
    checked.each(function(index, el) {
        $(this).on('click', function(){

        var total = $(this).parent('td').next('td').next('td').next('td').next('td').children('p').html();
        var gid = $(this).parent('td').next('td').next('td').next('td').next('td').attr('id');
        var num = $(this).parent('td').next('td').next('td').next('td').html();
        $('.order-total-price').html(total);
        $("input[name='total']").attr('value', total);
        $("input[name='gid']").attr('value', gid);
        $("input[name='num']").attr('value', num);
        });
    });   


}
</script>
@endsection
