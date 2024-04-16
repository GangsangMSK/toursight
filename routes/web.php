<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {return view('welcome');});
Route::get('/register', [UserController::class, 'index']);
Route::get('/index', [BlogController::class, 'index']);
Route::post('/register', [UserController::class, 'store'])->name('register');
?>