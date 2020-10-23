@extends('layouts.app')

@section('title')
    Категории
@endsection

@section('content')
    <section class="categories">
        <div class="jumbotron">
            <div class="container" style="min-height: 80vh; margin-bottom: -3vh; margin-top: 3vh; padding-top: 50px;">
                <h1>Категории</h1>
                <div class="row" style="justify-content:space-around; padding-top: 20px;">
                    @forelse($categories as $item)
                        <div style="display: flex; width: 100%">
                            <h2><a
                                    href="{{ route('news.categoryId', $item) }}"
                                    style="color:mediumseagreen;"
                                >
                                    {{ $item->category }}
                                </a></h2>
                        </div>
                    @empty
                        <h2 style="padding: 20px; margin-left: 50px">No category</h2>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@endsection
