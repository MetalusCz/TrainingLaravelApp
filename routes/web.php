<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/index', [HomeController::class, 'index'])->name('index');

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'authenticate']); 

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
});

Route::get('/teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::get('/teacher/{teacher}/edit', [TeacherController::class, 'edit'])->name('teacher.edit');
Route::delete('/teacher/{teacher}', [TeacherController::class, 'destroy'])->name('teacher.destroy');
Route::post('/teacher', [TeacherController::class, 'store'])->name('teacher.store');




// V souboru routes/web.php
Route::post('/logout', [DashboardController::class, 'logout'])->name('logout');
