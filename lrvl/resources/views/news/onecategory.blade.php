@extends('layouts.main')

@section('title')
    @parent Рубрики
@endsection

@section('menu')
    @include('menu.main')
@endsection

@section('content')
    <h2>Рубрика {{ $category }}</h2>
    @forelse($news as $item)
        <div>
            <h2>{{ $item['title'] }}</h2>
            @if (!$item['isPrivate'])
                <a href="{{ route('news.One', $item['id']) }}">Подробнее...</a>
            @endif
        </div>
        <hr>
    @empty
        <p>Нет новостей</p>
    @endforelse
@endsection
