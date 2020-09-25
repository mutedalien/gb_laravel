@extends('layouts.main')

@section('title')
    @parent Новость
@endsection

@section('menu')
    @include('menu.main')
@endsection

@section('content')
    @if (!$news['isPrivate'])
        <h2>{{ $news['title'] }}</h2>
        <p>{{ $news['text'] }}</p>
    @else
        <br>Авторизуйтесь!
    @endif
@endsection

