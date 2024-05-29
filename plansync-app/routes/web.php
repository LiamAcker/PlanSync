<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UserController;


# User Routes
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);



Route::get('/', function () {
    return view('welcome');
});
