@extends('layouts.app')

@section('title-block')Главная@endsection

@section('content')
    <h1>Главная</h1>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection
