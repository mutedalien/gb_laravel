<li class="nav-item">
    <a class="nav-link" href="{{ route('home') }}">Главная Сайт</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('admin.news.create') }}">Добавить новость</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('admin.updateProfile') }}">Профиль</a>
</li>

<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('admin.updateUser') ? 'active' : '' }}" href="{{ route('admin.updateUser') }}">Пользователи</a>
</li>



