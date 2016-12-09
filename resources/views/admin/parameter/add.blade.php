@extends('admin.layout')

@section('title', $title)
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        文章管理
        <small>商品规格参数添加</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">文章管理</a></li>
        <li class="active">添加</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">快速添加</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{ url('/admin/parameter/insert') }}" method="post" enctype="multipart/form-data">

                    <div class="box-body">
                    <!-- 添加失败 -->
                    @if(session('info'))
                    <div id="jg" class="callout callout-info">
                        <p>{{ session('info')}}</p>
                    </div>
                    @endif

                    @if(count($errors) > 0)
                    <div id="jg" class="callout callout-info">
                        <h4>警告!</h4>
                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                    @endif
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;商品名</label>
                            <input name="name" value="{{ $gdata -> name }}" type="text" class="form-control" id="exampleInputName"
                                   placeholder="请输入商品名称">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;规格参数</label>
                         <!-- 加载编辑器的容器 -->
                        <script style="width:100%" id="container" name="parameter" type="text/plain"></script>
                        <!-- 配置文件 -->
                        <script type="text/javascript" src="{{ url('/ue/ueditor.config.js') }}"></script>
                        <!-- 编辑器源码文件 -->
                        <script type="text/javascript" src="{{ url('/ue/ueditor.all.js') }}"></script>
                        <!-- 实例化编辑器 -->
                        <script type="text/javascript">
                            var ue = UE.getEditor('container',
                            { 
                                toolbars: [['fullscreen', 'source', 'undo', 'redo', 'bold']],
                                autoHeightEnabled:true,
                                autoFloatEnabled:true
                            });
                        </script>
                    </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">添加</button>
                        <button type="reset" class="btn btn-default">重置</button>
                    </div>
                </form>
            </div><!-- /.box -->

                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!--/.col (left) -->

    </div>   <!-- /.row -->
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