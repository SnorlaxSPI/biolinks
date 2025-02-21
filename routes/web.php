<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\WelcomeController;

Route::get('/', WelcomeController::class);
Route::get('/hello', [HelloController::class, 'show']);
Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'login']);
Route::get('/dashboard', fn() => 'dashboard :: '. auth()->id())->middleware('auth')->name('dashboard');

