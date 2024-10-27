<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TodoController;



Route::get('/', [UserProfileController::class, 'show']);

Route::resource('posts', PostController::class);
Route::resource('todos', TodoController::class);
