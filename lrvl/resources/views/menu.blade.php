<li class="nav-item {{ request()->routeIs('home')?'active':'' }}">
    <a class="nav-link" href="{{route('home') }}">Главная</a>
</li>

<li class="nav-item {{ request()->routeIs('news.index')?'active':'' }}">
    <a class="nav-link" href="{{ route('news.index') }}">Новости</a>
</li>

<li class="nav-item {{ request()->routeIs('news.category.index')?'active':'' }}">
    <a class="nav-link" href="{{ route('news.category.index') }}">Категории</a>
</li>

<li class="nav-item {{ request()->routeIs('about')?'active':'' }}">
    <a class="nav-link" href="{{ route('about') }}">О нас</a>
</li>

<li class="nav-item {{ request()->routeIs('admin.news.index')?'active':'' }}">
    <a class="nav-link" href="{{ route('admin.news.index') }}">Админка</a>
</li>

<li class="nav-item {{ request()->routeIs('vue')?'active':'' }}">
    <a class="nav-link" href="{{ route('vue') }}">VUE Demo</a>
</li>
<li class="nav-item {{ request()->routeIs('ajax')?'active':'' }}">
    <a class="nav-link" href="{{ route('ajax') }}">Ajax Demo</a>
</li>
