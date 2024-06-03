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

Route::get('/sign-up', [UserController::class, 'showRegisterForm'])->name('sign-up');
Route::post('/sign-up', [UserController::class, 'create']);


// default
Route::get('/', function () {
    return view('welcome');
});
