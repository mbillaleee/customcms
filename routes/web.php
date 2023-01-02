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
use App\Http\Controllers\ProductEventGalleryController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\Template1Controller;
use App\Http\Controllers\EducationFrontendController;
use App\Http\Controllers\OurClassController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\FrontendController;

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
Route::group(['middleware' => ['auth']], function() {
    Route::get('/', function () {
        return view('index');
    });
});



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


// Route::prefix('education')->group(function () {
//     Route::get('/home', [EducationFrontendController::class, 'index'])->name('photogallery.index');
//     // Route::get('/home', [EducationFrontendController::class, 'index'])->name('photogallery.index');
//     Route::get('/teacher', [EducationFrontendController::class, 'teachers']);
//     Route::get('/about', [EducationFrontendController::class, 'aboutteachers']);
//     Route::get('/class-grid', [EducationFrontendController::class, 'classgrid']);
//     Route::get('/class-list', [EducationFrontendController::class, 'classlist']);
//     Route::get('/blog-details', [EducationFrontendController::class, 'blogdetails']);
    // Route::get('/home', function () {
    //     return view('frontend-template1/index');
    // });
    // Route::get('/about', function () {
    //     return view('frontend-template1/about');
    // });
    // Route::get('/contact', function () {
    //     return view('frontend-template1/contact');
    // });
    // Route::get('/gallery', function () {
    //     return view('frontend-template1/gallery');
    // });
    // Route::get('/blog-details', function () {
    //     return view('frontend-template1/blog-details');
    // });
    // Route::get('/blog', function () {
    //     return view('frontend-template1/blog');
    // });
    // Route::get('/class-grid', function () {
    //     return view('frontend-template1/class-grid');
    // });
    // Route::get('/class-list', function () {
    //     return view('frontend-template1/class-list');
    // });
    // Route::get('/class-details', function () {
    //     return view('frontend-template1/class-details');
    // });
    // Route::get('/teachers-info', function () {
    //     return view('frontend-template1/teachers-info');
    // });
    // Route::get('/teacher', function () {
    //     return view('frontend-template1/teacher');
    // });
// });


Route::prefix('ecommerce')->group(function () {
    Route::get('/home', [FrontendController::class, 'index'])->name('ecommerce.index');
    // Route::get('/home', function () {
    //     return view('frontend-ecommerce/index');
    // });
    Route::get('/category', function () {
        return view('frontend-ecommerce/category');
    });
    Route::get('/product', function () {
        return view('frontend-ecommerce/product');
    });
    Route::get('/product-detail', function () {
        return view('frontend-ecommerce/product-detail');
    });
    Route::get('/contact', function () {
        return view('frontend-ecommerce/contact');
    });
    Route::get('/wishlist', function () {
        return view('frontend-ecommerce/wishlist');
    });
    Route::get('/blog-single', function () {
        return view('frontend-ecommerce/blog-single');
    });
    Route::get('/cart', function () {
        return view('frontend-ecommerce/cart');
    });
    Route::get('/checkout', function () {
        return view('frontend-ecommerce/checkout');
    });
    Route::get('/account', function () {
        return view('frontend-ecommerce/account');
    });
    Route::get('/teachers-info', function () {
        return view('frontend-ecommerce/teachers-info');
    });
    Route::get('/teacher', function () {
        return view('frontend-ecommerce/teacher');
    });
});

// Route::get('/frontend-template1', function () {
//     return view('frontend-template1/index');
// });
Route::get('/frontend-it-solution', function () {
    return view('frontend-template2/index');
});

Route::get('/frontend-template3', function () {
    return view('frontend-template3/index');
});

Route::get('/frontend-template4', function () {
    return view('frontend-template4/index');
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







Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

});



require __DIR__.'/ecommerce.php';
require __DIR__.'/education.php';
require __DIR__.'/admin.php';
require __DIR__.'/auth.php';