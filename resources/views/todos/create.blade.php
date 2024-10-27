@extends('layouts.main')

@section('title', 'Añadir Tarea')

@section('content')
    <div class="container mt-4">
        <h2>Añadir nueva tarea</h2>

        <form action="{{ route('todos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="task" class="form-label">Tarea</label>
                <input type="text" class="form-control" id="task" name="task" required>
            </div>
            <button type="submit" class="btn btn-primary">Añadir Tarea</button>
        </form>
    </div>
@endsection
