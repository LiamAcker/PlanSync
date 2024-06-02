<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\UserController;

# User Routes
// Route::post('/register', [UserController::class, 'register']);
// Route::post('/login', [UserController::class, 'login']);

Route::get('/fetch-reminders', [App\Http\Controllers\CalendarController::class, 'fetchReminders']);
Route::get('/calendar', [CalendarController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
