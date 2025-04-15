<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticating']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/forgot-password', function () {
    return 'Halaman reset password (buat nanti jika perlu)';
});

Route::middleware(['auth'])->group(function () {
    Route::get('/books', [BookController::class, 'index'])->name('books');
    Route::get('/users', [UserController::class, 'index']);
});
