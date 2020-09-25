@extends('layouts.main')

@section('menu')
    @include('menu.main')
@endsection

@section('content')
    <h1>Главная страница</h1><br><br>
    <ul>
        <li><h4>1. Добавить в проект несколько контроллеров. Создать минимум 4 страницы:</h4></li>

            <ul>
                <li>a. Страницу приветствия.</li>
                <li>b. Страницу категорий новостей.</li>
                <li>c. Страницу вывода новостей по конкретной категории.</li>
                <li>d. Страницу вывода конкретной новости.</li>
            </ul>

        <li><h4>2 . Оптимизировать "запрос" getNewsId, что бы поиск id не в цикле был, а сразу получали по ключу из массива.</h4></li>
        <li><h4>3* . Сгруппировать роуты news, и перенести контроллер новостей в пространство имен News. Можно еще сгруппировать и виды в папочке news.</h4></li>
        <li><h4>4*. Страница категорий должна работать не по числовому Id, а по ЧПУ ссылке (category/sport например)</h4></li>
    </ul>
@endsection
