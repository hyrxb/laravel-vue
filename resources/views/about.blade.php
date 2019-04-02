@extends('master')

@section('content')
    <h2>test</h2>
    @if ($name =="小明")
        <h2>愛國</h2>
    @else
        <h2>不愛國i</h2>
    @endif


    @for($i=0;$i<10;$i++)
        <li>hello</li>
    @endfor

    @foreach($names as $n)
        <li>{{$n}}</li>
    @endforeach

    @while($n = array_pop($names))
        <li>{{$n}}</li>
    @endwhile
@stop
