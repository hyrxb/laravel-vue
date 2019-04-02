<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://v3.bootcss.com/favicon.ico">

    <title>招聘项目</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="https://v3.bootcss.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="https://v3.bootcss.com/examples/jumbotron/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="https://v3.bootcss.com/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="https://v3.bootcss.com/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">腾讯招聘列表页</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>{{$banner->position_name}}</h1>
        <p>
            职位：{{$banner->position_type}}
            地点：{{$banner->position_address}}
            人数：{{$banner->position_num}}
            发布时间：{{$banner->position_time}}
        </p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">详情</a></p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        @foreach($jobs_data as $item)
            <div class="col-md-4" style="border:1px dashed">
                <a>{{$item->position_name}}</a>
                <p> 职位：{{$item->position_type}}
                    地点：{{$item->position_address}}
                    人数：{{$item->position_num}}
                    发布时间：{{$item->position_time}}</p>
                <p><a class="btn btn-success" href="#" role="button">详情</a></p>
            </div>
        @endforeach
    </div>
    <div class="row">
        {{$jobs_data->links()}}
    </div>

    <footer>
        <p>&copy; 2018 自学吧, Inc.</p>
    </footer>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://v3.bootcss.com/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>