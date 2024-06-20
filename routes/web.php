<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

Route::view('/', 'home');

Route::view('about', 'about');

Route::resource('/blogs', BlogController::class);

Route::get('categories/{category}', [CategoryController::class, 'index'])->name('category.index');

Route::get('authors/{user:nickname}', [UserController::class, 'index'])->name('user.index');

Route::view('contact', 'contact');
