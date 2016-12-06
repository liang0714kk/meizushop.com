@extends('admin.layout')

@section('title', $title)
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        商品管理
        <small>添加商品属性</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">商品管理</a></li>
        <li class="active">添加商品属性</li>
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
                    <h3 class="box-title">添加商品属性</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{ url('/admin/goods') }}/{{ $data -> id }}" method="post" enctype="multipart/form-data">

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
                    {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;商品名</label>
                            <input name="name" value="{{ $data -> name }}" type="text" class="form-control" id="exampleInputName"
                                   placeholder="请输入商品名称" disabled>
                        </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;网络制式</label>
                            <input name="net" value="{{ old('net') }}" type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="请输入网络制式">
                        </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;内存容量</label>
                            <input name="rom" value="{{ old('rom') }}" type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="请输入内存容量">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;套餐类型</label>
                            <input name="package" value="{{ old('package') }}" type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="请输入支持的套餐类型">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;配送区域</label>
                            <input name="area" value="{{ old('area') }}" type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="请输入商品配送区域">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;优惠券</label>
                            <input name="ticket" value="{{ old('ticket') }}" type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="请输入商品支持的优惠券">
                        </div>
                        
                         <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;路由器频段</label>
                            <input name="hz" value="{{ old('hz') }}" type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="请输入频段信息">
                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;USB输出</label>
                            <input name="usb" value="{{ old('usb') }}" type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="请输入USB输出">
                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;桌子尺寸</label>
                            <input name="size" value="{{ old('size') }}" type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="请输入桌子尺寸">
                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;续航里程</label>
                            <input name="mile" value="{{ old('mile') }}" type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="请输入续航里程">
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