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
                                   placeholder="请输入商品分类名" >
                        </div>

                        <div class="form-group">

                      <div class="form-group">
                        <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;广告展示横图</label>

                            <p class="help-block">选择图片作为广告展示横图</p>
                        </div>
<input  name="banner" size="28" accept="image/*" type="file" onchange="previewImage(this)"><br>
                        <div id="preview2">
                        <img id="imghead2" width=620 height=60 border=0 src='{{url('/uploads/banner/default.jpg')}}'>
                        </div>
<script type="text/javascript">


//图片上传预览    IE是用了滤镜。
function previewImage(file)
{
  var MAXWIDTH  = 650;
  var MAXHEIGHT = 180;
  var div = document.getElementById('preview2');
  if (file.files && file.files[0])
  {
      div.innerHTML ='<img id=imghead2>';
      var img = document.getElementById('imghead2');
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
    div.innerHTML = '<img id=imghead2>';
    var img = document.getElementById('imghead2');
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