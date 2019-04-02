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
                          <div class="mp-menu">
                              <div class="mobile-preview pull-left">
                                  <div class="mobile-header">测试公众号</div>
                                  <div class="mobile-body"></div>
                                  <ul class="mobile-footer">
                                      <li class="parent-menu" style="width: 50%;"><a class="active"><i class="icon-sub hide"></i> <span>一级菜单</span></a><div class="sub-menu text-center"><ul><li class="menu-add"><a><i class="icon-add"></i></a></li></ul><i class="arrow arrow_out"></i><i class="arrow arrow_in"></i></div></li><li class="parent-menu menu-add" style="width: 50%;">
                                          <a><i class="icon-add"></i></a>
                                      </li>
                                  </ul>
                              </div>
                              <div class="pull-left" style="position:absolute">
                                  <div class="popover fade right up in menu-editor">
                                      <div class="arrow"></div>
                                      <h3 class="popover-title">
                                          菜单名称

                                          <a class="pull-right menu-delete">删除</a>

                                      </h3>
                                      <div class="popover-content menu-content"><form class="form-horizontal ">
                                              <div class="layui-form-item" style="margin-top:50px">
                                                  <label class="layui-form-label">菜单名称</label>
                                                  <div class="layui-input-block">
                                                      <input name="menu-name" class="layui-input">
                                                      <span class="layui-form-mid layui-word-aux">字数不超过13个汉字或40个字母</span>
                                                  </div>
                                              </div>
                                              <div class="layui-form-item" style="margin-top:30px">
                                                  <label class="layui-form-label">菜单内容</label>
                                                  <div class="layui-input-block">
                                                      <!--<label class="col-xs-5 font-noraml">-->
                                                      <!--<input class="cuci-radio" type="radio" name="menu-type" value="text"> 文字消息-->
                                                      <!--</label>-->
                                                      <label class="col-xs-5 font-noraml">
                                                          <input class="cuci-radio" type="radio" name="menu-type" value="keys"> 关键字
                                                      </label>
                                                      <label class="col-xs-5 font-noraml">
                                                          <input class="cuci-radio" type="radio" name="menu-type" value="view"> 跳转网页
                                                      </label>
                                                      <label class="col-xs-5 font-noraml">
                                                          <input class="cuci-radio" type="radio" name="menu-type" value="event"> 事件功能
                                                      </label>
                                                      <label class="col-xs-5 font-noraml">
                                                          <input class="cuci-radio" type="radio" name="menu-type" value="miniprogram"> 小程序
                                                      </label>
                                                      <!--<label class="col-xs-5 font-noraml">-->
                                                      <!--<input class="cuci-radio" type="radio" name="menu-type" value="customservice"> 多客服-->
                                                      <!--</label>-->
                                                  </div>
                                              </div>
                                              <div class="layui-form-item editor-content-input" style="margin-top:30px"></div>
                                          </form></div>
                                  </div>
                              </div>
                              <div class="hide menu-editor-parent-tpl">
                                  <form class="layui-form">
                                      <p>已添加子菜单，仅可设置菜单名称。</p>
                                      <div class="layui-form-item" style="margin-top:50px">
                                          <label class="layui-form-label">菜单名称</label>
                                          <div class="layui-input-block">
                                              <input name="menu-name" class="layui-input">
                                              <span class="layui-form-mid layui-word-aux">字数不超过5个汉字或16个字母</span>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                              <div class="hide menu-editor-content-tpl layui-form">
                                  <form class="form-horizontal ">
                                      <div class="layui-form-item" style="margin-top:50px">
                                          <label class="layui-form-label">菜单名称</label>
                                          <div class="layui-input-block">
                                              <input name="menu-name" class="layui-input">
                                              <span class="layui-form-mid layui-word-aux">字数不超过13个汉字或40个字母</span>
                                          </div>
                                      </div>
                                      <div class="layui-form-item" style="margin-top:30px">
                                          <label class="layui-form-label">菜单内容</label>
                                          <div class="layui-input-block">
                                              <!--<label class="col-xs-5 font-noraml">-->
                                              <!--<input class="cuci-radio" type="radio" name="menu-type" value="text"> 文字消息-->
                                              <!--</label>-->
                                              <label class="col-xs-5 font-noraml">
                                                  <input class="cuci-radio" type="radio" name="menu-type" value="keys"> 关键字
                                              </label>
                                              <label class="col-xs-5 font-noraml">
                                                  <input class="cuci-radio" type="radio" name="menu-type" value="view"> 跳转网页
                                              </label>
                                              <label class="col-xs-5 font-noraml">
                                                  <input class="cuci-radio" type="radio" name="menu-type" value="event"> 事件功能
                                              </label>
                                              <label class="col-xs-5 font-noraml">
                                                  <input class="cuci-radio" type="radio" name="menu-type" value="miniprogram"> 小程序
                                              </label>
                                              <!--<label class="col-xs-5 font-noraml">-->
                                              <!--<input class="cuci-radio" type="radio" name="menu-type" value="customservice"> 多客服-->
                                              <!--</label>-->
                                          </div>
                                      </div>
                                      <div class="layui-form-item editor-content-input" style="margin-top:30px"></div>
                                  </form>
                              </div>
                              <div style="clear:both"></div>
                              <div style="width:830px;padding-top:40px;text-align:center">
                                  <button class="layui-btn menu-submit" lay-filter="formDemo">保存发布</button>
                                  <button data-load="" class="layui-btn layui-btn-danger">取消发布</button>
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

