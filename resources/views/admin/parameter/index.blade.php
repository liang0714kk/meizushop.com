@extends('admin.layout')

@section('title',$title)
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            文章管理  
            <small>规格参数列表</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
            <li><a href="#">文章管理</a></li>
            <li class="active">列表</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">查看规格参数信息</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">

                    @if(session('info'))
                    <div id="jg" class="callout callout-info">
                        <p>{{ session('info')}}</p>
                    </div>
                    @endif

                        <form action="{{ url('/admin/parameter/index') }}" method="get">
                        <div class="row">
                            <div class="col-md-2">
                            <div class="form-group">
                            <select name="num" class="form-control select2, col-md-2">
                                <option
                                @if(!empty($request['num']) && $request['num'] == 5)
                                    selected = "selected"
                                @endif
                                >5</option>
                                <option
                                @if(!empty($request['num']) && $request['num'] == 10)
                                    selected = "selected"
                                @endif
                                >10</option>
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

                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>商品名</th>
                                <th>操作</th>
                                <th>规格参数</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $v)
                            <tr>
                                <td>{{ $v -> id }}</td>
                                <td>{{ $v -> name }}</td>
                                <td><a href="{{ url('/admin/parameter/edit/') }}/{{ $v -> id}}"><button class="btn btn-default">编辑</button></a> <br/>
                                <a href="{{ url('/admin/parameter/delete/') }}/{{ $v -> id}}"><button class="btn btn-default">删除</button></a></td>
                                <td>{!! $v -> parameter !!}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- {!! $data -> appends($request) ->  render() !!} -->
                        {!! $data -> appends($request) -> render() !!}
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