@extends('layouts.admin')

@section('title')
    @parent Admin
@endsection

@section('content')
    <div class="jumbotron">
        <div class="container" style="min-height: 80vh; margin-bottom: -3vh; margin-top: 3vh; padding-top: 50px;">
            <h1
                style="padding: 20px"
            >
                GB Laravel less 9</h1>
            <div>
                <!-- Example row of columns -->

                <h1>Пользователи</h1>

                <div class="row">
                    @forelse($users as $user)
                        <div id="user{{ $user->id }}" class="users-block" style="padding-top: 20px; width: 100%">
                            <a href="#">{{$user->name}}, {{$user->email}}, {{ ($user->is_admin)?"Admin":"" }}</a><br>

                            @if ($user->is_admin)
                                <a href="{{route('admin.toggleAdmin', $user)}}"><button type="button" class="btn btn-danger">Понизить до Юзера</button></a>
                            @else
                                <a href="{{route('admin.toggleAdmin', $user)}}"> <button type="button" class="btn btn-success">Повысить до Админа</button></a>
                            @endif
                                <button class="btn btn-danger delete" data-id="{{ $user->id }}">Delete</button>
                        </div>
                        <hr>
                    @empty
                        <p>No users</p>
                    @endforelse
                </div>
                <div style="display: flex; justify-content: center; margin-top: 20px">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
