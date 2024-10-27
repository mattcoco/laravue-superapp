<!-- resources/views/profile/show.blade.php -->


@extends('layouts.main')

@section('title', 'Perfil de Usuario')

@section('content')
    
    <div class="container p-4 p-lg-5">
        <div class="row">
            <div class="col-6">
                <h2><span class="badge bg-primary p-3">TU PERFIL   <i class="fa-solid fa-user ms-1"></i></span></h2>
                <div class="pt-2 mb-5">
                    <p><strong>Usuario:</strong> {{ $user['name'] }}</p>
                    <p><strong>Email:</strong> {{ $user['email'] }}</p>
                    <p ><strong>Bio:</strong> {{ $user['bio'] }}</p>
                </div>

                <h2><span class="badge bg-primary p-3">PUBLICACIONES <i class="fa-solid fa-comment ms-1"></i></span></h2>
                <ul class="mb-5">
                    @foreach ($posts as $post)
                        <li class="mb-1">
                            <h4>{{ $post['title'] }}</h4>
                            <p>{{ $post['content'] }}</p>
                        </li>
                    @endforeach
                </ul>

                <a class="nav-link" href="/todos">
                 <h2><span class="badge bg-success p-3">TUS TAREAS <i class="fa-solid fa-list-check ms-1"></i></i></span></h2>
                </a>
            </div>




            <div class="col-6">
                <img src="https://scontent.fvlc6-2.fna.fbcdn.net/v/t39.30808-6/299723678_176959964835512_8907956075924868119_n.png?_nc_cat=103&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=2nDLlBxEvXoQ7kNvgGWIXIG&_nc_zt=23&_nc_ht=scontent.fvlc6-2.fna&_nc_gid=AVwJgSELjuySEb45xgexo-R&oh=00_AYCnvq_pK61YQwAhezlIx4m4zVv_SPzHrQufxQic44K_2g&oe=67249EEB" alt="{{ $user['name'] }}" class="img-fluid rounded">
            </div>
        </div>
    </div>
@endsection
