@extends('admin.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            用户管理
            <small>用户列表</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
            <li><a href="#">用户管理</a></li>
            <li class="active">列表</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">查看用户基本信息</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">

                    @if(session('info'))
                    <div id="jg" class="callout callout-info">
                        <p>{{ session('info')}}</p>
                    </div>
                    @endif

                        <form action="{{ url('/admin/user/index') }}" method="get">
                        <div class="row">
                            <div class="col-md-2">
                            <div class="form-group">
                            <select name="num" class="form-control select2, col-md-2"">
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
                    <div class="box-body">

                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>昵称</th>
                                <th>头像</th>
                                <th>邮箱</th>
                                <th>状态</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $v)
                            <tr>
                                <td class="ids">{{ $v -> id }}</td>
                                <td class="nickname">{{ $v -> nickname }}</td>
                                <td><img width="60px" height="60px" src="/uploads/avater/{{ $v -> photo }}" /></td>
                                <td>{{ $v -> email }}</td>
                                <td class="status">
                                @if($v -> status == 0)
                                    禁用
                                @elseif($v -> status == 1)
                                    启用
                                @endif
                                </td>
                                <td><a href="{{ url('/admin/user/edit/') }}/{{ $v -> id}}">编辑</a> | <a href="{{ url('/admin/user/delete/') }}/{{ $v -> id}}">删除</a> | <a href="{{ url('/admin/user/oneDetail/') }}/{{ $v -> id}}">详情</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- {!! $data -> appends($request) ->  render() !!} -->
                        {!! $data -> appends($request) -> render() !!}
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

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
                url:"{{ url('/admin/user/ajaxStatus') }}",
                data:{id:id},
                success:function(data)
                {
                    if(data == 2)
                    {
                        alert('修改失败');
                    }else if(data == 0)
                    {
                        t.html('禁用');
                    }else if(data == 1)
                    {
                        t.html('启用');
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