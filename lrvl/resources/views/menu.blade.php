<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home')?'active':'' }}" href="{{ route('home') }}">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('news.index')?'active':'' }}" href="{{ route('news.index') }}">Новости</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('news.category.index')?'active':'' }}" href="{{ route('news.category.index') }}">Категории</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about')?'active':'' }}" href="{{ route('about') }}">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.index')?'active':'' }}" href="{{ route('admin.index') }}">Админка</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('vue')?'active':'' }}" href="{{ route('vue') }}">Vue</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

{{--<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">--}}
{{--    <h5 class="my-0 mr-md-auto font-weight-normal">geekbrains laravel</h5>--}}
{{--    <nav class="my-2 my-md-0 mr-md-3">--}}
{{--        <a class="p-2 text-dark" href="{{ route('home') }}">Главная</a>--}}
{{--        <a class="p-2 text-dark" href="{{ route('news.index') }}">Новости</a>--}}
{{--        <a class="p-2 text-dark" href="{{ route('news.category.index') }}">Категории</a>--}}
{{--        <a class="p-2 text-dark" href="{{ route('about') }}">О нас</a>--}}
{{--        <a class="p-2 text-dark" href="{{ route('admin.index') }}">Админка</a>--}}
{{--        <a class="p-2 text-dark" href="{{ route('vue') }}">Vue</a>--}}
{{--    </nav>--}}
{{--    <a class="btn btn-outline-primary" href="/login">Войти</a>--}}
{{--</div>--}}
