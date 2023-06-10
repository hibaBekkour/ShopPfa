<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PaymentController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/discover', function () {
    return view('discover');
});





Route::get('/cart', function () {
    return view('cart');
});

Route::get('/payment', function () {
    return view('payment');
})->name('payment');


Route::post('/process-payment', [PaymentController::class, 'processPayment'])->name('process.payment');

Route::get('/shipping', function () {
    return view('shippingMode');
});

// Route::post('/store-location', 'App\Http\Controllers\LocationController@store')->name('store.location');
Route::get('/store-location', [LocationController::class, 'store'])->name('store.location');

Route::get('/payment-success', function () {
    return view('paymentSuccess');
})->name('payment.success');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
