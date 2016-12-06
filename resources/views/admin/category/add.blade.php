@extends('admin.layout')

@section('title', $title)
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        商品分类管理
        <small>添加</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">商品分类管理</a></li>
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
                    <h3 class="box-title">快速添加商品分类</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{ url('/admin/category') }}" method="post" enctype="multipart/form-data">

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
                                    <label>父分类</label>
                                    <select name="pid" class="form-control">
                                    <option value="0">根分类</option>
                                    @foreach($data as $v)
                                        <option value="{{ $v -> id}}">{{ $v -> name }}</option>
                                    @endforeach
                                    </select>
                                </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;商品分类名称</label>
                            <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="exampleInputName"
                                   placeholder="请输入商品分类名" disabled>
                        </div>
                         
                        <div class="form-group">
                        <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;分类展示图</label>
                            <input name="photo" type="file" id="exampleInputFile">
                            <p class="help-block">选择图片作为分类展示图</p>
                        </div>
                        
                        <div class="form-group">
                        <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;广告展示横图</label>
                            <input name="banner" type="file" id="exampleInputFile">
                            <p class="help-block">选择图片作为广告展示横图</p>
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