<?php

Route::get('/', function () {
    return view('template/ngo/index');
});

Route::get('/ngo/about', function () {
    return view('template/ngo/about');
});
Route::get('/ngo/contact', function () {
    return view('template/ngo/contact');
});