<script>
    $(function () {
        /**
         * 菜单事件构造方法
         * @returns {menu.index_L2.menu}
         */
        var menu = function () {
            this.version = '1.0';
            this.$btn;
            this.listen();
        };
        /**
         * 控件默认事件
         * @returns {undefined}
         */
        var layer;
        layui.use('layer', function(){
            layer = layui.layer;

        });
        menu.prototype.listen = function () {
            var self = this;
            $('.mobile-footer').on('click', 'li a', function () {
                self.$btn = $(this);
                self.$btn.parent('li').hasClass('menu-add') ? self.add() : self.checkShow();
            }).find('li:first a:first').trigger('click');
            $('.menu-delete').on('click', function () {
                var index = layer.confirm('确定删除吗？', function () {
                    self.del(), layer.close(index);
                });
            });
            $('.menu-submit').on('click', function () {
                self.submit();
            });
        };
        /**
         * 添加一个菜单
         * @returns {undefined}
         */
        menu.prototype.add = function () {
            var $add = this.$btn.parent('li'), $ul = $add.parent('ul');
            if ($ul.hasClass('mobile-footer')) { /* 添加一级菜单 */
                var $li = $('<li class="parent-menu"><a class="active"><i class="icon-sub hide"></i> <span>一级菜单</span></a></li>').insertBefore($add);
                this.$btn = $li.find('a');
                $('<div class="sub-menu text-center hide"><ul><li class="menu-add"><a><i class="icon-add"></i></a></li></ul><i class="arrow arrow_out"></i><i class="arrow arrow_in"></i></div>').appendTo($li);
            } else { /* 添加二级菜单 */
                this.$btn = $('<li><a class="bottom-border"><span>二级菜单</span></a></li>').prependTo($ul).find('a');
            }
            this.checkShow();
        };
        /**
         * 数据校验显示
         * @returns {unresolved}
         */
        menu.prototype.checkShow = function () {
            var $li = this.$btn.parent('li'), $ul = $li.parent('ul');
            /* 选中一级菜单时显示二级菜单 */
            if ($li.hasClass('parent-menu')) {
                $('.parent-menu .sub-menu').not(this.$btn.parent('li').find('.sub-menu').removeClass('hide')).addClass('hide');
            }

            /* 一级菜单添加按钮 */
            var $add = $('li.parent-menu:last');
            $add.siblings('li').length>= 3 ? $add.addClass('hide') : $add.removeClass('hide');
            /* 二级菜单添加按钮 */
            $add.siblings('li').map(function () {
                var $add = $(this).find('ul li:last');
                $add.siblings('li').length >= 5 ? $add.addClass('hide') : $add.removeClass('hide');
            });
            /* 处理一级菜单 */
            var parentWidth = 100 / $('li.parent-menu:visible').length + '%';
            $('li.parent-menu').map(function () {
                var $icon = $(this).find('.icon-sub');
                $(this).width(parentWidth).find('ul li').length > 1 ? $icon.removeClass('hide') : $icon.addClass('hide');
            });
            /* 更新选择中状态 */
            $('.mobile-footer a.active').not(this.$btn.addClass('active')).removeClass('active');
            this.renderEdit();
            return $ul;
        };
        /**
         * 删除当前菜单
         * @returns {undefined}
         */
        menu.prototype.del = function () {
            var $li = this.$btn.parent('li'), $ul = $li.parent('ul');
            var $default = function () {
                if ($li.prev('li').length > 0) {
                    return $li.prev('li');
                }
                if ($li.next('li').length > 0 && !$li.next('li').hasClass('menu-add')) {
                    return $li.next('li');
                }
                if ($ul.parents('li.parent-menu').length > 0) {
                    return $ul.parents('li.parent-menu');
                }
                return $('null');
            }.call(this);
            $li.remove();
            this.$btn = $default.find('a:first');
            this.checkShow();
        };
        /**
         * 显示当前菜单的属性值
         * @returns {undefined}
         */
        menu.prototype.renderEdit = function () {
            var $span = this.$btn.find('span'), $li = this.$btn.parent('li'), $ul = $li.parent('ul');
            var $html = '';
            if ($li.find('ul li').length > 1) { /*父菜单*/
                $html = $($('.menu-editor-parent-tpl').html());
                $html.find('input[name="menu-name"]').val($span.text()).on('change keyup', function () {
                    $span.text(this.value || ' ');
                });
                $('.menu-editor .menu-content').html($html);
            } else {
                $html = $($('.menu-editor-content-tpl').html());
                $html.find('input[name="menu-name"]').val($span.text()).on('change keyup', function () {
                    $span.text(this.value || ' ');
                });
                $('.menu-editor .menu-content').html($html);
                var type = $span.attr('data-type') || 'text';
                $html.find('input[name="menu-type"]').on('click', function () {
                    $span.attr('data-type', this.value || 'text');
                    var content = $span.data('content') || '';
                    var type = this.value;
                    var html = function () {
                        switch (type) {
                            case 'miniprogram':
                                var tpl = '<div><div class="layui-form-item"><label class="layui-form-label">appid</label><div class="layui-input-block"><input type="text" name="appid" required="" lay-verify="required" placeholder="appid" autocomplete="off" class="layui-input" value="{appid}"></div></div><div class="layui-form-item"><label class="layui-form-label">url</label><div class="layui-input-block"><input type="text" name="url" required="" lay-verify="required" placeholder="url" autocomplete="off" class="layui-input" value="/mp/mp/menu/mid/1.html"></div></div><div class="layui-form-item"><label class="layui-form-label">pagepath</label><div class="layui-input-block"><input type="text" name="pagepath" required="" lay-verify="required" placeholder="pagepath" autocomplete="off" class="layui-input" value="{pagepath}"></div></div></div>';
                                var _appid = '', _pagepath = '', _url = '';
                                if (content.indexOf(',') > 0) {
                                    _appid = content.split(',')[0] || '';
                                    _url = content.split(',')[1] || '';
                                    _pagepath = content.split(',')[2] || '';
                                }
                                $span.data('appid', _appid), $span.data('url', _url), $span.data('pagepath', _pagepath);
                                return tpl.replace('{appid}', _appid).replace('/mp/mp/menu/mid/1.html', _url).replace('{pagepath}', _pagepath);
                            case 'customservice':
                            case 'text':
                                return '<div>回复内容<textarea style="resize:none;height:225px" name="content" class="form-control input-sm">{content}</textarea></div>'.replace('{content}', content);
                            case 'view':
                                return '<div class="layui-form-item layui-form-text"><label class="layui-form-label">跳转地址</label><div class="layui-input-block"><textarea placeholder="请输入内容" class="layui-textarea" name="content">{content}</textarea></div></div>'.replace('{content}', content);
                            case 'keys':
                                return '<div class="layui-form-item layui-form-text"><label class="layui-form-label">匹配内容</label><div class="layui-input-block"><textarea placeholder="请输入内容" class="layui-textarea" name="content">{content}</textarea></div></div>'.replace('{content}', content);
                            case 'event':
                                var options = {
                                    'scancode_push': '扫码推事件',
                                    'scancode_waitmsg': '扫码推事件且弹出“消息接收中”提示框',
                                    'pic_sysphoto': '弹出系统拍照发图',
                                    'pic_photo_or_album': '弹出拍照或者相册发图',
                                    'pic_weixin': '弹出微信相册发图器',
                                    'location_select': '弹出地理位置选择器'};
                                var select = [], tpl = '<div class="layui-form-item layui-form-text" style="margin-bottom: auto;"><label class="layui-form-label"></label><div><label><input class="cuci-radio" name="content" type="radio" {checked} value="{value}"> {title}</label></div></div>';
                                if (!(options[content] || false)) {
                                    content = 'scancode_push';
                                    $span.data('content', content);
                                }
                                for (var i in options) {
                                    select.push(tpl.replace('{value}', i).replace('{title}', options[i]).replace('{checked}', (i === content) ? 'checked' : ''));
                                }
                                return select.join('');
                        }
                    }.call(this);
                    var $html = $(html), $input = $html.find('input,textarea');
                    $input.on('change keyup click', function () {
                        // 将input值写入到span上
                        $span.data(this.name, $(this).val() || $(this).html());
                        // 如果是小程序，合并内容到span的content上
                        if (type === 'miniprogram') {
                            $span.data('content', $span.data('appid') + ',' + $span.data('url') + ',' + $span.data('pagepath'));
                        }
                    });
                    $('.editor-content-input').html($html);
                }).filter('input[value="{type}"]'.replace('{type}', type)).trigger('click');
            }
        };
        /**
         * 提交数据
         * @returns {undefined}
         */
        menu.prototype.submit = function () {
            var data = [];
            function getdata($span) {
                var menudata = {};
                menudata.name = $span.text();
                menudata.type = $span.attr('data-type');
                menudata.content = $span.data('content') || '';
                return menudata;
            }

            $('li.parent-menu').map(function (index, item) {
                if (!$(item).hasClass('menu-add')) {
                    var menudata = getdata($(item).find('a:first span'));
                    menudata.index = index + 1;
                    menudata.pindex = 0;
                    menudata.sub = [];
                    menudata.sort = index;
                    data.push(menudata);
                    $(item).find('.sub-menu ul li:not(.menu-add) span').map(function (ii, span) {
                        var submenudata = getdata($(span));
                        submenudata.index = (index + 1) + '' + (ii + 1);
                        submenudata.pindex = menudata.index;
                        submenudata.sort = ii;
                        data.push(submenudata);
                    });
                }
            });
//            console.log(data);return;
            var data = (data == '')?'':data;
            var load = layer.load(1);
            $.post(
                '/mp/mp/menuedit/mid/1.html',
                {data:data},
                function (res) {
                    if(res.status=='0'){
                        layer.close(load);
                        layer.alert(res.msg);
                    }
                    if(res.status=='1'){
                        layer.close(load);
                        layer.msg(res.msg,{time:1000},function () {

                        });
                    }
                },
                "json"
            )
        };
        new menu();
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


<style type="text/css">
    .menu { padding: 13px 0px; height: auto; min-height: 550px; }
    .menu dl { line-height: 34px; border-bottom: 1px solid rgb(231, 231, 235); }
    .menu dl:last-child { border-bottom: medium none; }
    .menu dl a { display: block; color: rgb(34, 34, 34); }
    .menu dl a:hover { text-decoration: none; background: rgb(244, 245, 249) none repeat scroll 0% 0%; }
    .menu dl dt { color: rgb(141, 141, 141); }
    .menu dl dt .type-ico { margin-left: 30px; }
    .menu dl dd a { padding-left: 58px; }
    .menu .selected a, .menu .selected a:hover { color: rgb(255, 255, 255); background: rgb(68, 181, 73) none repeat scroll 0% 0%; }
    .menu .type-ico { display: inline-block; width: 20px; font-size: 24px; margin: -3px 7px 0px 0px; vertical-align: middle;  }
    .menu .ico-trade { background-position: 0px -20px; }
    .menu .ico-settle { background-position: 0px -40px; }
    .menu .ico-bill { background-position: 0px -60px; }
    .menu .ico-fund { background-position: 0px -80px; }

    .mobile-preview { -moz-user-select: none; -webkit-user-select: none; -ms-user-select: none; -khtml-user-select: none; user-select: none;}
    .menu-editor { left: 317px; display: block; max-width: 500px; width: 500px; height: 580px; border-radius: 0; border-color: #e7e7eb; box-shadow: none}
    .menu-editor .arrow { top: auto !important; bottom: 15px}
    .menu-editor .popover-title { margin-top: 0}
    .menu-delete { font-weight: 400; font-size: 12px;}
    .menu-submit { margin-right: 10px}

    @charset "UTF-8";
    .mobile-preview{position:relative;width:317px;height:580px;background:url("../images/mobile_head.png") no-repeat 0 0;border:1px solid #e7e7eb}
    .mobile-preview .mobile-header{color:#fff;text-align:center;padding-top:30px;font-size:15px;width:auto;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;word-wrap:normal;margin:0 30px;-webkit-pointer-events:none;pointer-events:none;-webkit-user-select:none;-moz-user-select:none;user-select:none}
    .mobile-body{width:100%;position:absolute;bottom:0;top:60px}
    .mobile-body iframe{width:100%;height:100%;background:#fff}
    .mobile-footer{list-style-type:none;margin:0;position:absolute;bottom:0;left:0;right:0;border-top:1px solid #e7e7eb;background:url("../images/mobile_foot.png") no-repeat 0 0;padding-left:43px}
    .mobile-footer li{width:33.33%;line-height:50px;position:relative;float:left;text-align:center}
    .mobile-footer li a{display:block;border:1px solid rgba(255, 255, 255, 0);border-left:1px solid #e7e7eb;width:auto;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;word-wrap:normal;color:#616161;text-decoration:none}
    .mobile-footer li a.active{background-color:#fff;border:1px solid #44b549 !important}
    .mobile-footer .icon-add{background:url("http://wx.cc/public/static/admin/images/index.png") 0 0 no-repeat;width:14px;height:14px;vertical-align:middle;display:inline-block;margin-top:-2px;border-bottom:none !important}
    .mobile-footer .icon-sub{background:url("http://wx.cc/public/static/admin/images/index.png") 0 -48px no-repeat;width:7px;height:7px;vertical-align:middle;display:inline-block;margin-right:2px;margin-top:-2px}
    .mobile-footer .sub-menu{position:absolute;border-radius:3px;border:1px solid #d0d0d0;display:block;bottom:60px;width:100%;background-color:#fafafa}
    .mobile-footer .sub-menu ul,
    .mobile-footer .sub-menu li{padding:0;display:block;width:100%;float:none;z-index:11}
    .mobile-footer .sub-menu li a{border:1px solid rgba(255, 255, 255, 0)}
    .mobile-footer .sub-menu li a.bottom-border{border-bottom:1px solid #e7e7eb}
    .mobile-footer .arrow{position:absolute;left:50%;margin-left:-6px}
    .mobile-footer .arrow_in, .mobile-footer .arrow_out{z-index:10;width:0;height:0;display:inline-block;border-width:6px;border-style:dashed;border-color:transparent;border-bottom-width:0;border-top-style:solid}
    .mobile-footer .arrow_in{bottom:-5px;border-top-color:#fafafa}
    .mobile-footer .arrow_out{bottom:-6px;border-top-color:#d0d0d0}

    .row { margin-right: -15px; margin-left: -15px; }
    .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 { position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; }
    .col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 { float: left; }
    .col-xs-10 { width: 83.3333%; }
    .col-xs-8 { width: 66.6667%; }
    .col-xs-6 { width: 50%; }
    .col-xs-5 { width: 41.6667%; }
    .col-xs-3 { width: 25%; }
    .col-xs-offset-1 { margin-left: 8.33333%; }
    .table-striped > tbody > tr:nth-of-type(2n+1) { background-color: rgb(249, 249, 249); }
    @media screen and (max-width: 767px) {
    }
    label { display: inline-block; max-width: 100%; margin-bottom: 5px;}
    input[type="radio"], input[type="checkbox"] { margin: 4px 0px 0px; line-height: normal; }
    input[type="file"]:focus, input[type="radio"]:focus, input[type="checkbox"]:focus { outline-offset: -2px; }
    .form-control { display: block; width: 100%; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.42857; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255); background-image: none; border: 1px solid rgb(204, 204, 204); border-radius: 4px; box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset; transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s; }
    .form-control:focus { border-color: rgb(102, 175, 233); outline: 0px none; box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(102, 175, 233, 0.6); }
    .form-control::-moz-placeholder { color: rgb(153, 153, 153); opacity: 1; }
    textarea.form-control { height: auto; }
    @media not all {
    }
    .form-group { margin-bottom: 15px; }
    .input-sm { height: 30px; padding: 5px 10px; font-size: 12px; line-height: 1.5; border-radius: 3px; }
    textarea.input-sm, select.input-sm[multiple] { height: auto; }
    .help-block { display: block; margin-top: 5px; margin-bottom: 10px; color: rgb(115, 115, 115); }
    .form-horizontal .form-group { margin-right: -15px; margin-left: -15px; }
    .fade { opacity: 0; transition: opacity 0.15s linear 0s; }
    .fade.in { opacity: 1; }
    .btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) { border-radius: 0px; }
    .btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) { border-top-right-radius: 0px; border-bottom-right-radius: 0px; }
    .btn-group > .btn:last-child:not(:first-child), .btn-group > .dropdown-toggle:not(:first-child) { border-top-left-radius: 0px; border-bottom-left-radius: 0px; }
    .btn-group > .btn-group:not(:first-child):not(:last-child) > .btn { border-radius: 0px; }
    .btn-group > .btn-group:first-child:not(:last-child) > .btn:last-child, .btn-group > .btn-group:first-child:not(:last-child) > .dropdown-toggle { border-top-right-radius: 0px; border-bottom-right-radius: 0px; }
    .btn-group > .btn-group:last-child:not(:first-child) > .btn:first-child { border-top-left-radius: 0px; border-bottom-left-radius: 0px; }
    .btn-group-vertical > .btn:not(:first-child):not(:last-child) { border-radius: 0px; }
    .btn-group-vertical > .btn:first-child:not(:last-child) { border-radius: 4px 4px 0px 0px; }
    .btn-group-vertical > .btn:last-child:not(:first-child) { border-radius: 0px 0px 4px 4px; }
    .btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn { border-radius: 0px; }
    .btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child, .btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle { border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; }
    .btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child { border-top-left-radius: 0px; border-top-right-radius: 0px; }
    .input-group-addon:not(:first-child):not(:last-child), .input-group-btn:not(:first-child):not(:last-child), .input-group .form-control:not(:first-child):not(:last-child) { border-radius: 0px; }
    .input-group .form-control:first-child, .input-group-addon:first-child, .input-group-btn:first-child > .btn, .input-group-btn:first-child > .btn-group > .btn, .input-group-btn:first-child > .dropdown-toggle, .input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle), .input-group-btn:last-child > .btn-group:not(:last-child) > .btn { border-top-right-radius: 0px; border-bottom-right-radius: 0px; }
    .input-group .form-control:last-child, .input-group-addon:last-child, .input-group-btn:last-child > .btn, .input-group-btn:last-child > .btn-group > .btn, .input-group-btn:last-child > .dropdown-toggle, .input-group-btn:first-child > .btn:not(:first-child), .input-group-btn:first-child > .btn-group:not(:first-child) > .btn { border-top-left-radius: 0px; border-bottom-left-radius: 0px; }
    .nav { padding-left: 0px; margin-bottom: 0px; list-style: outside none none; }
    .breadcrumb > li + li::before { padding: 0px 5px; color: rgb(204, 204, 204); content: "/ "; }
    @media screen and (min-width: 768px) {
    }
    .popover { position: absolute; top: 0px; left: 0px; z-index: 1060; display: none; max-width: 276px; padding: 1px; font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; font-size: 14px; font-style: normal; font-weight: normal; line-height: 1.42857; text-align: start; text-decoration: none; text-shadow: none; text-transform: none; letter-spacing: normal; word-break: normal; word-spacing: normal; overflow-wrap: normal; white-space: normal; background-color: rgb(255, 255, 255); background-clip: padding-box; border: 1px solid rgba(0, 0, 0, 0.2); border-radius: 6px; box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2); }
    .popover.right { margin-left: 10px; }
    .popover-title { padding: 8px 14px; margin: 0px; font-size: 14px; background-color: rgb(247, 247, 247); border-bottom: 1px solid rgb(235, 235, 235); border-radius: 5px 5px 0px 0px; }
    .popover-content { padding: 9px 14px; }
    .popover > .arrow, .popover > .arrow::after { position: absolute; display: block; width: 0px; height: 0px; border-color: transparent; border-style: solid; }
    .popover > .arrow { border-width: 11px; }
    .popover > .arrow::after { content: ""; border-width: 10px; }
    .popover.top > .arrow::after { bottom: 1px; margin-left: -10px; content: " "; border-top-color: rgb(255, 255, 255); border-bottom-width: 0px; }
    .popover.right > .arrow { top: 50%; left: -11px; margin-top: -11px; border-right-color: rgba(0, 0, 0, 0.25); border-left-width: 0px; }
    .popover.right > .arrow::after { bottom: -10px; left: 1px; content: " "; border-right-color: rgb(255, 255, 255); border-left-width: 0px; }
    .popover.bottom > .arrow::after { top: 1px; margin-left: -10px; content: " "; border-top-width: 0px; border-bottom-color: rgb(255, 255, 255); }
    .popover.left > .arrow::after { right: 1px; bottom: -10px; content: " "; border-right-width: 0px; border-left-color: rgb(255, 255, 255); }
    @media not all, (-webkit-transform-3d) {
    }
    .carousel-control .icon-prev::before { content: "‹"; }
    .carousel-control .icon-next::before { content: "›"; }
    @media screen and (min-width: 768px) {
    }
    .clearfix::before, .clearfix::after, .dl-horizontal dd::before, .dl-horizontal dd::after, .container::before, .container::after, .container-fluid::before, .container-fluid::after, .row::before, .row::after, .form-horizontal .form-group::before, .form-horizontal .form-group::after, .btn-toolbar::before, .btn-toolbar::after, .btn-group-vertical > .btn-group::before, .btn-group-vertical > .btn-group::after, .nav::before, .nav::after, .navbar::before, .navbar::after, .navbar-header::before, .navbar-header::after, .navbar-collapse::before, .navbar-collapse::after, .pager::before, .pager::after, .panel-body::before, .panel-body::after, .modal-header::before, .modal-header::after, .modal-footer::before, .modal-footer::after { display: table; content: " "; }
    .clearfix::after, .dl-horizontal dd::after, .container::after, .container-fluid::after, .row::after, .form-horizontal .form-group::after, .btn-toolbar::after, .btn-group-vertical > .btn-group::after, .nav::after, .navbar::after, .navbar-header::after, .navbar-collapse::after, .pager::after, .panel-body::after, .modal-header::after, .modal-footer::after { clear: both; }
    .pull-right { float: right !important; }
    .pull-left { float: left !important; }
    .hide { display: none !important; }

</style>