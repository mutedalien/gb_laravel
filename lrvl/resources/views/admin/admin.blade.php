@extends('layouts.admin')

@section('title')
    @parent Admin
@endsection

@section('content')

    <div class="jumbotron">

        <div class="container" style="min-height: 80vh; margin-bottom: -3vh; margin-top: 3vh; padding-top: 50px;">

            <h1>
                GB Laravel less 9 Админпанель</h1>
            <div>
                <div class="row">
                    @forelse($news as $item)
                        <div id="news{{ $item->id }}" class="news-block col-sm-12 col-md-6 col-lg-4 col-xl-3"
                             style="padding-top: 20px">
                            <a style="text-decoration: #2fa360; text-underline-color:mediumseagreen"
                               href="{{ route('news.one', $item) }}">
                                <div style="width: 150px; height: 150px; ">
                                    <img style="width: 100%"
                                         src="{{ $item->newsImg  ?? asset('http://placehold.it/150')}}"
                                         alt="news_img">
                                </div>
                                <div style="padding:20px 0 0 0; color:mediumseagreen; height:100px">
                                    <p>{{ $item->heading }}</p>
                                </div>
                            </a>
                            <div style="display: flex; width: 60%; justify-content: space-evenly">
                                <a href="{{ route('admin.news.edit', $item) }}">
                                    <button type="button" class="btn btn-success" style="text-decoration: none"> Edit
                                    </button>
                                </a>
                                <button class="btn btn-danger altDelete" data-id="{{ $item->id }}">Delete</button>
                            </div>
                        </div>
                    @empty
                        <p>No News</p>
                    @endforelse
                </div>
                <div style="display: flex; justify-content: center; margin-top: 20px">
                    {{ $news->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

