@extends('admin.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            商品分类管理
            <small>商品分类列表</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
            <li><a href="#">商品分类管理</a></li>
            <li class="active">列表</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">快速查看商品分类</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">

                    @if(session('info'))
                    <div id="jg" class="callout callout-info">
                        <p>{{ session('info')}}</p>
                    </div>
                    @endif

                      
                    <div class="box-body">

                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>商品分类名</th>
                                <th>父分类</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $v)
                            <tr>
                                <td class="ids">{{ $v -> id }}</td>
                                <td class="name">{{ $v -> name }}</td>
                                <td class="pname">{{ $v -> pname }}</td>
                                <td class="btn-group" ><a href="{{ url('/admin/category/') }}/{{ $v -> id}}/edit"><button class="btn btn-default">编辑</button></a><br/>
                                <form action="{{url('/admin/category/')}}/{{$v -> id}}" method="post">
                                    <button class="btn btn-default">删除</button>
                                    {{ method_field("DELETE")}}
                                    {{ csrf_field() }}
                                </form></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
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