<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>Laravel</title>


<body>
<div id="app">
    <h1>这是怎么回事</h1>
    <welcome :title="'{{$title}}'"></welcome>
    {{--<page :title="'{{$title}}'" :author="'{{$author}}'"></page>--}}
</div>
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>