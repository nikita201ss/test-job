<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('header-title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav>
            <ul class="menu">
                
                <li><a href="{{ route('home') }}">Главная</a></li>
                <li><a href="{{ route('create') }}">Создать задачу</a></li>
                @auth
                <div class="razd">
                    <li><span class="name-user">{{ Auth::user()->name }}</span></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                        @csrf
                            <button type="submit" class="btn-auth">
                            Выход
                            </button>
                        </form>
                    </li>
                </div>
                @else
                <div class="razd">
                <li><a href="{{ route('login') }}">Вход</a></li>
                <li><a href="{{ route('registration') }}">Регистрация</a></li>
                </div>
                @endauth
            </ul>
        </nav>
    </header>

    @if(session('success'))
        <div class="success">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    @yield('content')
</body>
</html>