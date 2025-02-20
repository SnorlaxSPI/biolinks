<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\WelcomeController;

Route::get('/', WelcomeController::class);
Route::get('/hello', [HelloController::class, 'show']);
Route::get('/login', function () {
  return 'login';
});
