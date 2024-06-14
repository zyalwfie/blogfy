<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About'
    ]);
});

Route::resource('/blogs', BlogController::class);

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact'
    ]);
});
