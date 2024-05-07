<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TourismController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\WriteController;

// Route::get('/', function () {return view('welcome');});
// Route::get('/register', [UserController::class, 'index']);
// Route::post('/register', [UserController::class, 'store'])->name('register');

// Route::get('/', [BlogController::class, 'index']);
Route::get('/blogs', [BlogController::class, 'getBlogsByLocal'])->name('blogs.by_local');

Route::get('/', [TourismController::class, 'index'])->name('home');
Route::get('/tourism/{region}', [TourismController::class, 'showRegion'])->name('tourism.region');

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/bookmark', [BookmarkController::class, 'index']);

Route::get('/write', [WriteController::class, 'index']);
?>