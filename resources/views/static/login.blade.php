@extends('layouts.main')

@section('header-title')
Страница авторизации
@endsection


@section('content')

<h1 class="">Вход в аккаунт</h1>

    <div class="win-reg">
        

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label class="lab-reg">
                <span>Имя</span>
                <input type="text"
                        name="name"
                        placeholder="Иван"
                        value="{{ old('name') }}"
                        class="inp-reg"
                        required>
            </label>
            @error('name')
                <div class="">
                    <span class="">{{ $message }}</span>
                </div>
            @enderror

            <label class="lab-reg">
                <span>Пароль</span>
                <input type="password"
                        name="password"
                        placeholder="••••••••"
                        class="inp-reg"
                        required>

            </label>
            @error('password')
                <div class="">
                    <span class="">{{ $message }}</span>
                </div>
            @enderror

            <button type="submit" class="btn-reg">
                Войти
            </button>
        </form>
        <p class="">
            Нет аккаунта?
            <a href="{{ route('registration') }}" class="">Зарегистрироваться</a>
        </p>
    </div>


@endsection