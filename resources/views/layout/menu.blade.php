<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!--
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>-->
        <!-- search form -->
        <!--
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>-->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <!--<li class="header">MAIN NAVIGATION</li>-->
             <li class="active treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>资源管理</span>
                    <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('home/index')}}"><i class="fa fa-file-movie-o" aria-hidden="true"></i>资源列表</a></li>
                    <li><a href="{{url('home/add')}}"><i class="fa fa-circle-o"></i> 添加资源</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>微信功能</span>
                    <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>自动回复</a></li>
                    <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>消息管理</a></li>
                    <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>自定义菜单</a></li>
                    <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i>功能配置</a></li>
                    <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i>二维码/转化链接</a></li>
                    <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i>素材管理</a></li>
                    <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i>图文群发</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>粉丝会员</span>
                    <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>粉丝管理</a></li>
                    <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>授权＆注册</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>微信平台</span>
                    <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>小程序管理</a></li>
                    <li><a href="{{url('mp/list')}}"><i class="fa fa-circle-o"></i>公众号管理</a></li>
                    <li><a href="{{url('mp/dashboard')}}"><i class="fa fa-circle-o"></i>仪表盘</a></li>
                    <li><a href="{{url('mp/menu')}}"><i class="fa fa-circle-o"></i>菜单管理</a></li>
                </ul>
            </li>
            <!--
            <li>
                <a href="pages/widgets.html">
                    <i class="fa fa-th"></i> <span>Widgets</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
                </a>
            </li>
            -->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>