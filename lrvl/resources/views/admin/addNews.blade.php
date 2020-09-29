@extends('layouts.app')

@section('title', 'Добавление новости')

@section('menu')
    @include('admin.menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form>
                    <div class="form-group row">
                        <label for="newsTitle">Название новости</label>
                        <input name="title" type="text" class="form-control" id="newsTitle">
                    </div>
                    <div class="form-group">
                        <label for="newsCategory">Категория новости</label>
                        <select class="form-control" id="newsCategory"></select>
                        <label for="newsCategory">Текст новости</label>
                        <textarea class="form-control"></textarea><br>

                        <div class="form-chek">
                            <input type="checkbox" value="1" class="form-check-input" id="newsPrivate">
                            <lable class="form-check-label" for="newsPrivate">Новость общедоступна?</lable>
                        </div><br>

                        <a class="btn btn-outline-primary" href="№">Отправить</a>

                    </div>
                </form>
            </div>
        </div>
@endsection


