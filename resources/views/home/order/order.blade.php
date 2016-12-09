@extends('home.layout')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
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
            <form action="{{ url('./home/order/addorder')}}" method="POST">
                <div class="order-header-title">
                    确认订单
                </div>
                <ul class="order-header-bread">
                    <li class="order-header-bread-block active">购物车</li>
                    <li class="order-header-bread-block active">确认订单</li>
                    <li class="order-header-bread-block">在线支付</li>
                    <li class="order-header-bread-block">完成</li>
                </ul>
            </div>

            <div class="order-address" id="addressModule">
                <div class="order-address-title">
                    收货人信息
                    <div class="order-address-title-tips" id="orderAddressHasOldTips">
                        <i class="order-address-tips-icon"></i>因配送地址库升级，部分地址需升级后方可使用！
                    </div>
                </div>
                <ul class="order-address-list clearfix" id="addressList" style="height: 174px;">
                @foreach($adder as $adder)
                <li id="adder" class="order-address-checkbox order-address-checkbox2">
                <div class="order-address-checkbox-top">
                    <div class="order-address-checkbox-name" title="1234">{{$adder ->name }}</div>
                    <div class="order-address-checkbox-phone">{{$adder -> phone}}</div>
                </div>
                <div class="order-address-checkbox-content">{{ $adder -> adder}}</div>
                <div class="order-address-checkbox-tick"></div>
                <div class="order-address-checkbox-ctrl">
                </div></li>
                @endforeach
                <li id="add-newadder" class="order-address-checkbox add"><div class="order-address-add-icon"></div><div class="order-address-add-text">添加新地址</div></li>
               <li id="newadder-add-block" class="order-address-checkbox add" style="display:none;"> <div class="main">
                        <div class="content">
                            <div class="row namePhone clearfix">
                                <div class="f-fl addressName">
                                    <span>收货人姓名<i class="mark red">*</i></span>
                                    <input class="varify" name="add-name" type="text" placeholder="长度不超过12个字" maxlength="12">
                                </div>
                                <div class="f-fl addressPhone">
                                    <span>收货人电话<i class="mark red">*</i>
                                    <input id="phone" name="add-phone" class="varify" type="text" placeholder="请输入11位手机号" maxlength="11"></span>
                                </div>
                            </div>
                            <div class="row  receverAddress">
                                <span >收货人地址<i class="mark red">*</i></span>
                                    <select id="p" name="p">

                                     </select>


                                    <select id='c' name="c">

                                     </select>
                                     <select id='d' name="d">

                                     </select>

                                </div>
                            </div>
                            <div class="row  detailAddress">
                                <span>详细地址<i class="mark red">&nbsp;&nbsp;&nbsp;*</i></span>
                                <input id="detailAddress" name="add-address" class="varify" type="text" placeholder="请输入详细地址" maxlength="50">
                            </div>
                            <div class="opreat">
                                <label for="default">
                                    <input type="radio" name="isDefault" value="1" >设为默认
                                </label>
                                <label for="default">
                                    <input type="radio" name="isDefault" value="0" checked="checked">不设为默认
                                </label>
                                <a id="save-adder" class="saveAddress">保存</a>
                            </div>
                        </div>
                    </div>
                <div class="order-address-bottom">
                </div>
            </div>
