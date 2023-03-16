<?php

use App\Http\Controllers\NgoController;

// Route::get('/', function () {
//     return view('template/ngo/landing');
// });

Route::prefix('ngo')->group(function () {
    Route::get('/', [NgoController::class, 'index'])->name('ngo.index');
});






Route::get('/', function () {
    return view('template/ngo/index');
});

Route::get('/ngo/about', function () {
    return view('template/ngo/about');
});
Route::get('/ngo/contact', function () {
    return view('template/ngo/contact');
});