@extends('layouts.main')

@section('title', 'Posts')

@section('content')
    <div class="container mt-4">
        <h2>Posts</h2>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Crear Post</a>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <ul class="list-group mt-3">
            @foreach ($posts as $post)
                <li class="list-group-item">
                    <h5>{{ $post->title }}</h5>
                    <p>{{ $post->content }}</p>
                    <small>Creado en: {{ $post->created_at }}</small>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
