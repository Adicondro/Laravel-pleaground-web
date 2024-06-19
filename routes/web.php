<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReminderContoller;
use App\Http\Controllers\PomodoroController;
use Illuminate\Support\Facades\Route;


Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);

Route::get('/reminders', [ReminderContoller::class, 'index']);
Route::get('/reminders/create', [ReminderContoller::class, 'create']);
Route::post('/reminders', [ReminderContoller::class, 'store']);
Route::get('/reminders/{id}/edit', [ReminderContoller::class, 'edit']);
Route::put('/reminders/{id}', [ReminderContoller::class, 'update']);
Route::delete('/reminders/{id}', [ReminderContoller::class, 'destroy']);

Route::get('/', [PomodoroController::class, 'index'])->name('pomodoros.index');
Route::post('/start', [PomodoroController::class, 'start'])->name('pomodoros.start');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
