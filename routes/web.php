<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [UserProfileController::class, 'show']);
