@extends('layouts.main')

@section('header-title')
Страница создания задачи
@endsection


@section('content')

@if($errors->any())
    <div class="block-error">
        <ul>
            @foreach ($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    </div>
@endif
    @auth
    <div class="create-form">
       
        
        <form action="{{ route('create.task') }}" method="POST">
            @csrf
            
            <label for="name">Название</label>
            <input type="text" name="name" id="name">

            <label for="message">Текст</label>
            <textarea name="message" id="message"></textarea>

            <button type="submit">Создать</button>
        </form>
    </div>
    @endauth
    <p class="warning">Войдите в аккаунт для создания задач</p>
@endsection