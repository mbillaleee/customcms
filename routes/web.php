<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\PhotoGalleryController;
use App\Http\Controllers\VideoGalleryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\WidgetsController;
use App\Http\Controllers\NewsLetterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Dahboard
Route::get('/', function () {
    return view('index');
});

// UI
Route::prefix('ui')->group(function () {

    // Form
    Route::prefix('form')->group(function () {
        Route::get('/components', function () {
            return view('form-components');
        });
        Route::get('/input-groups', function () {
            return view('form-input-groups');
        });
        Route::get('/layout', function () {
            return view('form-layout');
        });
        Route::get('/validations', function () {
            return view('form-validations');
        });
        Route::get('/wizards', function () {
            return view('form-wizards');
        });
    });

    // Components
    Route::prefix('components')->group(function () {
        Route::get('/alerts', function () {
            return view('components-alerts');
        });
        Route::get('/avatars', function () {
            return view('components-avatars');
        });
        Route::get('/badges', function () {
            return view('components-badges');
        });
        Route::get('/buttons', function () {
            return view('components-buttons');
        });
        Route::get('/cards', function () {
            return view('components-cards');
        });
        Route::get('/collapse', function () {
            return view('components-collapse');
        });
        Route::get('/colors', function () {
            return view('components-colors');
        });
        Route::get('/dropdowns', function () {
            return view('components-dropdowns');
        });
        Route::get('/modal', function () {
            return view('components-modal');
        });
        Route::get('/popovers-tooltips', function () {
            return view('components-popovers-tooltips');
        });
        Route::get('/tables', function () {
            return view('components-tables');
        });
        Route::get('/tabs', function () {
            return view('components-tabs');
        });
        Route::get('/toasts', function () {
            return view('components-toasts');
        });
    });

    // Extras
    Route::prefix('extras')->group(function () {
        Route::get('/carousel', function () {
            return view('extras-carousel');
        });
        Route::get('/charts', function () {
            return view('extras-charts');
        });
        Route::get('/editors', function () {
            return view('extras-editors');
        });
        Route::get('/sortable', function () {
            return view('extras-sortable');
        });
    });
});

// Applications
Route::prefix('applications')->group(function () {
    Route::get('/chat', function () {
        return view('applications-chat');
    });
    Route::get('/media-library', function () {
        return view('applications-media-library');
    });
    Route::get('/point-of-sale', function () {
        return view('applications-point-of-sale');
    });
    Route::get('/to-do', function () {
        return view('applications-to-do');
    });
});

// Pages
Route::prefix('pages')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::get('/login', function () {
            return view('auth-login');
        });
        Route::get('/forgot-password', function () {
            return view('auth-forgot-password');
        });
        Route::get('/register', function () {
            return view('auth-register');
        });
    });
    Route::prefix('blog')->group(function () {
        Route::get('/list', function () {
            return view('blog-list');
        });
        Route::get('/list-card-rows', function () {
            return view('blog-list-card-rows');
        });
        Route::get('/list-card-columns', function () {
            return view('blog-list-card-columns');
        });
        Route::get('/add', function () {
            return view('blog-add');
        });
    });
    Route::prefix('errors')->group(function () {
        Route::get('/403', function () {
            return view('errors-403');
        });
        Route::get('/404', function () {
            return view('errors-404');
        });
        Route::get('/500', function () {
            return view('errors-500');
        });
        Route::get('/under-maintenance', function () {
            return view('errors-under-maintenance');
        });
    });
    Route::get('/pricing', function () {
        return view('pages-pricing');
    });
    Route::get('/faqs-layout-1', function () {
        return view('pages-faqs-layout-1');
    });
    Route::get('/faqs-layout-2', function () {
        return view('pages-faqs-layout-2');
    });
    Route::get('/invoice', function () {
        return view('pages-invoice');
    });
});

// Blank
Route::get('/blank', function () {
    return view('blank');
});



Route::prefix('category')->group(function () {
// Route::prefix('category')->middleware('auth')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/update/{category}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
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
    Route::post('/store', [BlogController::class, 'store'])->name('blog.store');
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
    Route::post('/store', [SliderController::class, 'store'])->name('slider.store');
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


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

});


require __DIR__.'/auth.php';