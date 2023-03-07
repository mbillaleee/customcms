<?php
use App\Http\Controllers\FrontendController;





Route::prefix('education')->group(function () {
    Route::get('/home', [FrontendController::class, 'index'])->name('education.index');
    Route::get('/gallery', [FrontendController::class, 'photogallery'])->name('photogallery.index');
    Route::get('/teacher', [FrontendController::class, 'teachers']);
    Route::get('/teacher-info', [FrontendController::class, 'teacher.info']);
    Route::get('/about', [FrontendController::class, 'about']);
    Route::get('/class-grid', [FrontendController::class, 'classgrid']);
    Route::get('/class-list', [FrontendController::class, 'classlist']);
    Route::get('/blog-details', [FrontendController::class, 'blogdetails']);
    Route::get('/blog-details/{id}', [FrontendController::class, 'blogdetails']);
    Route::get('/contact', [FrontendController::class, 'contact']);
    Route::post('/store', [FrontendController::class, 'storecontuctus'])->name('education.contuctus.store');
    

});