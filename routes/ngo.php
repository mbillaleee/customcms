<?php

use App\Http\Controllers\NgoController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\MessageController;

// Route::get('/', function () {
//     return view('template/ngo/landing');
// });


Route::get('/', [FrontendController::class, 'index'])->name('ngo.index');
Route::get('/about', [FrontendController::class, 'about'])->name('ngo.about');
Route::get('/volounteer', [FrontendController::class, 'volounteer'])->name('ngo.volounteer');
Route::get('/become-volounteer', [FrontendController::class, 'becomeVolounteer'])->name('ngo.becomevolounteer');
Route::get('/religious-program', [FrontendController::class, 'religiousProgram'])->name('ngo.religiousprogram');
Route::get('/donation', [FrontendController::class, 'donation'])->name('ngo.donation');
Route::get('/contact', [FrontendController::class, 'contact'])->name('ngo.contact');




// Route::get('/', [NgoController::class, 'index'])->name('ngo.index');
// Route::get('/about', [NgoController::class, 'about'])->name('ngo.about');
// Route::get('/volounteer', [NgoController::class, 'volounteer'])->name('ngo.volounteer');
// Route::get('/become-volounteer', [NgoController::class, 'becomeVolounteer'])->name('ngo.becomevolounteer');
// Route::get('/religious-program', [NgoController::class, 'religiousProgram'])->name('ngo.religiousprogram');
// Route::get('/donation', [NgoController::class, 'donation'])->name('ngo.donation');







// Route::get('/', function () {
//     return view('template/ngo/index');
// });

// Route::get('/about', function () {
//     return view('template/ngo/about');
// });
// Route::get('/contact', function () {
//     return view('template/ngo/contact');
// });


Route::any('/frontend/store', [VolunteerController::class, 'volenteerstore'])->name('frontendvolunteer.store'); 
Route::any('/message/store', [MessageController::class, 'contactMessage'])->name('contactmessage.store'); 