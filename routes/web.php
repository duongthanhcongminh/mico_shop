<?php

use Illuminate\Support\Facades\Route;

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


//Front (Client)
Route::get('/', [\App\Http\Controllers\Front\HomeController::class,'index']);
Route::get('blogdetail/{id}', [\App\Http\Controllers\Front\HomeController::class, 'getBlogDetail']);
Route::get('blog', [\App\Http\Controllers\Front\HomeController::class, 'getBlog']);

Route::prefix('shop')->group(function(){
    Route::get('product/{id}', [App\Http\Controllers\Front\ShopController::class, 'show']);
    Route::post('product/{id}', [App\Http\Controllers\Front\ShopController::class, 'postComment']);
    Route::get('', [App\Http\Controllers\Front\ShopController::class, 'index']);
    Route::get('/category/{categoryName}', [App\Http\Controllers\Front\ShopController::class, 'category']);
});

Route::prefix('cart')->group(function(){
    Route::get('add/{id}', [App\Http\Controllers\Front\CartController::class, 'add']);
    Route::get('/', [App\Http\Controllers\Front\CartController::class, 'index']);
    Route::get('delete/{id}', [App\Http\Controllers\Front\CartController::class, 'delete']);
    Route::get('update/{id}/{qty}/{price}', [App\Http\Controllers\Front\CartController::class, 'update']);
});

Route::prefix('checkout')->group(function() {
    Route::get('', [\App\Http\Controllers\Front\CheckOutController::class, 'index']);
    Route::post('/', [\App\Http\Controllers\Front\CheckOutController::class, 'addOrder']);
    Route::get('/result', [\App\Http\Controllers\Front\CheckOutController::class, 'result']);

    Route::get('/vnPayCheck', [\App\Http\Controllers\Front\CheckOutController::class, 'vnPayCheck']);
});

Route::prefix('account')->group(function(){
    Route::get('login',[\App\Http\Controllers\Front\AccountController::class,'login']);
    Route::post('login',[\App\Http\Controllers\Front\AccountController::class,'checkLogin']);
    Route::get('logout',[\App\Http\Controllers\Front\AccountController::class,'logout']);

    Route::get('register',[\App\Http\Controllers\Front\AccountController::class,'register']);
    Route::post('register',[\App\Http\Controllers\Front\AccountController::class,'postRegister']);

    Route::get('info',[\App\Http\Controllers\Front\AccountController::class,'myInfoIndex']);
    Route::get('edit-info/{id}',[\App\Http\Controllers\Front\AccountController::class,'myInfoEdit']);
    Route::post('edit-info/{id}',[\App\Http\Controllers\Front\AccountController::class,'myInfoUpdate']);

    Route::prefix('my-order')->group(function (){
        Route::get('/',[\App\Http\Controllers\Front\AccountController::class,'myOrderIndex']);
        Route::post('{id}',[\App\Http\Controllers\Front\AccountController::class,'myOrderShow']);
    });
});

// Dashboard (Admin)
Route::prefix('admin')->middleware('CheckLogin')->group(function(){
    Route::redirect('','admin/order');

    Route::resource('user',\App\Http\Controllers\Admin\UserController::class);
    Route::resource('category',\App\Http\Controllers\Admin\ProductCategoryController::class);
    Route::resource('brand',\App\Http\Controllers\Admin\BrandController::class);
    Route::resource('product',\App\Http\Controllers\Admin\ProductController::class);
    Route::resource('product/{product_id}/image',\App\Http\Controllers\Admin\ProductImageController::class);
    Route::resource('product/{product_id}/detail',\App\Http\Controllers\Admin\ProductDetailController::class);
    Route::resource('order',\App\Http\Controllers\Admin\OrderController::class);
    Route::resource('blog',\App\Http\Controllers\Admin\BlogController::class);

    Route::prefix('login')->group(function (){
        Route::get('',[\App\Http\Controllers\Admin\HomeController::class,'getLogin'])->withoutMiddleware('CheckLogin');
        Route::post('',[\App\Http\Controllers\Admin\HomeController::class,'postLogin'])->withoutMiddleware('CheckLogin');
    });

    Route::get('logout',[\App\Http\Controllers\Admin\HomeController::class,'logout']);

    Route::prefix('account')->group(function () {
        Route::get('info', [\App\Http\Controllers\Admin\HomeController::class, 'myInfoIndex']);
        Route::get('edit-info/{id}', [\App\Http\Controllers\Admin\HomeController::class, 'myInfoEdit']);
        Route::post('edit-info/{id}', [\App\Http\Controllers\Admin\HomeController::class, 'myInfoUpdate']);
    });
});

