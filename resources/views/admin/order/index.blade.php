@extends('admin.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            订单管理
            <small>订单列表</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
            <li><a href="#">订单管理</a></li>
            <li class="active">列表</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">查看订单基本信息</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">

                    @if(session('info'))
                    <div id="jg" class="callout callout-info">
                        <p>{{ session('info')}}</p>
                    </div>
                    @endif

                        <form action="{{ url('/admin/order/order') }}" method="get">
                        <div class="row">
                            <div class="col-md-2">
                            <div class="form-group">
                            <select name="num" class="form-control select2, col-md-2">
                                <option
                                @if(!empty($request['num']) && $request['num'] == 10)
                                    selected = "selected"
                                @endif
                                >10</option>
                                <option
                                @if(!empty($request['num']) && $request['num'] == 25)
                                    selected = "selected"
                                @endif
                                >25</option>
                                <option
                                @if(!empty($request['num']) && $request['num'] == 50)
                                    selected = "selected"
                                @endif
                                >50</option>
                                <option
                                @if(!empty($request['num']) && $request['num'] == 100)
                                    selected = "selected"
                                @endif
                                >100</option>
                            </select>
                            </div><!-- /.form-group -->
                            </div>
                            <div class="col-md-3 col-md-offset-7">
                            <div class="input-group input-group-sm">
                                <input value="{{ $request['keywords'] or '' }}" name="keywords" type="text" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-info btn-flat">搜索</button>
                            </span>
                            </div><!-- /input-group -->
                            </div>
                        </div>
                        </form>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>订单号</th>
                                    <th>商品名</th>
                                    <th>状态</th>
                                    <th>收件人名称</th>
                                    <th>收件人地址</th>
                                    <th>收件人电话</th>
                                    <th>配送方式</th>
                                    <th>配送说明</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                            @foreach($data as $v)
                                <tr>
                                    <td class="id">{{ $v -> id}}</td>
                                    <td>{{ $v-> goodname}} {{ $v-> net}} {{ $v-> color}} {{ $v-> rom}}<br>
                                    ¥{{ $v-> price}}x{{ $v-> num}}</td>
                                    <td>
                                    @if($v -> pay == 1)
                                    <span class="pay"><span class="label label-danger">已付款</span></span>
                                    @elseif($v -> pay == 0)
                                    <span class="pay"><span class="label label-warning">未付款</span></span>
                                    @endif
                                    @if($v -> deliver == 1)<span class="deliver"><span class="label label-info">已发货</span></span>
                                    @elseif($v -> deliver == 0)
                                    <span class="deliver"><span class="label label-warning deliver">未发货</span></span>
                                    @endif
                                    @if($v -> state == 1)
                                    <span class="state"><span class="label label-warning">已收货</span></span>
                                    @elseif($v -> state == 0)
                                    <span class="state"><span class="label label-warning">未收货</span></span>
                                    @endif
                                    </td>
                                    <td>{{ $v -> name}}</td>
                                    <td>{{ $v -> adder }}</td>
                                    <td>{{ $v -> phone }}</td>
                                    <td>{{ $v -> deliverid }}</td>
                                    <td>{{ $v -> remark }}</td>
                                    <td>
                                    <a href="{{ url('./admin/order/order/')}}/{{ $v -> id}}/edit">编辑</a> 
                                    <form action="{{ url('./admin/order/order')}}/{{ $v -> id}}" method="POST">
                                        {{ csrf_field()}}
                                        {{ method_field("DELETE")}}
                                    <button>删除</button></form>
                                    </td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                        <!-- 分页 -->
                           <center>{!! $data -> appends($request) -> render()!!}</center> 

                    </div><!-- /.box-body -->
                </div><!-- /.box -->

                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
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

        //发货单击事件
        $('.deliver').on('click', function()
        {
            //获取当前对象
            var t = $(this);
            //获取id
            var id = $(this).parent().parent().parent().find('.id').html();
            $.ajax({
                type:"POST",
                url:"{{ url('/admin/order/order/ajax/deliver') }}",
                data:{id:id},
                success:function(data)
                {
                    if(data == 7)
                    {
                        alert('未付款不能发货');
                    }else if(data == 0)
                    {
                        t.html('<span class="label label-warning">未发货</span>');
                    }else if(data == 1)
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

    
    //退款单击事件
        $('.pay').on('click', function()
        {
            //获取当前对象
            var t = $(this);
            //获取id
            var id = $(this).parent().parent().parent().find('.id').html();
            $.ajax({
                type:"POST",
                url:"{{ url('/admin/order/order/ajax/pay') }}",
                data:{id:id},
                success:function(data)
                {
                    if(data == 4)
                    {
                        alert('付款失败');
                    }else if(data == 0)
                    {
                        t.html('<span class="label label-warning">未付款</span>');
                    }else if(data == 1)
                    {
                        t.html('<span class="label label-danger">已付款</span>');
                    }else if(data == 2)
                    {
                        alert('退款失败');
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
</script>

@endsection