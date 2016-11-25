@extends('admin.layout')

@section('title', $title)

@section('content')
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                订单管理
                <small>添加</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
                <li><a href="#">订单管理</a></li>
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
                        <form role="form" action="{{ url('admin/order/order')}}" method="post" enctype="multipart/form-data">
                            <div class="box-body">
							@if (count($errors) > 0)
							<div id="jg" class="callout callout-info">
			                    <h4>警告！</h4>
			                    @foreach ($errors->all() as $error)
							                <p>{{ $error }}</p>
							            @endforeach
			                </div>
							@endif
                            	{{ csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">商品编号</label>
                                    <input type="gid" name="gid" class="form-control" id="exampleInputEmail1" value="{{ old('gid')}}"
                                           placeholder="请输入商品编号">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">收件人</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ old('name')}}"
                                           placeholder="请输入收件人">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">数量</label>
                                    <input type="number" name="num" class="form-control" id="exampleInputPassword1"
                                           placeholder="请输入数量，限购3件">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">收件人地址</label>
                                    <input type="text" name="adder" class="form-control" value="{{ old('adder')}}"id="exampleInputEmail1"
                                           placeholder="请输入地址">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">收件人手机</label>
                                    <input type="number" name="phone" class="form-control" id="exampleInputPassword1"
                                           placeholder="请输入手机">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">留言</label>
                                    <input type="text" name="remark" class="form-control" id="exampleInputPassword1"
                                           placeholder="请输入留言">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Check me out
                                    </label>
                                </div>
                            </div><!-- /.box-body -->
							<div class="box-footer">
									<button class="btn btn-primary">添加</button>
									<button type="reset" class="btn btn-default">重置</button>
								</form>
							</div>


                </div><!--/.col (left) -->
            </div>   <!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <script type="text/javascript">

    window.onload = function(){
    	// alert($);
    	//隐藏警告消息
    	setInterval(function(){
    		$("#jg").fadeOut(1000);
    	}, 3000);
    }
    </script>
@endsection