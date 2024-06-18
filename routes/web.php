<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/index.html', function () {
    return view('welcome');
});

Route::get('/blog.html', function () {
    return view('blog');
})->name('blog');

Route::get('/contact.html', function () {
    return view('contact');
})->name('contact');

Route::get('/blog-single.html', function () {
    return view('post');
});
