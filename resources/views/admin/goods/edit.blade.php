@extends('admin.layout')

@section('title', $title)
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        商品管理
        <small>编辑</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">商品管理</a></li>
        <li class="active">编辑商品基本信息</li>
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
                    <h3 class="box-title">编辑商品基本信息</h3>
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
                    {{ method_field('PUT')}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;商品名</label>
                            <input name="name" value="{{ $data -> name }}" type="text" class="form-control" id="exampleInputName"
                                   placeholder="请输入商品名称">
                        </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;特色说明</label>
                            <input name="explain" value="{{ $data -> explain }}" type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="请输入商品特色说明">
                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;父分类名</label>
                                    <select name="pid" value="{{ $data -> pid }}"class="form-control">
                                    <option value="0">根分类</option>
                                    @foreach($gdata as $v)
                                        <option value="{{ $v -> id}}">{{ $v -> name }}</option>
                                    @endforeach
                                    </select>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;品牌</label>
                            <input name="supplier" value="{{ $data -> supplier }}" type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="请输入商品所属品牌">
                        </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;价格</label>
                            <input name="price" value="{{ $data -> price }}" type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="请输入商品价格">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;颜色分类</label>
                            <input name="color" value="{{ $data -> color }}" type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="请输入商品颜色分类">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;支持</label>
                            <input name="support" value="{{ $data -> support }}" type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="请输入商品支持类型">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;售后服务</label>
                            <input name="server" value="{{ $data -> server }}" type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="请输入商品售后服务提供者">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">&nbsp;&nbsp;&nbsp;原图像</label>
                            <img width="100px" height="100px" src="/uploads/goods/{{ $data -> photo }}"  />
                        </div>

                        <div class="form-group">
                        <input  name="photo"  size="28" accept="image/*" type="file" onchange="previewImage(this)"><br>
                            <p class="help-block">选择图片作为商品图片</p>
                        </div>
                        <div id="preview">
                        <img id="imghead" width=200 height=200 border=0 src='{{url('/uploads/goods/default.jpg')}}'>
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