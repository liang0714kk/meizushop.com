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
                        <input type="hidden" name="created_at" value="1">
                        <input type="hidden" name="updated_at" value="2">
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
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;手机号</label>
                            <input name="phone" value="{{ old('phone') }}" type="number" class="form-control" id="exampleInputName"
                                   placeholder="请输入11位手机号">
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
                        </div>
                        <input  name="photo"  size="28" accept="image/*" type="file" onchange="previewImage(this)"><br>
                        <div id="preview">
                        <img id="imghead" width=200 height=200 border=0 src='{{url('/uploads/avater/default.jpg')}}'>
                        </div>
<script type="text/javascript">


//图片上传预览    IE是用了滤镜。
function previewImage(file)
{
  var MAXWIDTH  = 260;
  var MAXHEIGHT = 180;
  var div = document.getElementById('preview');
  if (file.files && file.files[0])
  {
      div.innerHTML ='<img id=imghead>';
      var img = document.getElementById('imghead');
      img.onload = function(){
        var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
        img.width  =  rect.width;
        img.height =  rect.height;
//      img.style.marginLeft = rect.left+'px';
        img.style.marginTop = rect.top+'px';
      }
      var reader = new FileReader();
      reader.onload = function(evt){img.src = evt.target.result;}
      reader.readAsDataURL(file.files[0]);
  }
  else //兼容IE
  {
    var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
    file.select();
    var src = document.selection.createRange().text;
    div.innerHTML = '<img id=imghead>';
    var img = document.getElementById('imghead');
    img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
    var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
    status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
    div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
  }
}
function clacImgZoomParam( maxWidth, maxHeight, width, height ){
    var param = {top:0, left:0, width:width, height:height};
    if( width>maxWidth || height>maxHeight )
    {
        rateWidth = width / maxWidth;
        rateHeight = height / maxHeight;

        if( rateWidth > rateHeight )
        {
            param.width =  maxWidth;
            param.height = Math.round(height / rateWidth);
        }else
        {
            param.width = Math.round(width / rateHeight);
            param.height = maxHeight;
        }
    }

    param.left = Math.round((maxWidth - param.width) / 2);
    param.top = Math.round((maxHeight - param.height) / 2);
    return param;
}
</script>
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