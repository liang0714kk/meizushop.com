<!-- @extends('admin.layout') -->

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            后台
            <small>首页</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
            <li class="active">后台</li>
        </ol>
        @if(session('info'))
        <div id="jg" class="callout callout-info">
            <p>{{ session('info')}}</p>
        </div>
        @endif
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">今日销量</span>
                        <span class="info-box-number">{{ $sailes }}RMB</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">新增会员</span>
                        <span class="info-box-number">{{ $newMemember }}</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>
                        <div class="info-box-content" style="white-space:nowrap;">
                            <span class="info-box-text">等待发货</span>
                            <span id="orderwaite" class="info-box-number">{{ $orderwaite }}</span>
                        </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">商品总数</span>
                            <span class="info-box-number">{{ $goodTotal }}种</span>
                        </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                </div>
        </div><!-- /.row -->

        <div class="row">
            <!-- TABLE: LATEST ORDERS -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">等待发货</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                            </button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>订单号</th>
                                    <th>商品名</th>
                                    <th>一键发货</th>
                                    <th>收件人名称</th>
                                    <th>收件人地址</th>
                                    <th>收件人电话</th>
                                    <th>配送方式</th>
                                    <th>配送说明</th>
                                </tr>
                                </thead>
                                <tbody>
                            @foreach($newOrder as $v)
                                <tr>
                                    <td class="id">{{ $v -> id}}</a></td>
                                    <td>{{ $v-> goodname}} {{ $v-> net}} {{ $v-> color}} {{ $v-> rom}}<br>
                                    ¥{{ $v-> price}}x{{ $v-> num}}</td>
                                    <td>
                                    @if($v -> deliver == 1)<span class="deliver"><span class="label label-info">已发货</span></span>
                                    @elseif($v -> deliver == 0)
                                    <span class="deliver"><span class="label label-info">发货</span></span>
                                    @endif
                                    </td>
                                    <td>{{ $v -> name}}</td>
                                    <td>{{ $v -> adder }}</td>
                                    <td>{{ $v -> phone }}</td>
                                    <td>{{ $v -> deliverid }}</td>
                                    <td>{{ $v -> remark }}</td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="{{ url('/admin/order/order/create')}}" class="btn btn-sm btn-info btn-flat pull-left">添加新订单</a>
                        <a href="{{ url('/admin/order/order')}}" class="btn btn-sm btn-default btn-flat pull-right">查看所有订单</a>
                    </div><!-- /.box-footer -->
                </div><!-- /.box -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-md-6">
                <!-- USERS LIST -->
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">最近注册</h3>
                        <div class="box-tools pull-right">
                            <span class="label label-danger">{{ $newMemember }} 个新会员</span>
                            <button class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body no-padding">
                        <ul class="users-list clearfix">
                        @foreach($lastMemember as $v)
                            <li>
                                <img src="/uploads/avater/{{ $v -> photo }}" alt="User Image">
                                <a class="users-list-name" href="#">{{ $v -> name }}</a>
                                <span class="users-list-date">{{ $v -> created_at }}</span>
                            </li>
                        @endforeach
                        </ul><!-- /.users-list -->
                    </div><!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href="{{ url('/admin/user/index')}}" class="uppercase">查看所有用户</a>
                    </div><!-- /.box-footer -->
                </div><!--/.box -->
            </div><!-- /.col -->

            <div class="col-md-6">
                <!-- PRODUCT LIST -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">今日新品</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                            </button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <ul class="products-list product-list-in-box">
                        @foreach($newGood as $v)
                            <li class="item">
                                <div class="product-img">
                                    <img width="50px" src="/uploads/goods/{{ $v -> photo }}" alt="Product Image">
                                </div>
                                <div class="product-info">
                                    <a href="javascript::;" class="product-title">{{ $v -> name }}<span
                                            class="label label-warning pull-right">{{ $v -> price}}</span></a>
                    <span class="product-description">
                      {{ $v -> explain}}
                    </span>
                                </div>
                            </li><!-- /.item -->
                        @endforeach
                        </ul>
                    </div><!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href="javascript::;" class="uppercase">查看所有商品</a>
                    </div><!-- /.box-footer -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->




    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<script type="text/javascript">
    window.onload = function()
    {
        setInterval(function()
        {
            $('#jg').fadeOut(1000);
        }, 1000);


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
            // 获取等待订单
            var orderwaite = $('#orderwaite').html();
            $.ajax({
                type:"POST",
                url:"{{ url('/admin/order/order/ajax/deliver') }}",
                data:{id:id},
                success:function(data)
                {
                    if(data == 7)
                    {
                        alert('未付款不能发货');
                    }else if(data == 1)
                    {
                        t.parent().parent().html("");
                        orderwaite = orderwaite - 1;
                        $('#orderwaite').html(orderwaite);
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
</script>
@endsection

