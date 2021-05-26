<?php

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Redirect;
use Money\Exchange;
use Stripe\Stripe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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




Route::get('/welcome', 'App\Http\Controllers\WelcomeController@index')->name('welcome.home');
Route::get('/welcome/{product}', 'App\Http\Controllers\WelcomeController@show')->name('welcome.show');


Route::get('/info', 'App\Http\Controllers\InfoController@index')->name('info.onas');

Route::get('/iphone', 'App\Http\Controllers\IphoneController@index')->name('iphone.iphone');
Route::get('/ipad', 'App\Http\Controllers\IpadController@index')->name('ipad.ipad');
Route::get('/mac', 'App\Http\Controllers\MacController@index')->name('mac.mac');
Route::get('/watch', 'App\Http\Controllers\WatchController@index')->name('watch.watch');
Route::get('/servis', 'App\Http\Controllers\ServisController@index')->name('service.service');


Route::get('/checkout', 'App\Http\Controllers\CheckoutController@index')->name('checkout.cart')->middleware('auth');
//Route::get('/product', 'App\Http\Controllers\ProductController@index')->name('product.spec');


Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cart.shop');
Route::post('/cart', 'App\Http\Controllers\CartController@store')->name('cart.store');
Route::patch('/cart/{product}', 'App\Http\Controllers\CartController@update')->name('cart.update');
Route::delete('/cart/{product}', 'App\Http\Controllers\CartController@destroy')->name('cart.destroy');

Route::get('empty', function () {
    Cart::destroy();
});


Route::get('/thankyou', 'App\Http\Controllers\ThankyouController@index')->name('thankyou.order');



//Route::post('/checkout', [CheckoutController::class, 'paymentProcess'])->name('checkout.payment');
Route::post('/checkout', 'App\Http\Controllers\CheckoutController@paymentProcess')->name('checkout.payment')->middleware('auth');
Route::post('/servis', 'App\Http\Controllers\ServisController@payProcess')->name('servis.payment');

/*
Route::get('/watch', 'watch');
Route::view('/mac', 'mac');
Route::view('/ipad', 'ipad');
Route::view('/iphone', 'iphone');

Route::view('/product', 'product');
Route::view('/cart', 'cart');

Route::view('/servis', 'servis');
Route::view('/info', 'info');

*/

/*
Route::get('/payment', 'PaymentController@index');
Route::post('/charge', 'PaymentController@charge');


Route::get('/stripe-payment', [StripeController::class, 'handleGet']);
Route::post('/stripe-payment', [StripeController::class, 'handlePost'])->name('stripe.payment');
*/



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
