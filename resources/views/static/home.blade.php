@extends('layouts.main')

@section('header-title')
Главная страница
@endsection


@section('content')

    @auth
        @if(auth()->user()->tasks->count() > 0)
            <ul>
                @foreach(auth()->user()->tasks as $task)
                    <li>
                        <h3>{{ $task->name }}</h3>
                        <p>{{ $task->message }}</p>
                    </li>
                @endforeach
            </ul>
        @else
            <p>У вас пока нет задач. <a href="{{ route('create') }}">Создать задачу</a></p>
        @endif
    @else
        <p>Пожалуйста, <a href="{{ route('login') }}">войдите</a> или <a href="{{ route('registration') }}">зарегистрируйтесь</a> для работы с задачами.</p>
    @endauth

@endsection