<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\UserController;;

# User Routes
// Route::post('/register', [UserController::class, 'register']);
// Route::post('/login', [UserController::class, 'login']);


// Calendar
Route::get('/add-reminder', [ReminderController::class, 'create'])->name('add-reminder');
Route::post('/post-reminder', [ReminderController::class, 'store'])->name('post-reminder');
Route::get('/fetch-reminders', [App\Http\Controllers\CalendarController::class, 'fetchReminders']);
Route::get('/calendar', [CalendarController::class, 'index']);

// User
Route::get('/sign-in', [UserController::class, 'showLoginForm'])->name('sign-in');
Route::post('/sign-in', [UserController::class, 'login']);
Route::post('/sign-out', [UserController::class, 'logout']);

Route::get('/sign-up', [UserController::class, 'showRegisterForm'])->name('sign-up');
Route::post('/sign-up', [UserController::class, 'create']);


// default
Route::get('/', function () {
    return view('welcome');
});
