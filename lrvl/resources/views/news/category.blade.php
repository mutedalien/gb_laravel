@extends('layouts.app')

@section('title')
    @parent Категории
@endsection

@section ('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if ($news)
                    <h1>Новости категории {{ $category }}</h1>
                    @forelse($news as $item)
                        <div class="card">
                            <div class="card-header">Новости по категории {{ $category }}</div>
                            <div class="card-body">
                                <h2>{{ $item['title'] }}</h2>
                                @if (!$item['isPrivate'])
                                    <a href="{{ route('news.show', $item['id']) }}">Подробнее..</a>
                                @endif
                            </div>
                        </div>
                    @empty
                        Нет новостей
                    @endforelse
                @else
                    Нет такой категории
                @endif
            </div>
        </div>
    </div>
@endsection
