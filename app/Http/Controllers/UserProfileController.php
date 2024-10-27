<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function show()
    {
        $user = [
            'name' => 'Juan Pérez',
            'email' => 'juan@example.com',
            'bio' => 'Desarrollador de software y entusiasta de la tecnología.',
        ];

        $posts = [
            ['title' => 'Mi primera publicación', 'content' => 'Contenido de la primera publicación'],
            ['title' => 'Avances en mi carrera', 'content' => 'Hablando sobre mi carrera profesional'],
            ['title' => 'Nuevos proyectos', 'content' => 'Compartiendo mis últimos proyectos'],
        ];

        return view('profile.show', compact('user', 'posts'));
    }
}
