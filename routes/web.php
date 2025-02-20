<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/nuevo', [PostController::class, 'nuevoPrueba']);
Route::get('/posts/editar/{id}', [PostController::class, 'editaPrueba']);
Route::resource('posts', PostController::class);
Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
