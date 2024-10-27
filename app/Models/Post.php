<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Agrega aquí las propiedades que se pueden asignar masivamente
    protected $fillable = ['title', 'content'];
}