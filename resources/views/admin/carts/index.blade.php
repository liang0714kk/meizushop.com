@extends('admin.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            购物车管理
            <small>购物车列表</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
            <li><a href="#">购物车管理</a></li>
            <li class="active">列表</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">查看购物车基本信息</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">

                    @if(session('info'))
                    <div id="jg" class="callout callout-info">
                        <p>{{ session('info')}}</p>
                    </div>
                    @endif

                        <form action="{{ url('/admin/carts/index') }}" method="get">
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
                                    <th>购物车号</th>
                                    <th>商品名</th>
                                    <th>价格</th>
                                    <th>数量</th>
                                    <th>用户</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                            @foreach($data as $v)
                                <tr>
                                    <td class="id">{{ $v -> id}}</td>
                                    <td>{{ $v-> goodname}} <br>{{ $v-> net}} {{ $v-> color}}<br> {{ $v-> rom}}<br>
                                    </td>
                                    <td>{{ $v -> price }}</td>
                                    <td>{{ $v -> number }}</td>
                                    <td>{{ $v -> username }}</td>
                                    <td>
                                    <a href="{{ url('./admin/carts/delete/')}}/{{ $v -> id}}">删除</a>
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

}
</script>

@endsection