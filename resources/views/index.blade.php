<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<div class="container">
	<div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">产品信息</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">

                    <input type="text" class="form-controller" id="search" name="search" value="">


                </div>

                <table class="table table-bordered table-hover">
                	<thead>
                		<tr>
                			<th>ID</th>
                			<th>Product Name</th>
                			<th>Description</th>
                			<th>Price</th>
                		</tr>
                	</thead>
                    <tbody id='tbody'>

                    </tbody>
                </table>
            </div>
        </div>
	</div>
</div>

<script type="text/javascript">
    const search = document.getElementById('search');
    const tableBody = document.getElementById('tbody');
    function getContent(){

        const searchValue = search.value;

        const xhr = new XMLHttpRequest();
        xhr.open('GET','{{route('search')}}/?search=' + searchValue ,true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.onreadystatechange = function() {

            if(xhr.readyState == 4 && xhr.status == 200)
            {
                tableBody.innerHTML = xhr.responseText;
            }
        }
        xhr.send()
    }
    search.addEventListener('input',getContent);
</script>
</body>
</html>
