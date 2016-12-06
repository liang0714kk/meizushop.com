@extends('admin.layout')

@section('title', $title)

@section('content')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                商品管理
                <small>商品列表</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
                <li><a href="#">商品管理</a></li>
                <li class="active">列表</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"> 商品基本信息 </h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                        @if(session('info'))
                        <div id="jg" class="callout callout-info">
                            <p>{{ session('info')}}</p>
                        </div>
                        @endif
                        
                             <form action="{{ url('/admin/goods/') }}" method="get">
                        <div class="row">
                            <div class="col-md-2">
                            <div class="form-group">
                            <select name="num" class="form-control select2, col-md-2">
                                <option
                                @if(!empty($request['num']) && $request['num'] == 10)
                                    selected = "selected"
                                @endif
                                >10</option>
                                <option
                                @if(!empty($request['num']) && $request['num'] == 25)
                                    selected = "selected"
                                @endif
                                >25</option>
                                <option
                                @if(!empty($request['num']) && $request['num'] == 50)
                                    selected = "selected"
                                @endif
                                >50</option>
                                <option
                                @if(!empty($request['num']) && $request['num'] == 100)
                                    selected = "selected"
                                @endif
                                >100</option>
                            </select>
                            </div><!-- /.form-group -->
                            </div>
                            <div class="col-md-3 col-md-offset-7">
                            <div class="input-group input-group-sm">
                                <input value="{{ $request['keywords'] or '' }}" name="keywords" type="text" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-info btn-flat">搜索</button>
                            </span>
                            </div><!-- /input-group -->
                            </div>
                        </div>
                        </form>

                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                 <tr>
                                    <th>ID</th>
                                    <th>商品名</th>
                                    <th>商品说明</th>
                                    <th>父分类名</th>
                                    <th>品牌</th>
                                    <th>价格</th>
                                    <th>商品图片</th>
                                    <th>颜色分类</th>
                                    <th>支持</th>
                                    <th>服务</th>
                                    <th>状态</th>
                                    <th>热品</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                 @foreach($data as $v)
                                <tr>
                                    <td class="ids">{{ $v -> id }}</td>
                                    <td>{{ $v -> name }}</td>
                                    <td>{{ $v -> explain }}</td>
                                    <td>{{ $v -> pname}}</td>
                                    <td>{{ $v -> supplier}}</td>
                                    <td>{{ $v -> price }}</td>
                                    <td><img width="60px" height="60px" src="/uploads/goods/{{ $v -> photo }}" /></td>
                                    <td>{{ $v -> color }}</td>
                                    <td>{{ $v -> support }}</td>
                                    <td>{{ $v -> server }}</td>
                                    <td class="status">
                                    @if($v -> status == 0)
                                        上架
                                    @elseif($v -> status == 1)
                                        下架
                                    @endif
                                    </td>
                                    <td class="hot">
                                    @if($v -> hot == 0)
                                        普通
                                    @elseif($v -> hot == 1)
                                        推荐
                                    @endif
                                    </td>
                                    <td>
                                    <div class="btn-group">
                                        <form action="{{url('/admin/goods/')}}/{{$v -> id}}" method="post">
                                          <button class="btn btn-default btn-flat">删除商品&nbsp;</button>
                                            {{ method_field("DELETE")}}
                                            {{ csrf_field() }}
                                        </form>
                                          <a href="{{url('/admin/goods') }}/{{ $v -> id}}/edit"><button type="button" class="btn btn-default btn-flat">编辑</button></a>
                                          <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                        <ul class="dropdown-menu" role="menu">
            
                                            <li class="divider"></li>
                                            <li><a href="{{ url('/admin/goods/attr') }}/{{ $v -> id}}">添加属性</a></li>
                                            <li><a href="{{ url('/admin/FAQ/add') }}/{{ $v -> name}}">常见问题</a></li>
                                            <li><a href="{{ url('/admin/photos/add') }}/{{ $v -> name}}">详情图片</a></li>
                                        </ul>
                                    </div>
                                    </td>
                                    </tr>
                                @endforeach
                              
                                </tbody>
                            </table>
                             <!-- {!! $data -> appends($request) ->  render() !!} -->
                        {!! $data -> appends($request) -> render() !!}
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<script type="text/javascript">

window.onload = function()
{
    //设置定时器 淡出
    setInterval(function()
    {
        $("#jg").fadeOut('1000');
    },1000);

    $.ajaxSetup({
        headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }
                 });
        //双击事件
        $('.status').on('dblclick', function()
        {
            //获取当前对象
            var t = $(this);
            //获取id
            var id = $(this).parent().find('.ids').html();
            $.ajax({
                type:"POST",
                url:"{{ url('/admin/goods/ajaxStatus') }}",
                data:{id:id},
                success:function(data)
                {
                    if(data == 2)
                    {
                        alert('修改失败');
                    }else if(data == 0)
                    {
                        t.html('上架');
                    }else if(data == 1)
                    {
                        t.html('下架');
                    }
                },
                error:function()
                {
                    alert('数据异常');
                }
            });
        });
    
        //双击改变hot状态
        $('.hot').on('click',function(){
            //获取当前对象
            var t = $(this);
            // console.log (t);
            //获取id
            var id = $(this).parent().find('.ids').html();

            // console.log (id);
            $.ajax({

                type:"POST",
                url:"{{ url('/admin/goods/ajaxHot')}}",
                data:{id:id},
                success:function(data)
                {
                    
                    if(data == 2)
                    {
                        alert('修改失败');
                    }else if(data == 0)
                    {
                        t.html('普通');
                    }else if(data == 1)
                    {
                        t.html('推荐');
                    }
                },
                error:function()
                {
                    alert('数据异常');
                }
            });
        });
    }
    

</script>

@endsection