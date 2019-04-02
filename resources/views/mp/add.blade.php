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
                <li class="active">增加公众号</li>
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
		            <form  class="form-horizontal" action="{{url('/home/add')}}" method="POST">
		              <div class="box-body">
    		                <div class="form-group">
                              <label for="title" class="col-sm-1 control-label">公众号名称</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="title" id="title" placeholder="" value="{{ old('title', '') }}">
                              </div>
                                <div class="col-sm-4">
                                    <p class="form-control-static text-danger">{{ $errors->first('title') }}</p>
                                </div>
    		                </div>
    		                <div class="form-group">
    		                  <label for="" class="col-sm-1 control-label">类型</label>
                              <div class="col-sm-7">
                                  <label class="radio-inline">
                                      <input type="radio" name="inlineRadioOptions"  value="1"> 普通订阅号
                                  </label>
                                  <label class="radio-inline">
                                      <input type="radio" name="inlineRadioOptions"  value="2"> 认证订阅号
                                  </label>
                                  <label class="radio-inline">
                                      <input type="radio" name="inlineRadioOptions"  value="3"> 普通服务号
                                  </label>
                                  <label class="radio-inline">
                                      <input type="radio" name="inlineRadioOptions"  value="4"> 认证服务号/认证媒体/政府订阅号
                                  </label>
                              </div>
                                <div class="col-sm-4">
                                    <p class="form-control-static text-danger">{{ $errors->first('author') }}</p>
                                </div>
    		                </div>
                            <div class="form-group">
                              <label for="appid" class="col-sm-1 control-label">APPID</label>
                              <div class="col-sm-7">
                                  <input type="text" class="form-control" name="appid" id="appid" placeholder="">
                              </div>
                              <div class="col-sm-4">
                                  <p class="form-control-static text-danger">{{ $errors->first('appid') }}</p>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="appsecret" class="col-sm-1 control-label">APPSECRET</label>
                              <div class="col-sm-7">
                                  <input type="text" class="form-control" name="appsecret" id="appsecret" placeholder="">
                              </div>
                              <div class="col-sm-4">
                                  <p class="form-control-static text-danger">{{ $errors->first('appsecret') }}</p>
                              </div>
                            </div>
                          <div class="form-group">
                              <label for="origin_id" class="col-sm-1 control-label">原始ID</label>
                              <div class="col-sm-7">
                                  <input type="text" class="form-control" name="origin_id" id="origin_id" placeholder="">
                              </div>
                              <div class="col-sm-4">
                                  <p class="form-control-static text-danger">{{ $errors->first('origin_id') }}</p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="mp_number" class="col-sm-1 control-label">微信号</label>
                              <div class="col-sm-7">
                                  <input type="text" class="form-control" name="mp_number" id="mp_number" placeholder="">
                              </div>
                              <div class="col-sm-4">
                                  <p class="form-control-static text-danger">{{ $errors->first('mp_number') }}</p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="logo" class="col-sm-1 control-label">LOGO</label>
                              <div class="col-sm-7">
                                  <div class="logo-upload-thumb" style="padding: 5px; border: #e6e6e6 solid 1px; float: left; ">
                                      <img class="form_logo" data-picid="0" src="http://wx.cc/uploads/24/2a3d614ab5f25b950f44182e46d482.jpg" width="150" height="90">
                                  </div>
                                  <div class="logo-upload" style="margin-bottom: 10px; margin-left: 5px; float: left; ">
                                      <button type="button" class="layui-btn" id="logo">
                                          <i class="layui-icon">&#xe67c;</i>上传图片
                                      </button>
                                      <input type="hidden" name="mp_logo">
                                  </div>
                              </div>
                              <div class="col-sm-4">
                                  <p class="form-control-static text-danger">{{ $errors->first('logo') }}</p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="qrcode" class="col-sm-1 control-label">二维码</label>
                              <div class="col-sm-7">
                                  <div class="qrcode-upload-thumb" style="padding: 5px; border: #e6e6e6 solid 1px; float: left; ">
                                      <img class="form_qrcode" data-picid="0" src="http://wx.cc/uploads/24/2a3d614ab5f25b950f44182e46d482.jpg" width="150" height="90">
                                  </div>
                                  <div class="qrcode-upload" style="margin-bottom: 10px; margin-left: 5px; float: left; ">
                                      <button type="button" class="layui-btn" id="qrcode">
                                          <i class="layui-icon">&#xe67c;</i>上传图片
                                      </button>
                                      <input type="hidden" name="mp_qrcode">
                                  </div>
                              </div>
                              <div class="col-sm-4">
                                  <p class="form-control-static text-danger">{{ $errors->first('qrcode') }}</p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="" class="col-sm-1 control-label">开关状态</label>
                              <div class="col-sm-7">
                                  <label class="radio-inline">
                                      <input type="radio" name="status"  value="1"> 开启
                                  </label>
                                  <label class="radio-inline">
                                      <input type="radio" name="status"  value="2"> 关闭
                                  </label>
                              </div>
                              <div class="col-sm-4">
                                  <p class="form-control-static text-danger">{{ $errors->first('status') }}</p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-1 control-label">关闭回复</label>
                              <div class="col-sm-7">
                                 <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                              </div>
                              <div class="col-sm-4">
                                  <p class="form-control-static text-danger">{{ $errors->first('status') }}</p>
                              </div>
                          </div>

		              </div>
		              <!-- /.box-body -->

		              <div class="box-footer">
                          {{ csrf_field() }}
                          <div class="col-sm-offset-3 col-sm-9">
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

    //上传二维码
    layui.use('upload', function(){
        var upload = layui.upload;

        //执行实例
        var uploadInst = upload.render({
            elem: '#qrcode' //绑定元素
            ,url: '{{url('mp/upload')}}' //上传接口
            ,accept:'images'
            ,field:'qrcode' //设定文件域的字段名
            ,size: "3072"
            ,exts:'jpg|png|gif|bmp|jpeg'
            ,done: function(res){
                //上传完毕回调
                if(res.code==200){
                    $('input[name="mp_qrcode"]').val(res.img)
                    $('.form_qrcode').attr('src',res.img);
                }else{
                    layer.alert(res.msg);
                }
            }
            ,error: function(){
                //请求异常回调
            }
        });
    });

    //上传logo
    layui.use('upload', function(){
        var load;
        var upload = layui.upload;
        var uploadInst = upload.render({
            elem: '#logo'
            ,url: '{{url('mp/logo')}}'
            ,accept: 'images' //普通文件
            ,field:'logo'
            ,size: "3072"
            ,done: function(res){
                if(res.code==200){
                    $('input[name="mp_logo"]').val(res.img)
                    $('.form_logo').attr('src',res.img);
                }else{
                    layer.alert(res.msg);
                }
            }
            ,error: function(){
                //请求异常回调
            }
        });
    });

</script>

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