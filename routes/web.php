<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\BlogController;

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
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/update/{category}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
});


Route::prefix('tag')->group(function () {
    Route::get('/', [TagController::class, 'index'])->name('tag.index');
    Route::get('/create', [TagController::class, 'create'])->name('tag.create');
    Route::post('/store', [TagController::class, 'store'])->name('tag.store');
    Route::get('/edit/{tag}', [TagController::class, 'edit'])->name('tag.edit');
    Route::post('/update/{tag}', [TagController::class, 'update'])->name('tag.update');
    Route::delete('/destroy/{tag}', [TagController::class, 'destroy'])->name('tag.destroy');
});


Route::prefix('blog')->middleware('auth')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/store', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/edit/{blog}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::post('/update/{blog}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/destroy/{blog}', [BlogController::class, 'destroy'])->name('blog.destroy');
});

require __DIR__.'/auth.php';
