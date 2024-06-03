<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\UserController;

# User Routes
// Route::post('/register', [UserController::class, 'register']);
// Route::post('/login', [UserController::class, 'login']);

Route::get('/fetch-reminders', [App\Http\Controllers\CalendarController::class, 'fetchReminders']);
Route::get('/calendar', [CalendarController::class, 'index']);

// User
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);

Route::get('/sign-in', [UserController::class, 'showRegisterForm'])->name('sign-in');
Route::post('/sign-in', [UserController::class, 'create']);


// default
Route::get('/', function () {
    return view('welcome');
});
