<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
            'title'=>'Welcome to SoftLand']
    );
})->name('home');

Route::redirect('index.html','/');

Route::get('/blog.html', function () {
    return view('blog');
})->name('blog');

Route::get('/contact.html', function () {
    return view('contact');
})->name('contact');

Route::get('/blog-single.html', function () {
    return view('post');
});


Route::group(['middleware' => ['web','auth']], function () {
        Route::get('/dashboard', []);
        Route::get('/profile',[]);
        Route::get('/u/',[])->withoutMiddleware('auth');

    }
);
