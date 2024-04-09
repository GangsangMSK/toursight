<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {return view('welcome');});
Route::get('/register', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'store'])->name('register');
?>