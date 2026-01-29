@extends('layouts.main')

@section('header-title')
Главная страница
@endsection


@section('content')

    @auth
        @if(auth()->user()->tasks->count() > 0)
            <div class="tasks">
                
                @foreach(auth()->user()->tasks as $task)
                    <div class="task">
                        <h3>{{ $task->name }}</h3>
                        <p>{{ $task->message }}</p>
                        
                        <div class="but">
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-del"> Задача выполнена (Удалить)</button>
                            </form>
                        </div>
                    </div>
                @endforeach
                    
            </div>
        @else
            <p class="not-tasks">У вас пока нет задач.</p>
        @endif

    @else
    <p class="warning">Войдите в аккаунт для отображения задач</p>
    @endauth
    

@endsection