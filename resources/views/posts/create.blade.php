@extends('layouts.main')

@section('title', 'Crear Post')

@section('content')
    <div class="container mt-4">
        <h2>Crear un nuevo post</h2>

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Contenido</label>
                <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Crear Post</button>
        </form>
    </div>
@endsection
