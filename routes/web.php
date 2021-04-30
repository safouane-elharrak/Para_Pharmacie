<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Produit\ProductController;
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

Route::get('/', function () {
    return view('home');
});
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin route pour client et produits
Route::prefix('admin')->middleware(['auth','auth.isAdmin'])->name('admin.')->group(function(){
    Route::resource('/clients',UserController::class);
    Route::resource('/products', ProductController::class);
});

// Les routes de gestion du panier
Route::get('basket',[App\Http\Controllers\BasketController::class,'show'])->name('basket.show');
Route::post('basket/add/{product}', [App\Http\Controllers\BasketController::class,'add'])->name('basket.add');
Route::get('basket/remove/{product}', [App\Http\Controllers\BasketController::class,'remove'])->name('basket.remove');
Route::get('basket/empty', [App\Http\Controllers\BasketController::class,'empty'])->name('basket.empty');

Route::group(['middleware' => ['auth']], function () {
Route::post('/checkout', [App\Http\Controllers\CheckoutController::class,'getCheckout'])->name('checkout.index');
Route::post('/checkout/order', [App\Http\Controllers\CheckoutController::class,'placeOrder'])->name('checkout.place.order');
});
Route::get('checkout/payment/complete', 'CheckoutController@complete')->name('checkout.payment.complete');
Route::get('orders', [App\Http\Controllers\CheckoutController::class,'show'])->name('showorders');
