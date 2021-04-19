@extends('base')

@section('body')
    <h1>Головна</h1>
    <h4>Get</h4>
    <form method="get">
        <input type="text" id="get_txt" name="get_txt"><br><br>
        <input type="submit" value="Надіслати">
    </form>
    @if(isset($get))
        <p>Ви ввели: {{$get}}</p>
    @endif
    <br><br>
    <h4>Post</h4>
    <form method="post">
        @csrf
        <input type="text" id="post_txt" name="post_txt"><br><br>
        <input type="submit" value="Надіслати">
    </form>
    @if(isset($post))
        <p>Ви ввели: {{$post}}</p>
    @endif
@endsection
