<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    use HasFactory;

    // Permitir asignación masiva en el campo 'task'
    protected $fillable = ['task'];
}
