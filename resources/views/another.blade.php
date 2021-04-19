@extends('base')

@section('body')
    <h1>Інша</h1>
    @if(isset($arr))
        @foreach($arr as $item)
            <p>{{$item}}</p>
        @endforeach
    @else
        <p>Массив пустий</p>
    @endif
@endsection