</li></ul>
<input type="hidden" name='name' value="">
<input type="hidden" name='phone' value="">
<input type="hidden" name='adder' value="">
            <div class="mzcontainer order-product">
                <div class="order-product-title">确认订单信息</div>
                <div class="order-product-list" id="orderProductList">

                        {{ csrf_field()}}
                         <input type="hidden" name="gid" style="border:0;BACKGROUND-COLOR: transparent;color:red" value="{{ $data -> id}}">
                <table cellpadding="0" cellspacing="0">
                <thead>
               	 <tr>
                	<th class="order-product-table-name">
                	<div class="order-product-supplier">供应商：<span class="order-product-supplier-name">魅族</span>
                	<div class="order-product-supplier-tips">由“魅族”负责发货，并提供售后服务</div></div></th>
                	<th class="order-product-table-price">单价</th>
                	<th class="order-product-table-num">数量</th>
                	<th class="order-product-table-total">小计</th>
                	<th class="order-product-table-express">配送方式</th></tr>
                	</thead>
                	<tbody>
                	<tr>

                	<td class="order-product-table-name"><img class="order-product-image" src="{{url('/uploads/goods/')}}/{{$data -> photo}}"><div class="order-product-name"><a target="_blank" class="order-product-link" href="http://detail.meizu.com/item/meilan_u10.html">{{ $request -> name}}<br>{{ $request -> net}} {{ $request -> color}} {{ $request -> rom}}</a></div></td>
                	<td class="order-product-table-price"><p></p><span class="order-product-price">{{$total}}</span></td><td class="order-product-table-num">
                         <input type="hidden" name="num" style="border:0;BACKGROUND-COLOR: transparent;color:red" value="{{ $request -> number }}">{{$request -> number}}</td>
                	<td class="order-product-table-total"><p class="order-product-price red">{{$total}}</p></td><td class="order-product-table-express" rowspan="1"><select name="deliverid" id=""><option value="1">快递配送</option><option value="2">送货上门</option></select></td>
                	</tr>
                	</tbody>
                	<tfoot>
                	<tr><td colspan="5"><div class="order-product-remark"><span class="order-product-remark-title">备注</span><textarea name="remark" class="order-product-remark-input" value=" " placeholder="备注..." maxlength="45"></textarea></div></div>
                	<div class="order-product-total">合计：<span class="order-product-price red">{{$total}}</span></div></td></tr>
                	</tfoot>
                	</table>

            <div class="order-total clearfix">
                <div class="order-total-content">
                    <div class="order-total-line"></div>
                    <div class="order-total-row">
                        应付：
                        <div class="order-total-price total"><input type="hidden" name="total" style="border:0;BACKGROUND-COLOR: transparent;color:red" value="{{$total}}">{{$total}}</div>
                    </div>
                    <div class="order-total-row order-total-valid-row clearfix">
                        <button class="mz-btn success" id="submitForm">提交订单</button>
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

    $.ajaxSetup({
        headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }
                 });

        //单击添加地址事件
        $('#save-adder').on('click', function()
        {
            //获取当前对象
            var newname = $("input[name='add-name']").val();
            var newphone = $("input[name='add-phone']").val();
            var p = $("#p").val();
            var c = $("#c").val();
            var d = $("#d").val();
            var newaddress = $("input[name='add-address']").val();
            var newadder = p + c + d + newaddress;
            var isDefault = $("input:checked[name='isDefault']").val();
            $.ajax({
                type:"POST",
                url:"{{ url('home/order/ajax') }}",
                // dataType:'json',
                data:{newname:newname, newphone:newphone, p:p, c:c, d:d, newaddress:newaddress, isDefault:isDefault},
                success:function(data)
                {
                    // var obj = eval(data);
                    // alert(obj.name);
                    // alert(data);
                    if(data == 1)
                    {
                       $('#add-newadder').before("<li id='add-newadder' class='order-address-checkbox order-address-checkbox2'><div class='order-address-checkbox-top'><div id='newname-add' class='order-address-checkbox-name' style='color:black'><b>新名字</b></div><div id='newphone-add' class='order-address-checkbox-phone' style='color:black'><b>新手机</b></div></div><div id='newadder-add' class='order-address-checkbox-content' style='color:black'><b>新地址</b></div><div class='order-address-checkbox-tick'></div><div class='order-address-checkbox-ctrl'></div></li>");
                       $("#newname-add").html(newname);
                       $("#newphone-add").html(newphone);
                       $("#newadder-add").html(newadder);
                        $("input[name='name']").attr('value', newname);
                        $("input[name='phone']").attr('value', newphone);
                        $("input[name='adder']").attr('value', newadder);
                       var display = $('#newadder-add-block');
                       display.css('display', 'none');
                    }else if(data == 0)
                    {
                        alert('添加失败');
                    }else if(data == 7)
                    {
                        t.html('<span class="label label-info">已发货</span>');
                    }else if(data == 2)
                    {
                        alert('撤回发货失败');
                    }else if(data == 4)
                    {
                        alert('发货失败');
                    }
                },
                error:function()
                {
                    alert('数据异常');
                }
            });
            return false;
        });
}

        //显示添加地址
        $('#add-newadder').on('click', function(){
        var display = $('#newadder-add-block');
        display.css('display', 'block');

     });

        // 点击改变收货地址
        var alladder = $('.order-address-checkbox2');
        alladder.each(function(index, el) {
            $(this).on('click', function(){
              var newaddname = $(this).children('div').eq(0).children('div').eq(0).html();
              var newaddphone = $(this).children('div').eq(0).children('div').eq(1).html();
              var newaddadder = $(this).children('div').eq(1).html();
              var alladder = $('.order-address-checkbox2');
              alladder.each(function(index, el){
                $(this).removeClass('checked');
              });
              $(this).addClass('checked');

              $("input[name='name']").attr('value', newaddname);
              $("input[name='phone']").attr('value', newaddphone);
              $("input[name='adder']").attr('value', newaddadder);
            });
        });

        //检验手机
        $('#phone').blur(function(event) {
            var reg = /^1(3|5|7|8|4)\d{9}$/;
            var res = $("#phone").html();
            var res = reg.test(phone);
            if(!res)
            {
            alert('请输入11位手机号');
            }
        });



        //获取元素
        var p = document.getElementById('p');
        var c = document.getElementById('c');
        var d = document.getElementById('d');

        //定义省
            var citys = [];
            citys['北京市'] = ['北京市'];
            citys['上海市'] = ['上海市'];
            citys['广东省'] = ['广州市','深圳市','清远市',];
            //定义县
            var districts = [];
            districts['北京市'] = ['朝阳区','海淀区','昌平区'];
            districts['上海市'] = ['黄浦区','静安区','虹口区'];
            districts['广州市'] = ['白云区','天河区','荔湾区'];
            districts['深圳市'] = ['福田区','罗湖区','南山区'];
            districts['清远市'] = ['清城区','英德市','连州市'];


            var str = '<option value="">请选择</option>';
            for(var i in citys){
                // console.log(i);
                str += '<option value="'+i+'">'+i+'</option>';
            }
            p.innerHTML = str;

            p.onchange = function(){
                c.style.display = "inline";
                var pri = citys[this.value];
                var str = '<option value="">请选择</option>';
                for(var i in pri){
                    str += '<option value="'+pri[i]+'">'+pri[i]+'</option>';
                }
                c.innerHTML = str;
            }

            c.onchange = function(){
                d.style.display = "inline";
                var pri = districts[this.value];
                var str = '<option value="">请选择</option>';
                for(var i in pri){
                    // console.log(i);
                    str += '<option value="'+pri[i]+'">'+pri[i]+'</option>';
                }
                d.innerHTML = str;
            }

</script>



</script>


@endsection
