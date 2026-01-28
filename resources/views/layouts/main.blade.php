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
                <div class="razd">
                <li><a href="{{ route('login') }}">Вход</a></li>
                <li><a href="{{ route('registration') }}">Регистрация</a></li>
                </div>
            </ul>
        </nav>
    </header>
    @yield('content')
</body>
</html>