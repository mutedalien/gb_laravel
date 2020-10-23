@extends('layouts.app')

@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container" style="min-height: 80vh; margin-bottom: -3vh; margin-top:3vh; padding-top: 50px;">


            <h1 class="display-3">GB Laravel less 9</h1>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            Вы авторизованы!
            <p><span style="color:mediumseagreen">Равным образом постоянный количественный рост .</span> Сфера нашей активности представляет собой интересный эксперимент проверки позиций, занимаемых участниками в отношении поставленных задач. </p>
            <div style="height:400px">
                <img style="width:100%" src="{{ asset('img/welcome.png') }}" alt="pic">
            </div>
            <p><a class="btn btn btn-lg btn-outline-success my-2 my-sm-0" href="#" role="button">Читать далее &raquo;</a></p>
        </div>
    </div>
@endsection
