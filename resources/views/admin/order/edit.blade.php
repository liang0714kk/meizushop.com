@extends('admin.layout')

@section('title', $title)

@section('content')
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                订单管理
                <small>编辑</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
                <li><a href="#">订单管理</a></li>
                <li class="active">编辑</li>
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
                            <h3 class="box-title">快速编辑</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('admin/order/order')}}/{{ $data -> id }}" method="post" enctype="multipart/form-data">
                            <div class="box-body">
                            @if (count($errors) > 0)
                            <div id="jg" class="callout callout-info">
                                <h4>警告！</h4>
                                @foreach ($errors->all() as $error)
                                            <p>{{ $error }}</p>
                                 @endforeach
                            </div>
                            @endif
                            @if(session('info'))
                                <div id="jg" class="callout callout-info">
                                    <p>{{ session('info')}}</p>
                                </div>
                             @endif
                                {{ csrf_field() }}
                                {{ method_field("PUT") }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">订单编号</label>
                                    <input type="number" name="id" class="form-control" id="exampleInputEmail1" value="{{ $data -> id }}" disabled="disabled">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">商品编号</label>
                                    <input type="number" name="gid" class="form-control" id="exampleInputEmail1" value="{{ $data -> gid }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">收件人</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $data -> name }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">数量</label>
                                    <input type="number" name="num" class="form-control" value="{{ $data -> num }}" id="exampleInputPassword1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">收件人地址</label>
                                    <input type="text" name="adder" class="form-control" value="{{ $data -> adder }}"id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">收件人手机</label>
                                    <input type="number" value="{{ $data -> phone }}" name="phone" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">留言</label>
                                    <input type="text" name="remark" value="{{ $data -> remark}}" class="form-control" id="exampleInputPassword1">
                                </div>
                                    <label for="exampleInputPassword1">配送方式</label>
                                    <select name="deliverid" class="form-control">
                                        <option value="1" 
                                        @if($data -> deliverid== 1)
                                            selected="selected" 
                                        @endif
                                        >快递配送</option>
                                        <option value="2"
                                        @if($data -> deliverid== 2)
                                            selected="selected" 
                                        @endif>送货上门</option>
                                        <option value="4"
                                        @if($data -> deliverid == 4)
                                            selected="selected" 
                                        @endif>就近自提</option>
                                    </select>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Check me out
                                    </label>
                                </div>
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                    <button class="btn btn-primary">编辑</button>
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