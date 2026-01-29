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
                        
                        <div>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" > Задача выполнена (Удалить)</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        @else
            <p>У вас пока нет задач.</p>
        @endif

    @endauth

@endsection