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

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">今日销量</span>
                        <span class="info-box-number">{{ $sailes }}RMB</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">新增会员</span>
                        <span class="info-box-number">{{ $newMemember }}人</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <!-- TABLE: LATEST ORDERS -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">今日订单</h3>
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
                                    <th>状态</th>
                                    <th>收件人地址</th>
                                    <th>收件人电话</th>
                                    <th>配送方式</th>
                                    <th>配送说明</th>
                                </tr>
                                </thead>
                                <tbody>
                            @foreach($newOrder as $v)
                                <tr>
                                    <td><a href="pages/examples/invoice.html">{{ $v -> num}}</a></td>
                                    <td>{{ $v -> name}}</td>
                                    <td>
                                    @if($v -> deliver == 1)<span class="label label-info">已发货</span>
                                    @elseif($v -> deliver == 0)
                                    <span class="label label-info">未发货</span>
                                    @endif
                                    @if($v -> state == 1)
                                    <span class="label label-warning">已收货</span>
                                    @elseif($v -> state == 0)
                                    <span class="label label-warning">未收货</span>
                                    @endif
                                    @if($v -> pay == 1)
                                    <span class="label label-danger">已付款</span>
                                    @elseif($v -> pay == 0)
                                    <span class="label label-danger">未付款</span>
                                    @endif
                                    </td>
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
                        <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">添加新订单</a>
                        <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">查看所有订单</a>
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
                                <img src="/uploads/avater/{{ $v -> photo }}"" alt="User Image">
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
                            <li class="item">
                                <div class="product-img">
                                    <img src="{{ url('/ad/dist/img/default-50x50.gif') }}" alt="Product Image">
                                </div>
                                <div class="product-info">
                                    <a href="javascript::;" class="product-title">Samsung TV <span
                                            class="label label-warning pull-right">$1800</span></a>
                    <span class="product-description">
                      Samsung 32" 1080p 60Hz LED Smart HDTV.
                    </span>
                                </div>
                            </li><!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                    <img src="{{ url('/ad/dist/img/default-50x50.gif') }}" alt="Product Image">
                                </div>
                                <div class="product-info">
                                    <a href="javascript::;" class="product-title">Bicycle <span
                                            class="label label-info pull-right">$700</span></a>
                    <span class="product-description">
                      26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                    </span>
                                </div>
                            </li><!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                    <img src="{{ url('/ad/dist/img/default-50x50.gif') }}" alt="Product Image">
                                </div>
                                <div class="product-info">
                                    <a href="javascript::;" class="product-title">Xbox One <span
                                            class="label label-danger pull-right">$350</span></a>
                    <span class="product-description">
                      Xbox One Console Bundle with Halo Master Chief Collection.
                    </span>
                                </div>
                            </li><!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                    <img src="{{ url('/ad/dist/img/default-50x50.gif') }}" alt="Product Image">
                                </div>
                                <div class="product-info">
                                    <a href="javascript::;" class="product-title">PlayStation 4 <span
                                            class="label label-success pull-right">$399</span></a>
                    <span class="product-description">
                      PlayStation 4 500GB Console (PS4)
                    </span>
                                </div>
                            </li><!-- /.item -->
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
    }
</script>
@endsection

