@extends('admin.layout')

@section('title', $title)
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        用户管理
        <small>编辑</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">用户管理</a></li>
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
                    <h3 class="box-title">编辑用户信息</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{ url('/admin/user/update') }}" method="post" enctype="multipart/form-data">

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
                        <input type="hidden" name="id" value="{{ $data -> id}}">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">用户名&nbsp;&nbsp;&nbsp;</label>
                            <input name="name" value="{{ $data -> name }}" type="text"  id="exampleInputName"
                                   placeholder="请输入6-18位用户名">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">昵 &nbsp;&nbsp;&nbsp; 称&nbsp;&nbsp;&nbsp;</label>
                            <input name="nickname" value="{{ $data -> nickname }}" type="text"  id="exampleInputName"
                                   placeholder="请输入昵称">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">性 &nbsp;&nbsp;&nbsp; 别</label>&nbsp;&nbsp;&nbsp;
                            男 <input name="sex" value="{{ $data -> sex }}" type="radio" value="1">&nbsp;&nbsp;&nbsp;
                            女 <input name="sex" value="{{ $data -> sex }}" type="radio" value="0">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">邮 &nbsp;&nbsp;&nbsp; 箱</label>&nbsp;&nbsp;&nbsp;
                            <input name="email" value="{{ $data -> email }}" type="text"  id="exampleInputEmail1"
                                   placeholder="请输入邮箱">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">手 &nbsp;&nbsp;&nbsp; 机&nbsp;&nbsp;&nbsp;</label>
                            <input name="phone" value="{{ $data ->phone }}" type="text"  id="exampleInputEmail1"
                                   placeholder="请输入手机号">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">权 &nbsp;&nbsp;&nbsp; 限&nbsp;&nbsp;&nbsp;</label>
                            <select name="author">
                                <option value="0">普通用户</option>
                                <option value="1">超级管理员</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">头 &nbsp;&nbsp;&nbsp; 像&nbsp;&nbsp;&nbsp;</label>
                            <img width="200px" height="200px" src="{{ url('/uploads/avater/') }}/{{ $data -> photo }}" alt="">
                            <input name="photo" type="file" id="exampleInputFile">
                            <p class="help-block">选择新头像</p>
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">编辑</button>
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