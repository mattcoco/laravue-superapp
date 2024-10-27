@extends('layouts.main')

@section('title', 'Editar Tarea')

@section('content')
<div class="container">
    <h2>Editar Tarea</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('todos.update', $todo->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="task" class="form-label">Tarea</label>
            <input type="text" class="form-control" id="task" name="task" value="{{ old('task', $todo->task) }}" required>
            @error('task')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="completed" name="completed" value="1" {{ $todo->completed ? 'checked' : '' }}>
            <label class="form-check-label" for="completed">Completada</label>
        </div> --}}

        <button type="submit" class="btn btn-primary">Actualizar Tarea</button>
    </form>
</div>
@endsection
