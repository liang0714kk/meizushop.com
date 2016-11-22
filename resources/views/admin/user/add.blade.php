@extends('admin.layout')

@section('title', $title)
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        用户管理
        <small>添加</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">用户管理</a></li>
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
                    <h3 class="box-title">快速添加用户</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{ url('/admin/user/insert') }}" method="post" enctype="multipart/form-data">

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
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;用户名</label>
                            <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="exampleInputName"
                                   placeholder="请输入6-18位用户名">
                        </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;邮箱</label>
                            <input name="email" value="{{ old('email') }}" type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="请输入邮箱">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;权限</label>
                            <select name="author">
                                <option value="0">普通用户</option>
                                <option value="1">超级管理员</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">&nbsp;&nbsp;&nbsp;密码</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                                   placeholder="请输入密码">
                        </div>
                         <div class="form-group">
                            <label for="exampleInputPassword1">&nbsp;&nbsp;&nbsp;确认密码</label>
                            <input name="repassword" type="password" class="form-control" id="exampleInputPassword1"
                                   placeholder="请输入确认密码">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">&nbsp;&nbsp;&nbsp;头像</label>
                            <input name="photo" type="file" id="exampleInputFile">
                            <p class="help-block">选择图片作为头像</p>
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