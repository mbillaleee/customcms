<?php


use App\Http\Controllers\FrontendController;



Route::get('/', [FrontendController::class, 'index'])->name('xprtx.index');