<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ItemFoodController;
use App\Http\Controllers\AccountMaintenanceController;

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


Auth::routes();

Route::group(['middleware' => 'localization'], function () {
    Route::get('set-locale/{locale}', function ($locale) {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    })->name('locale.setting');

    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/', [HomeController::class, 'index'])->name('homepage');
    Route::get('/product-detail/{id}', [HomeController::class, 'detail'])->name('product.details');

    Route::middleware(['auth'])->group(function () {
        Route::get('profile', [ProfileController::class, 'index'])->name('profile');
        Route::post('update', [ProfileController::class, 'update'])->name('profile.update');

        Route::get('cart', [ProfileController::class, 'mycart'])->name('mycart');
        Route::get('cart/delete/{id}', [ProfileController::class, 'delete_cart'])->name('delete_cart');

        Route::get('buy/{id}', [ProfileController::class, 'buy'])->name('buy');
        Route::get('checkout', [ProfileController::class, 'checkout'])->name('checkout');

        Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
            Route::get('product-create', [ItemFoodController::class, 'create'])->name('food.create');
            Route::post('product-store', [ItemFoodController::class, 'store'])->name('food.store');
            Route::get('product-edit/{id}', [ItemFoodController::class, 'edit'])->name('food.edit');
            // Route::post('product-update/{id}', [ItemFoodController::class, 'update'])->name('food.update');
            Route::post('product-update/{id}', [ItemFoodController::class, 'update'])->name('food.update');
            Route::get('product-delete/{id}', [ItemFoodController::class, 'delete'])->name('food.delete');

            Route::get('account-maintenance', [AccountMaintenanceController::class, 'index'])->name('accounts-maintenance');
            Route::get('account-edit/{id}', [AccountMaintenanceController::class, 'edit_role'])->name('accounts.edit');

            Route::post('account-update/{id}', [AccountMaintenanceController::class, 'update_role'])->name('accounts.update');
            Route::get('account-delete/{id}', [AccountMaintenanceController::class, 'delete_user'])->name('accounts.delete');
        });
    });
});
