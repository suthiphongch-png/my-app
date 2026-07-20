<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('index');
});



Route::get('/abouts', [AdminController::class, 'abouts'] )->name('abouts');

Route::get('/blogs', [AdminController::class, 'blogs'] )->name('blogs');

Route::get('/create', [AdminController::class, 'create'] )->name('create');
