<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HeaderNameController;
use App\Http\Controllers\MainBannerController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ShopController;

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\RoutePath;


Route::get('logoutme', function () {
    auth()->logout();
    return redirect()->route('login');
});




Route::get('/',function (){

    return view('index');

});





Route::middleware('auth')->group(function () {

    route::get('/mobile/confirm', [ShopController::class, 'mobConfirm'])->name('confirm.mobile');
    route::post('/mobile/store', [ShopController::class, 'mobStore'])->name('mobile.store');
    route::post('/mobile/confirm2', [ShopController::class, 'mobConfirm2'])->name('confirm.mobile2');
    route::get('/shop/create', [ShopController::class, 'create'])->name('shop.create');


    Route::post('/store', [ShopController::class, 'store'])->name('shop.store');
    Route::post('/settings/update', [SettingController::class, 'update'])->name('settings.update');
    Route::post('shop/settings/update', [SettingController::class, 'shopSettings'])->name('shop.settings.update');

});




Route::prefix('{shop}')
    ->group(function () {
        Route::get('/', [MainController::class, 'index'])->name('home');
        Route::get('/products', [MainController::class, 'allProducts'])->name('products');
        Route::get('/products/{sort}', [MainController::class, 'allProductsSorting'])->name('products.sorted');
        Route::get('/{category}', [CategoryController::class, 'category'])->name('categories');
        Route::get('/{category}/{sort}', [CategoryController::class, 'categorySorting'])->name('categories.sorted');
        Route::get('/products/single', function () {
            return view('pages.single-product');
        })->name('single.product');


        //demonstrating routes

        Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
        route::post('/product/delete', [ProductController::class, 'destroy'])->name('product.delete');

        route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');


        Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
        route::post('/product/update', [ProductController::class, 'update'])->name('product.update');
        route::post('/product/image/delete',
            [ProductController::class, 'imageDelete'])->name('admin.product.removeimage');

        route::get('/banner/main/edit/{banner}', [MainBannerController::class, 'edit'])->name('main.banner.edit');
        route::post('/banner/main/store', [MainBannerController::class, 'store'])->name('main.banner.store');
        route::post('/banner/main/update', [MainBannerController::class, 'update'])->name('main.banner.update');
        route::post('/banner/main/delete', [MainBannerController::class, 'delete'])->name('main.banner.delete');

        route::get('/header/text/popular/edit',
            [HeaderNameController::class, 'headerEdit'])->name('shop.populartext.edit');
        route::post('/header/text/popular/update',
            [HeaderNameController::class, 'headerUpdate'])->name('shop.populartext.update');

        //HTMX
        Route::get('/shop/quickview/{product}', [ProductController::class, 'quickView'])->name('quickView');


    });
