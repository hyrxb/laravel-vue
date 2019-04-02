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
                <li class="active">仪表盘</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">仪表盘</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                             <div class="panel panel-primary">
                                 <div class="panel-heading">
                                     <h3 class="panel-title">今日关键指标</h3>
                                 </div>
                                 <div class="panel-body">
                                     <table class="ui_trendgrid ui_trendgrid_3">
                                         <tbody>
                                         <tr>
                                             <td class="first">
                                                 <div class="ui_trendgrid_item">
                                                     <div class="ui_trendgrid_chart"></div>
                                                     <dl>
                                                         <dt><b>新关注人数</b></dt>
                                                         <dd class="ui_trendgrid_number"><strong>0</strong><em class="ui_trendgrid_unit"></em></dd>
                                                         <dd>昨天 <i class="icon_down"></i>0</dd>
                                                         <dd>本周 <i class="icon_up"></i>0</dd>
                                                         <dd>上周 <i class="icon_up"></i>0</dd>
                                                         <dd>本月 <i class="icon_up"></i>0</dd>
                                                         <dd>上月 <i class="icon_up"></i>0</dd>
                                                         <dd>本年 <i class="icon_up"></i>0</dd>
                                                         <dd>去年 <i class="icon_up"></i>0</dd>
                                                     </dl>
                                                 </div>
                                             </td>
                                             <td>
                                                 <div class="ui_trendgrid_item">
                                                     <div class="ui_trendgrid_chart"></div>
                                                     <dl>
                                                         <dt><b>取消关注人数</b></dt>
                                                         <dd class="ui_trendgrid_number"><strong>0</strong><em class="ui_trendgrid_unit"></em></dd>
                                                         <dd>昨天 <i class="icon_down"></i>0</dd>
                                                         <dd>本周 <i class="icon_up"></i>0</dd>
                                                         <dd>上周 <i class="icon_up"></i>0</dd>
                                                         <dd>本月 <i class="icon_up"></i>0</dd>
                                                         <dd>上月 <i class="icon_up"></i>0</dd>
                                                         <dd>本年 <i class="icon_up"></i>0</dd>
                                                         <dd>去年 <i class="icon_up"></i>0</dd>
                                                     </dl>
                                                 </div>
                                             </td>
                                             <td>
                                                 <div class="ui_trendgrid_item">
                                                     <div class="ui_trendgrid_chart"></div>
                                                     <dl>
                                                         <dt><b>净增关注人数</b></dt>
                                                         <dd class="ui_trendgrid_number"><strong>0</strong><em class="ui_trendgrid_unit"></em></dd>
                                                         <dd>昨天 <i class="icon_down"></i>0</dd>
                                                         <dd>本周 <i class="icon_up"></i>0</dd>
                                                         <dd>上周 <i class="icon_up"></i>0</dd>
                                                         <dd>本月 <i class="icon_up"></i>0</dd>
                                                         <dd>上月 <i class="icon_up"></i>0</dd>
                                                         <dd>本年 <i class="icon_up"></i>0</dd>
                                                         <dd>去年 <i class="icon_up"></i>0</dd>
                                                     </dl>
                                                 </div>
                                             </td>
                                             <td class="last">
                                                 <div class="ui_trendgrid_item">
                                                     <div class="ui_trendgrid_chart"></div>
                                                     <dl>
                                                         <dt><b>当前关注人数</b></dt>
                                                         <dd class="ui_trendgrid_number"><strong>0</strong><em class="ui_trendgrid_unit"></em></dd>
                                                         <dd>累积关注 <i class="icon_up"></i>0</dd>
                                                         <dd>累积取关 <i class="icon_down"></i>0</dd>
                                                     </dl>
                                                 </div>
                                             </td>
                                         </tr>
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                            <!--提示信息　start -->
                            <div class="callout callout-info">
                                <h4>Tip!</h4>
                                <p>注：以上数据以接入平台后产生的数据为准，若公众号已认证请先同步粉丝。</p>
                            </div>
                            <!--提示信息　end -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box box-success box-solid">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">风向标</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            暂无数据
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <div class="col-md-6">
                                    <div class="box box-success box-solid">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">热门应用</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            暂无数据
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                            </div>

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

<style type="text/css">
    .ui_trendgrid {
        table-layout: fixed;
        position: relative;
        width: 100%;
        margin: 20px 0px;
    }
</style>