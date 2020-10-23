@extends('layouts.app')

@section('title')
    {{ $category->category }}
@endsection

@section('content')
    <div class="jumbotron">
        <div class="container" style="min-height: 80vh; margin-bottom: -3vh; margin-top: 3vh; padding-top: 20px;">
            <h1 style="font-size: 2,5rem">Новости в категории: {{ $category->category }}</h1>
            @forelse($news as $item)
                <br>
                <div>
                    <h2>{{ $item->heading }}</h2>
                    @if (!$item->isPrivate)
                        <a href="{{ route('news.one', $item) }}" style="color:mediumseagreen">Details...</a>
                    @endif
                </div>
                <hr>
            @empty
                <h2 style="padding: 20px; margin-left: 50px">No news</h2>
            @endforelse
            <div style="display: flex; justify-content: center; margin-top: 50px ">
                {{ $news->links() }}
            </div>
        </div>

    </div>
@endsection
