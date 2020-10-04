@extends('layouts.main')

@section('title')
    @parent Рубрики
@endsection

@section('menu')
    @include('menu.main')
@endsection

@section('content')
    <h2>Рубрики</h2>
    @forelse($categories as $item)
        <div>
            <h2><a href="{{ route('news.categoryId', $item['name']) }}">{{ $item['category'] }}</a></h2>
        </div>
    @empty
        <p>Не найдено</p>
    @endforelse
@endsection
