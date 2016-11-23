@extends('admin.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            用户管理
            <small>用户详情</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
            <li><a href="#">用户管理</a></li>
            <li class="active">详情</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">查看用户详情</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">

                    @if(session('info'))
                    <div id="jg" class="callout callout-info">
                        <p>{{ session('info')}}</p>
                    </div>
                    @endif

                        <form action="{{ url('/admin/user/details') }}" method="get">
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
                                <th>用户编号</th>
                                <th>用户名</th>
                                <th>性别</th>
                                <th>权限</th>
                                <th>等级</th>
                                <th>手机</th>
                                <th>状态</th>
                                <th>注册时间</th>
                                <th>最后登录时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $v)
                            <tr>
                                <td class="ids">{{ $v -> id}}</td>
                                <td class="name">{{ $v -> name }}</td>
                                <td class="sex">
                                    @if(($v -> sex) == 1)
                                    男
                                    @elseif(($v -> sex) == 0)
                                    女
                                    @endif
                                 </td>
                                <td class="author">
                                    @if(($v -> author) == 1)
                                    超级管理员
                                    @elseif(($v -> author) == 0)
                                    普通用户
                                    @endif
                                </td>
                                <td class="level">
                                    @if(($v -> level) < 500)
                                    青铜会员
                                    @elseif(($v -> level) >= 500 & ($v -> level) < 1000)
                                    白银会员
                                    @elseif(($v -> level) >= 1000 & ($v -> level) < 2000)
                                    黄金会员
                                    @elseif(($v -> level) >= 2000 & ($v -> level) < 5000)
                                    铂金会员
                                    @elseif(($v -> level) >= 5000 & ($v -> level) < 10000)
                                    荣耀会员
                                    @endif
                                </td>
                                <td class="phone">{{ $v -> phone }}</td>
                                <td class="status">
                                @if($v -> status == 0)
                                    禁用
                                @elseif($v -> status == 1)
                                    启用
                                @endif
                                </td>
                                <td class="created_at">{{ $ctime}}</td>
                                <td class="updated_at">{{ $time }}</td>

                                <td><a href="{{ url('/admin/user/delete/') }}/{{ $v -> id}}">删除</a>
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
        }
</script>

@endsection