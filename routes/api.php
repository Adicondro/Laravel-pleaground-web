<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductApiController;
use App\Http\Controllers\ReminderApiController;

Route::get('/products', [ProductApiController::class, 'index']);
Route::post('/products', [ProductApiController::class, 'store']);
Route::get('/products/{id}', [ProductApiController::class, 'show']);
Route::put('/products/{id}', [ProductApiController::class, 'update']);
Route::delete('/products/{id}', [ProductApiController::class, 'destroy']);

Route::get('/reminders', [ReminderApiController::class, 'index']);
Route::post('/reminders', [ReminderApiController::class, 'store']);
Route::get('/reminders/{id}/', [ReminderApiController::class, 'show']);
Route::put('/reminders/{id}', [ReminderApiController::class, 'update']);
Route::delete('/reminders/{id}', [ReminderApiController::class, 'destroy']);
