@extends('layout.main')
@section('content')
 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                资源管理
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">资源管理</a></li>
                <li class="active">添加资源</li>
            </ol>
        </section>
 <!-- Main content -->
        <section class="content">
            <!--显示错误 start-->
            @if (count($errors) > 0)
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        {{ old('Course')['title'] }}
           <!--显示错误 end -->
			<div class="row">
		        <!-- left column -->
		        <div class="col-md-12">
		          <!-- general form elements -->
		          <div class="box box-primary">
		            <div class="box-header with-border">
		              <h3 class="box-title">添加资源</h3>
		            </div>
		            <!-- /.box-header -->
		            <!-- form start -->
		            <form class="form-horizontal" action="{{url('/home/add')}}" method="POST">
		              <div class="box-body">
    		                <div class="form-group">
                              <label for="title" class="col-sm-1 control-label">标题</label>
                              <div class="col-sm-5">
                                <input type="text" class="form-control" name="title" id="title" placeholder="" value="{{ old('title', '') }}">
                              </div>
                                <div class="col-sm-6">
                                    <p class="form-control-static text-danger">{{ $errors->first('title') }}</p>
                                </div>
    		                </div>
    		                <div class="form-group">
    		                  <label for="author" class="col-sm-1 control-label">作者</label>
                              <div class="col-sm-5">
    		                      <input type="text" class="form-control" name="author" id="author" placeholder="" value="{{ old('author','') }}">
                              </div>
                                <div class="col-sm-6">
                                    <p class="form-control-static text-danger">{{ $errors->first('author') }}</p>
                                </div>
    		                </div>
                            <div class="form-group">
                              <label class="col-sm-1 control-label">栏目</label>
                               <div class="col-sm-5">
                                  <select class="form-control" name="cid">
                                    <option value="1">PHP</option>
                                    <option value="2">JAVA</option>
                                    <option value="3">PYTHON</option>
                                    <option value="4">JAVASCRIPT</option>
                                  </select>
                                </div>
                                <div class="col-sm-6">
                                    <p class="form-control-static text-danger">{{ $errors->first('cid') }}</p>
                                </div>
                            </div>
    		                <div class="form-group">
    		                	<label for="photo" class="col-sm-1 control-label">资源图片</label>
                                 <div class="col-sm-5">
        		                    <input id="input-b4b" name="upload" type="file" value="">
        		                    <input id="photo" name="photo" type="hidden" value="">
                                </div>
                                <div class="col-sm-6">
                                    <p class="form-control-static text-danger">{{ $errors->first('upload') }}</p>
                                </div>
    		                </div>
                            <div class="form-group">
                              <label for="url" class="col-sm-1 control-label">百度网盘</label>
                              <div class="col-sm-5">
                                  <input type="text" class="form-control" name="url" id="url" placeholder="">
                              </div>
                                <div class="col-sm-6">
                                    <p class="form-control-static text-danger">{{ $errors->first('url') }}</p>
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="passwd" class="col-sm-1 control-label">密码</label>
                              <div class="col-sm-5">
                                  <input type="text" class="form-control" name="passwd" id="passwd" placeholder="">
                              </div>
                                <div class="col-sm-6">
                                    <p class="form-control-static text-danger">{{ $errors->first('passwd') }}</p>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-1 control-label">摘要</label>
                              <div class="col-sm-5">
                                <textarea class="form-control" rows="3" placeholder="" name="desc"></textarea>
                               </div>
                                <div class="col-sm-6">
                                    <p class="form-control-static text-danger">{{ $errors->first('desc') }}</p>
                                </div>
                            </div>
                             <div class="form-group">
                              <label class="col-sm-1 control-label">内容</label>
                              <div class="col-sm-5">
                                <textarea class="form-control" rows="10" placeholder="" name="content"></textarea>
                               </div>
                                 <div class="col-sm-6">
                                     <p class="form-control-static text-danger">{{ $errors->first('content') }}</p>
                                 </div>
                            </div>
		              </div>
		              <!-- /.box-body -->

		              <div class="box-footer">
                          {{ csrf_field() }}
                          <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-primary">保存</button>
                          </div>
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

//    $(".up").click(function(){
//        $("#input-b4b").fileinput("upload");
//    });


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
               $("#photo").val(picdir);
          }
  });
</script>

@endsection