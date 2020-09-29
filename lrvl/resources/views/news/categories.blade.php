@extends('layouts.app')

@section('title', 'Категории')

@section ('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @forelse($categories as $category)
                <div class="col-md-12">
                    <div class="card-body">
                        <a href="{{ route('news.category.show', $category['slug']) }}"><h2>{{ $category['title'] }}</h2>
                        </a>
                    </div>
                </div>
            @empty
                Нет категорий
            @endforelse
        </div>
    </div>
@endsection
