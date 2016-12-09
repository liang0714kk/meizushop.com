@extends('admin.layout')

@section('title', $title)
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        配置管理
        <small>修改</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">配置管理</a></li>
        <li class="active">修改</li>
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
                    <h3 class="box-title">快速配置</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{ url('/admin/config/update') }}" method="post" enctype="multipart/form-data">

                    <div class="box-body">
                    <!-- 修改失败 -->
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
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;网站标题</label>
                            <input name="title" value="{{ $data -> title }}" type="text" class="form-control" id="exampleInputName"
                                   placeholder="请输入网站标题">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;网站关键字</label>
                            <input name="keywords" value="{{ $data -> keywords }}" type="text" class="form-control" id="exampleInputName"
                                   placeholder="请输入网站关键字">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;网站描述</label>
                            <input name="des" value="{{ $data -> des }}" type="text" class="form-control" id="exampleInputName"
                                   placeholder="请输入网站描述">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;网站版权</label>
                            <input name="copyright" value="{{ $data -> copyright }}" type="text" class="form-control" id="exampleInputName"
                                   placeholder="请输入网站版权">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;网站帮助中心</label>
                            <input name="help" value="{{ $data -> help }}" type="text" class="form-control" id="exampleInputName"
                                   placeholder="帮助中心">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;网站开关</label><br>
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;开</label>
                            <input name="open" value="1" type="radio"

                            @if($data -> open == 1)
                                checked="checked"
                            @endif
                            >
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;关</label>
                            <input name="open" value="0" type="radio"
                            @if($data -> open == 0)
                                checked="checked"
                            @endif
                            >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">选择图片作为LOGO</label>
                            <p class="help-block"></p>
                        </div>
                          <input  name="logo"  size="28" accept="image/*" type="file" onchange="previewImage(this)"><br><br>
              <div id="preview">
              <img id="imghead" width=200 height=200 border=0 src='{{('/uploads/logo/')}}/{{session('config') -> logo}}')}}'>
              </div><br>
            <!--[if lte IE 8]><span style="position:absolute; left:140px; top:5px">双击选择照片</span><![endif]-->
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
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">修改</button>
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