@extends('admin.layout')

@section('title', $title)
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        商品管理
        <small>添加</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">商品管理</a></li>
        <li class="active">添加商品</li>
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
                    <h3 class="box-title">添加商品</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{ url('/admin/goods') }}" method="post" enctype="multipart/form-data">

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
                        <input type="hidden" name="created_at" value="1">
                        <input type="hidden" name="updated_at" value="2">
                        <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;商品名</label>
                            <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="exampleInputName"
                                   placeholder="请输入商品名称">
                        </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;特色说明</label>
                            <input name="explain" value="{{ old('explain') }}" type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="请输入商品特色说明">
                        </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;价格</label>
                            <input name="price" value="{{ old('price') }}" type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="请输入商品价格">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;颜色分类</label>
                            <input name="color" value="{{ old('color') }}" type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="请输入商品颜色分类">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;支持</label>
                            <input name="support" value="{{ old('support') }}" type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="请输入商品支持类型">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;售后服务</label>
                            <input name="server" value="{{ old('server') }}" type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="请输入商品售后服务提供者">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputFile">&nbsp;&nbsp;&nbsp;图像</label>
                            <input name="photo" type="file" id="exampleInputFile">
                            <p class="help-block">选择图片作为商品图片</p>
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