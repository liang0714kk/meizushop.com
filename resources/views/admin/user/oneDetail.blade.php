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
                            <tr>
                                <td class="ids">{{ $data -> id }}</td>
                                <td class="name">{{ $data -> name }}</td>
                                <td class="sex">
                                    @if(($data -> sex) == 1)
                                    男
                                    @elseif(($data -> sex) == 0)
                                    女
                                    @endif
                                 </td>
                                <td class="author">
                                    @if(($data -> author) == 1)
                                    超级管理员
                                    @elseif(($data -> author) == 0)
                                    普通用户
                                    @endif
                                </td>
                                <td class="level">
                                    @if(($data -> level) < 500)
                                    青铜会员
                                    @elseif(($data -> level) >= 500 & ($data -> level) < 1000)
                                    白银会员
                                    @elseif(($data -> level) >= 1000 & ($data -> level) < 2000)
                                    黄金会员
                                    @elseif(($data -> level) >= 2000 & ($data -> level) < 5000)
                                    铂金会员
                                    @elseif(($data -> level) >= 5000 & ($data -> level) < 10000)
                                    荣耀会员
                                    @endif
                                </td>
                                <td class="phone">{{ $data -> phone }}</td>
                                <td class="status">
                                @if($data -> status == 0)
                                    禁用
                                @elseif($data -> status == 1)
                                    启用
                                @endif
                                </td>
                                <td class="created_at">{{ date('Y-m-d H:i:s',$data -> created_at) }}</td>
                                <td class="updated_at">{{ date('Y-m-d H:i:s',$data -> updated_at) }}</td>

                                <td><a href="{{ url('/admin/user/delete/') }}/{{ $data -> id}}">删除</a>
                            </tr>
                            </tbody>
                        </table>
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