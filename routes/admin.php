<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\PhotoGalleryController;
use App\Http\Controllers\VideoGalleryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\WidgetsController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OurClassController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\Template1Controller;
use App\Http\Controllers\ContuctUsController;
use App\Http\Controllers\VolunteerController;

Route::prefix('admin')->middleware('auth')->group(function () {

    
    Route::prefix('category')->group(function () {
    // Route::prefix('category')->middleware('auth')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('/update/{category}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
    });
    Route::prefix('sub-category')->group(function () {
    // Route::prefix('category')->middleware('auth')->group(function () {
        Route::get('/', [SubCategoryController::class, 'index'])->name('subcategory.index');
        Route::get('/create', [SubCategoryController::class, 'create'])->name('subcategory.create');
        Route::post('/store', [SubCategoryController::class, 'store'])->name('subcategory.store');
        Route::get('/edit/{subCategory}', [SubCategoryController::class, 'edit'])->name('subcategory.edit');
        Route::post('/update/{subCategory}', [SubCategoryController::class, 'update'])->name('subcategory.update');
        Route::delete('/destroy/{subCategory}', [SubCategoryController::class, 'destroy'])->name('subcategory.destroy');
    });
    
    
    Route::prefix('tag')->group(function () {
    // Route::prefix('tag')->middleware('auth')->group(function () {
        Route::get('/', [TagController::class, 'index'])->name('tag.index');
        Route::get('/create', [TagController::class, 'create'])->name('tag.create');
        Route::post('/store', [TagController::class, 'store'])->name('tag.store');
        Route::get('/edit/{tag}', [TagController::class, 'edit'])->name('tag.edit');
        Route::post('/update/{tag}', [TagController::class, 'update'])->name('tag.update');
        Route::delete('/destroy/{tag}', [TagController::class, 'destroy'])->name('tag.destroy');
    });
    
    
    Route::prefix('blog')->group(function () {
    // Route::prefix('blog')->middleware('auth')->group(function () {
        Route::get('/', [BlogController::class, 'index'])->name('blog.index');
        Route::get('/create', [BlogController::class, 'create'])->name('blog.create');
        Route::any('/store', [BlogController::class, 'store'])->name('blog.store');
        Route::get('/edit/{blog}', [BlogController::class, 'edit'])->name('blog.edit');
        Route::post('/update/{blog}', [BlogController::class, 'update'])->name('blog.update');
        Route::delete('/destroy/{blog}', [BlogController::class, 'destroy'])->name('blog.destroy'); 
    });
    
    
    Route::prefix('page')->group(function () {
        Route::get('/', [PageController::class, 'index'])->name('page.index');
        Route::get('/create', [PageController::class, 'create'])->name('page.create');
        Route::post('/store', [PageController::class, 'store'])->name('page.store');
        Route::get('/edit/{page}', [PageController::class, 'edit'])->name('page.edit');
        Route::post('/update/{page}', [PageController::class, 'update'])->name('page.update');
        Route::delete('/destroy/{page}', [PageController::class, 'destroy'])->name('page.destroy');
    });
    
    
    Route::prefix('slider')->group(function () {
        Route::get('/', [SliderController::class, 'index'])->name('slider.index');
        Route::get('/create', [SliderController::class, 'create'])->name('slider.create');
        Route::any('/store', [SliderController::class, 'store'])->name('slider.store');
        Route::get('/edit/{slider}', [SliderController::class, 'edit'])->name('slider.edit');
        Route::post('/update/{slider}', [SliderController::class, 'update'])->name('slider.update');
        Route::delete('/destroy/{slider}', [SliderController::class, 'destroy'])->name('slider.destroy');
    });
    
    
    Route::prefix('photogallery')->group(function () {
        Route::get('/', [PhotoGalleryController::class, 'index'])->name('photogallery.index');
        Route::get('/create', [PhotoGalleryController::class, 'create'])->name('photogallery.create');
        Route::post('/store', [PhotoGalleryController::class, 'store'])->name('photogallery.store');
        Route::get('/edit/{photoGallery}', [PhotoGalleryController::class, 'edit'])->name('photogallery.edit');
        Route::post('/update/{photoGallery}', [PhotoGalleryController::class, 'update'])->name('photogallery.update');
        Route::delete('/destroy/{photoGallery}', [PhotoGalleryController::class, 'destroy'])->name('photogallery.destroy');
    });
    
    
    Route::prefix('videogallery')->group(function () {
        Route::get('/', [VideoGalleryController::class, 'index'])->name('videogallery.index');
        Route::get('/create', [VideoGalleryController::class, 'create'])->name('videogallery.create');
        Route::post('/store', [VideoGalleryController::class, 'store'])->name('videogallery.store');
        Route::get('/edit/{videoGallery}', [VideoGalleryController::class, 'edit'])->name('videogallery.edit'); 
        Route::post('/update/{videoGallery}', [VideoGalleryController::class, 'update'])->name('videogallery.update');
        Route::delete('/destroy/{videoGallery}', [VideoGalleryController::class, 'destroy'])->name('videogallery.destroy');
    });
    
    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/store', [ProductController::class, 'store'])->name('product.store');
        Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('/update/{product}', [ProductController::class, 'update'])->name('product.update');
        Route::delete('/destroy/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
        Route::post('multiimage/delete', [ProductController::class, 'multiImageDestroy'])->name('multiimage.destroy');
    });
    
    Route::prefix('event')->group(function () {
        Route::get('/', [EventController::class, 'index'])->name('event.index');
        Route::get('/create', [EventController::class, 'create'])->name('event.create');
        Route::post('/store', [EventController::class, 'store'])->name('event.store');
        Route::get('/edit/{event}', [EventController::class, 'edit'])->name('event.edit');
        Route::post('/update/{event}', [EventController::class, 'update'])->name('event.update');
        Route::delete('/destroy/{event}', [EventController::class, 'destroy'])->name('event.destroy');
    });
    
    Route::prefix('notice')->group(function () {
        Route::get('/', [NoticeController::class, 'index'])->name('notice.index');
        Route::get('/create', [NoticeController::class, 'create'])->name('notice.create');
        Route::post('/store', [NoticeController::class, 'store'])->name('notice.store');
        Route::get('/edit/{notice}', [NoticeController::class, 'edit'])->name('notice.edit');
        Route::post('/update/{notice}', [NoticeController::class, 'update'])->name('notice.update');
        Route::delete('/destroy/{notice}', [NoticeController::class, 'destroy'])->name('notice.destroy');
    });
    
    
    Route::prefix('portfolio')->group(function () {
        Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
        Route::get('/create', [PortfolioController::class, 'create'])->name('portfolio.create');
        Route::post('/store', [PortfolioController::class, 'store'])->name('portfolio.store');
        Route::get('/edit/{portfolio}', [PortfolioController::class, 'edit'])->name('portfolio.edit');
        Route::post('/update/{portfolio}', [PortfolioController::class, 'update'])->name('portfolio.update');
        Route::delete('/destroy/{portfolio}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');
    });
    
    Route::prefix('widgets')->group(function () {
        Route::get('/', [WidgetsController::class, 'index'])->name('widgets.index');
        Route::get('/create', [WidgetsController::class, 'create'])->name('widgets.create');
        Route::post('/store', [WidgetsController::class, 'store'])->name('widgets.store');
        Route::get('/edit/{widgets}', [WidgetsController::class, 'edit'])->name('widgets.edit');
        Route::post('/update/{widgets}', [WidgetsController::class, 'update'])->name('widgets.update');
        Route::delete('/destroy/{widgets}', [WidgetsController::class, 'destroy'])->name('widgets.destroy');
    });
    
    Route::prefix('newsletter')->group(function () {
        Route::get('/', [NewsLetterController::class, 'index'])->name('newsletter.index');
        Route::get('/create', [NewsLetterController::class, 'create'])->name('newsletter.create');
        Route::post('/store', [NewsLetterController::class, 'store'])->name('newsletter.store');
        Route::get('/edit/{newsletter}', [NewsLetterController::class, 'edit'])->name('newsletter.edit');
        Route::post('/update/{newsletter}', [NewsLetterController::class, 'update'])->name('newsletter.update');
        Route::delete('/destroy/{newsletter}', [NewsLetterController::class, 'destroy'])->name('newsletter.destroy');
    });
    
    Route::prefix('content')->group(function () {
        Route::get('/', [ContentController::class, 'index'])->name('content.index');
        Route::get('/create', [ContentController::class, 'create'])->name('content.create');
        Route::post('/store', [ContentController::class, 'store'])->name('content.store');
        Route::get('/edit/{content}', [ContentController::class, 'edit'])->name('content.edit');
        Route::post('/update/{content}', [ContentController::class, 'update'])->name('content.update');
        Route::delete('/destroy/{content}', [ContentController::class, 'destroy'])->name('content.destroy');
    });
    
    
    Route::prefix('menu')->group(function () {
        Route::get('/', [MenuController::class, 'index'])->name('menu.index');
        Route::get('/{id}', [MenuController::class, 'order'])->name('menu.order');
        Route::get('/create', [MenuController::class, 'create'])->name('menu.create');
        Route::post('/store', [MenuController::class, 'store'])->name('menu.store');
        Route::get('/edit/{menu}', [MenuController::class, 'edit'])->name('menu.edit');
        Route::post('/update/{menu}', [MenuController::class, 'update'])->name('menu.update');
        Route::delete('/destroy/{menu}', [MenuController::class, 'destroy'])->name('menu.destroy');
    });
    
    Route::prefix('our-class')->group(function () {
        Route::get('/', [OurClassController::class, 'index'])->name('ourclass.index');
        Route::get('/create', [OurClassController::class, 'create'])->name('ourclass.create');
        Route::any('/store', [OurClassController::class, 'store'])->name('ourclass.store');
        Route::get('/edit/{ourClass}', [OurClassController::class, 'edit'])->name('ourclass.edit');
        Route::any('/update/{ourClass}', [OurClassController::class, 'update'])->name('ourclass.update');
        Route::delete('/destroy/{ourClass}', [OurClassController::class, 'destroy'])->name('ourclass.destroy');
    });

    Route::prefix('teacher')->group(function () {
        Route::get('/', [TeacherController::class, 'index'])->name('teacher.index');
        Route::get('/create', [TeacherController::class, 'create'])->name('teacher.create');
        Route::any('/store', [TeacherController::class, 'store'])->name('teacher.store');
        Route::get('/edit/{teacher}', [TeacherController::class, 'edit'])->name('teacher.edit');
        Route::any('/update/{teacher}', [TeacherController::class, 'update'])->name('teacher.update');
        Route::delete('/destroy/{teacher}', [TeacherController::class, 'destroy'])->name('teacher.destroy');
    });

    Route::prefix('settings')->group(function () {
        Route::get('/create', [SettingsController::class, 'create'])->name('settings.create');
        Route::post('/store', [SettingsController::class, 'store'])->name('settings.store');
        Route::get('/edit', [SettingsController::class, 'edit'])->name('settings.edit');
        Route::post('/update', [SettingsController::class, 'update'])->name('settings.update');
    });


    Route::prefix('template')->group(function () {
        Route::get('/', [Template1Controller::class, 'index'])->name('template1.index');
        Route::get('/create', [Template1Controller::class, 'create'])->name('template1.create');
        Route::post('/store', [Template1Controller::class, 'store'])->name('template1.store');
        Route::get('/edit/{template1}', [Template1Controller::class, 'edit'])->name('template1.edit');
        Route::post('/update/{template1}', [Template1Controller::class, 'update'])->name('template1.update');
        Route::delete('/destroy/{template1}', [Template1Controller::class, 'destroy'])->name('template1.destroy');
    });


    Route::prefix('contact-us')->group(function () {
        Route::get('/', [ContuctUsController::class, 'index'])->name('contactus.index');
        Route::delete('/destroy/{contuctUs}', [ContuctUsController::class, 'destroy'])->name('contact.destroy');
    });

    Route::prefix('volunteer')->group(function () {
        // Route::prefix('blog')->middleware('auth')->group(function () {
            Route::get('/', [VolunteerController::class, 'index'])->name('volunteer.index');
            Route::get('/create', [VolunteerController::class, 'create'])->name('volunteer.create');
            Route::any('/store', [VolunteerController::class, 'store'])->name('volunteer.store');
           
            Route::get('/edit/{volunteer}', [VolunteerController::class, 'edit'])->name('volunteer.edit');
            Route::post('/update/{volunteer}', [VolunteerController::class, 'update'])->name('volunteer.update');
            Route::delete('/destroy/{volunteer}', [VolunteerController::class, 'destroy'])->name('volunteer.destroy'); 
        });


});