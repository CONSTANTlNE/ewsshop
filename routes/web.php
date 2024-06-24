<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HeaderNameController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MainBannerController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ShopController;

use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\RoutePath;
use Bugsnag\BugsnagLaravel\Facades\Bugsnag;

// different for testing purposes

Route::get('logoutme', function () {
    auth()->logout();
    return redirect()->route('login');
});

Route::get('/test', function () {

    Bugsnag::notifyException(new RuntimeException("Test error"));

});

//===========================================================

Route::get('/', [LandingController::class, 'index'])->name('index');

Route::middleware('auth')->group(function () {

    route::post('shop/logo/update', [ShopController::class, 'logoUpdate'])->name('update.logo');
    route::get('/mobile/confirm', [ShopController::class, 'mobConfirm'])->name('confirm.mobile');
    route::post('/mobile/store', [ShopController::class, 'mobStore'])->name('mobile.store');
    route::post('/mobile/confirm2', [ShopController::class, 'mobConfirm2'])->name('confirm.mobile2');
    route::get('/shop/create', [ShopController::class, 'create'])->name('shop.create');

    Route::post('/store', [ShopController::class, 'store'])->name('shop.store');
    Route::post('/settings/update', [SettingController::class, 'update'])->name('settings.update');
    Route::post('shop/settings/update', [SettingController::class, 'shopSettings'])->name('shop.settings.update');
    Route::post('shop/category/image/update', [CategoryController::class, 'imageUpdate'])->name('categoryimageupdate');
    route::get('/mobile/confirm', [ShopController::class, 'mobConfirm'])->name('confirm.mobile');
    route::get('/shop/description/edit', [ShopController::class, 'descrHtmxEdit'])->name('shop.desctription.edit');
    route::post('/shop/description/update', [ShopController::class, 'descrHtmxUpdate'])->name('shop.desctription.update');

   // Main Banner
    route::post('/banner/main/delete', [MainBannerController::class, 'delete'])->name('main.banner.delete');
    route::get('/banner/main/edit/{banner}', [MainBannerController::class, 'edit'])->name('main.banner.edit');
    route::post('/banner/main/store', [MainBannerController::class, 'store'])->name('main.banner.store');
    route::post('/banner/main/update', [MainBannerController::class, 'update'])->name('main.banner.update');


    // product routes
    Route::get('product/add/modal', [ProductController::class, 'addprductmodal'])->name('addprductmodal');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::post('/product/store/htmx', [ProductController::class, 'storeHtmx'])->name('product.store.htmx');
    route::post('/product/update', [ProductController::class, 'update'])->name('product.update');
    route::post('/product/update/htmx', [ProductController::class, 'updateHtmx'])->name('product.update.htmx');
    route::post('/product/image/delete',
        [ProductController::class, 'imageDelete'])->name('admin.product.removeimage');

    route::get('{shop}/product/edit/{product}/{initiator}', [ProductController::class, 'edit'])->name('product.edit');

    // Category routes
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::post('/category/htmx/store', [CategoryController::class, 'storeHtmx'])->name('category.store.htmx');
    Route::get('/category/htmx/edit', [CategoryController::class, 'editHtmx'])->name('category.edit.htmx');
    Route::post('/category/htmx/update', [CategoryController::class, 'updateHtmx'])->name('category.update.htmx');
    Route::post('/category/delete', [CategoryController::class, 'delete'])->name('category.delete');

    route::post('/product/delete', [ProductController::class, 'destroy'])->name('product.delete');
    route::post('/product/delete/htmx', [ProductController::class, 'destroyHtmx'])->name('product.delete.htmx');
    route::post('/product/delete/htmx2', [ProductController::class, 'destroyHtmx2'])->name('product.delete.htmx2');

});


Route::get('auth/google/redirect', [SocialiteController::class, 'googleredirect'])->name('google.login');
Route::get('auth/google/callback', [SocialiteController::class, 'googlecallback']);
Route::get('auth/facebook/redirect', [SocialiteController::class, 'facebookedirect'])->name('facebook.login');
Route::get('auth/facebook/callback', [SocialiteController::class, 'facebookcallback']);


Route::prefix('{shop?}')
    ->group(function () {


        Route::get('/', [MainController::class, 'index'])->name('home');
        Route::get('/products', [MainController::class, 'allProducts'])->name('products');
        Route::get('/products/{sort}', [MainController::class, 'allProductsSorting'])->name('products.sorted');
        Route::get('/{category}', [CategoryController::class, 'category'])->name('categories');
        Route::get('/{category}/{sort}', [CategoryController::class, 'categorySorting'])->name('categories.sorted');
        Route::get('/products/single/{product}', [ProductController::class, 'singleProduct'])->name('single.product');


        //demonstrating routes


        route::get('/header/text/popular/edit',
            [HeaderNameController::class, 'headerEdit'])->name('shop.populartext.edit');
        route::post('/header/text/popular/update',
            [HeaderNameController::class, 'headerUpdate'])->name('shop.populartext.update');

        //HTMX
        Route::get('/shop/quickview/{product}', [ProductController::class, 'quickView'])->name('quickView');
        Route::get('/product/dynamic/search', [ProductController::class, 'htmxsearch'])->name('product.search');
        Route::get('/product/dynamic/searchmobile', [ProductController::class, 'htmxsearchmobile'])->name('product.searchmobile');


    });




