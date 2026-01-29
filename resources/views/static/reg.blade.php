@extends('layouts.main')

@section('header-title')
Страница регистирации
@endsection


@section('content')

<h1 class="title-str">Регистрация аккаунта</h1>

    <div class="win-reg">
        

        <form method="POST" action="/registration">
            @csrf

            <label class="lab-reg">
                <span>Логин</span>
                <input type="text"
                        name="name"
                        placeholder="Иван"
                        value="{{ old('name') }}"
                        class="inp-reg"
                        required>
            </label>
            @error('name')
                <div class="">
                    <span class="mes">{{ $message }}</span>
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
                Зарегистрироваться
            </button>
        </form>
        <p class="addtxt">
            Уже есть аккаунт?
            <b><a href="/login" class="link">Войти</a></b>
        </p>
    </div>


@endsection