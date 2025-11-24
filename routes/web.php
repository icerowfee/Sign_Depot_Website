<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home-page');
});

Route::get('/services', function () {
    return view('services-page');
});

Route::get('/about-us', function () {
    return view('about-us-page');
});

Route::get('/contact-us', function () {
    return view('contact-us-page');
});


