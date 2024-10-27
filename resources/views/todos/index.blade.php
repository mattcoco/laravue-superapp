@extends('layouts.main')

@section('title', 'To-Do List')

@section('content')
    <div class="container mt-4">
        <h2>To-Do List</h2>
        <a href="{{ route('todos.create') }}" class="btn btn-primary">Añadir Tarea</a>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <ul class="list-group mt-3">
            @foreach ($toDos as $toDo)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $toDo->task }}
                    <form action="{{ route('todos.destroy', $toDo->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
