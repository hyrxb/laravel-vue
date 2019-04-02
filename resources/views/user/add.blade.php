@extends('layout.main')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}"> 
 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                会员管理
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">会员管理</a></li>
                <li class="active">添加会员</li>
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
		              <h3 class="box-title">添加会员</h3>
		            </div>
		            <!-- /.box-header -->
		            <!-- form start -->
		            <form class="form-horizontal">
		              <div class="box-body">
    		                <div class="form-group">
    		                  <label for="title" class="col-sm-2 control-label">标题</label>
                              <div class="col-sm-10">
    		                    <input type="text" class="form-control" name="title" id="title" placeholder="">
                              </div>
    		                </div>
    		                <div class="form-group">
    		                  <label for="author" class="col-sm-2 control-label">作者</label>
                              <div class="col-sm-10">
    		                      <input type="text" class="form-control" name="author" id="author" placeholder="">
                              </div>
    		                </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">栏目</label>
                               <div class="col-sm-10">
                                  <select class="form-control">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                  </select>
                                </div>
                            </div>
    		                <div class="form-group">
    		                	<label for="idcard_front" class="col-sm-2 control-label">资源图片</label>
                                 <div class="col-sm-10">
        		                    <input id="input-b4b" name="idcard_front" type="file" value="">
        		                    <input id="idcard_front" name="id_card_front" type="hidden" value="">
                                </div>
    		                </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">摘要</label>
                              <div class="col-sm-10">
                                <textarea class="form-control" rows="3" placeholder=""></textarea>
                               </div>
                            </div>
                             <div class="form-group">
                              <label class="col-sm-2 control-label">内容</label>
                              <div class="col-sm-10">
                                <textarea class="form-control" rows="10" placeholder=""></textarea>
                               </div>
                            </div>

                            <div class="form-group">
                                  <label class="col-sm-2 control-label"></label>
                                  <div class="checkbox col-sm-10">
                                    <label>
                                      <input type="checkbox">
                                      留言
                                    </label>
                                  </div>
                            </div>
		              </div>
		              <!-- /.box-body -->

		              <div class="box-footer">
		                <button type="submit" class="btn btn-primary">保存</button>
		              </div>
		            </form>
		          </div>
		          <!-- /.box -->
		        </div>
		        <!--/.col (left) -->
      		</div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>


@endsection

@section('js')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/js/fileinput.min.js"></script>


<script type="text/javascript">


// post 请求 报 419错误 csrf  校验

$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

$("#input-b4b").fileinput({
            language: 'zh', //设置语言
            uploadUrl: "{{ url('/home/upload') }}", //上传的地址
            allowedFileExtensions: ['jpg', 'jpeg', 'gif', 'png'],//接收的文件后缀
            browseLabel: '选择文件',
            removeLabel: '删除文件',
            removeTitle: '删除选中文件',
            cancelLabel: '取消',
            cancelTitle: '取消上传',
            uploadLabel: '上传',
            uploadTitle: '上传选中文件',
            dropZoneTitle: "请通过拖拽图片文件放到这里",
            dropZoneClickTitle: "或者点击此区域添加图片",
            uploadAsync: true, //默认异步上传
            showUpload: true, //是否显示上传按钮
            showRemove: true, //显示移除按钮
            showPreview: true, //是否显示预览
            showCaption: false,//是否显示标题
            browseClass: "btn btn-primary", //按钮样式
            dropZoneEnabled: true,//是否显示拖拽区域
            //minImageWidth: 50, //图片的最小宽度
            //minImageHeight: 50,//图片的最小高度
            //maxImageWidth: 1000,//图片的最大宽度
            //maxImageHeight: 1000,//图片的最大高度
            maxFileSize: 2000,//单位为kb，如果为0表示不限制文件大小
            //minFileCount: 0,
            maxFileCount: 10, //表示允许同时上传的最大文件个数
            enctype: 'multipart/form-data',
            validateInitialCount: true,
            previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
            msgFilesTooMany: "选择上传的文件数量({n}) 超过允许的最大数值{m}！"
 })/*.on("filebatchselected", function (event, files) {
            $(this).fileinput("upload");
 })*/
 .on("fileuploaded", function (event, data) {
          if (data.response) {
               var picdir = data.response;
               $("#idcard_front").val(picdir);
       }
  });
</script>

@endsection