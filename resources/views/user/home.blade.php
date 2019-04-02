@extends('layout.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Tables
                <small>advanced tables</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Data tables</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Hover Data Table</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>职位</th>
                                    <th>类型</th>
                                    <th>地点</th>
                                    <th>招聘人数</th>
                                    <th>发布时间</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($jobs_data as $item)
                                <tr>
                                    <td>{{$item->position_name}}</td>
                                    <td>{{$item->position_type}}</td>
                                    <td>{{$item->position_address}}</td>
                                    <td>{{$item->position_num}}</td>
                                    <td>{{$item->position_time}}</td>
                                </tr>
                                    @endforeach

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
                {{$jobs_data->links()}}
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

@endsection