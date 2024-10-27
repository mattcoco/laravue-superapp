<!-- resources/views/profile/show.blade.php -->


@extends('layouts.main')

@section('title', 'Perfil de Usuario')

@section('content')
    <div class="container p-4 p-lg-5">
        
        <h2>Perfil de {{ $user['name'] }}</h2>
        <p><strong>Email:</strong> {{ $user['email'] }}</p>
        <p><strong>Bio:</strong> {{ $user['bio'] }}</p>

        <h3>Publicaciones</h3>
        <ul>
            @foreach ($posts as $post)
                <li>
                    <h4>{{ $post['title'] }}</h4>
                    <p>{{ $post['content'] }}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
