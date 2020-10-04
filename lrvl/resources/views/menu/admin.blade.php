<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">geekbrains laravel</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="{{ route('home') }}">Главная</a>
        <a class="p-2 text-dark" href="{{ route('admin.aut') }}">Личный кабинет</a>
        <a class="p-2 text-dark" href="{{ route('admin.news') }}">Редактор новостей</a>
        <a class="p-2 text-dark" href="{{ route('admin.cat') }}">Редактор рубрик</a>
    </nav>
    <a class="btn btn-outline-primary" href="#">Войти</a>
</div>
