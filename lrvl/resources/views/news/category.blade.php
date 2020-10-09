@extends('layouts.main')

@section('title')
    @parent Категории
@endsection

@section ('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if ($news)
                            <h1>Новости категории {{ $category->title }}</h1>
                            @forelse($news as $item)
                                <div class="card-img" style="background-image: url({{$item->image ?? asset('storage/default.jpeg')}})"></div>
                                <h2>{{ $item['title'] }}</h2>
                                @if (!$item['isPrivate'])
                                    <a href="{{ route('news.show', $item['id']) }}">Подробнее..</a>
                                @endif
                            @empty
                                Нет новостей
                            @endforelse
                        @else
                            Нет такой категории
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
