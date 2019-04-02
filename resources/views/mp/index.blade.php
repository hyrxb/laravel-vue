@extends('layout.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                公众号管理
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">公众号管理</a></li>
                <li class="active">列表</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">公众号列表</h3>
                            <p class="pull-right"><a href="{{url('mp/add')}}" class="btn btn-primary">增加公众号</a></p>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>公众信息</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="pull-left">
                                                <img src="http://www.zxb8.cc/wp-content/uploads/2018/05/2018052206340284.jpg" width="60px;" height="60px;">
                                        </div>
                                        <div class="lpull-right text-center">
                                            <p class="p1">测试公众号</p>
                                            <p class="p2">类型：普通订阅号</p>
                                        </div>
                                    </td>
                                    <td class="text-center">正常</td>
                                    <td class="text-center">进入公众号 更改配置 接入信息 删除</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <div class="row">

            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

@endsection