<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/productLayout', function () {
    return view('productLayout');
})->name('productLayout');