<?php

use App\Http\Controllers\RssFeedController;

Route::get('/rssfeed', function() {
    return view('rssfeed');
})->name('rssfeed');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/feed', [RssFeedController::class, 'index'])->name('feed');

Route::get('/dictionary', function () {
    return view('dictionary');
})->name('dictionary');

Route::get('/account', function () {
    return view('account');
})->name('account');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
