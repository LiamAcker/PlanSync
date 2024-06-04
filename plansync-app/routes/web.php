<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

;

Route::get('/add-reminder', [ReminderController::class, 'create'])->name('add-reminder');
Route::post('/post-reminder', [ReminderController::class, 'store'])->name('post-reminder');

Route::get('/edit-reminder/{id}', [ReminderController::class, 'edit'])->name('edit-reminder');
Route::put('/update-reminder/{id}', [ReminderController::class, 'update'])->name('update-reminder');
Route::delete('/delete-reminder/{id}', [ReminderController::class, 'destroy'])->name('delete-reminder');

Route::get('/fetch-reminders', [CalendarController::class, 'fetchReminders']);
Route::get('/calendar', [CalendarController::class, 'index']);
// Add more routes that require authentication here

// User
Route::get('/sign-in', [UserController::class, 'showLoginForm'])->name('sign-in');
Route::post('/sign-in', [UserController::class, 'login']);
Route::get('/sign-out', [UserController::class, 'logout'])->name('sign-out');

Route::get('/sign-up', [UserController::class, 'showRegisterForm'])->name('sign-up');
Route::post('/sign-up', [UserController::class, 'create']);
Route::post('/reminders', [ReminderController::class, 'store'])->name('post-reminder');



// default
Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');