<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UserController;
use app\Http\Controllers\CalendarController;


# User Routes
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/calendar', [CalendarController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
