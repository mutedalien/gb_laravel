<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('home')?'active':''}}" href="{{route('home')}}">Главная <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('news.all')?'active':''}}"
                       href="{{route('news.all')}}">Новости</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('news.categories')?'active':''}}"
                       href="{{route('news.categories')}}">Категории</a>
                </li>
                @if(Auth::check() && Auth::user()->is_admin)
                    <li class="nav-item">
                        <a class="nav-link  {{request()->routeIs('admin.news')?'active':''}}"
                           href="{{route('admin.news.index')}}">Админка</a>
                    </li>
                @endif

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
                    <li class="nav-item float-right">
                        <img src="{{Auth()->user()->avatar}}" alt="avatar" style="width: 50px; height: 50px">
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if(Auth::check())
                                <a class="dropdown-item  {{request()->routeIs('updateProfile')?'active':''}}" href="{{ route('updateProfile') }}">Profile</a>
                            @endif
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
