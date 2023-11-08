<?php

use Illuminate\Support\Facades\Route;

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
    return view('inicio');
});

Route::get('/FAQ', function () {
    return view('FAQ');
});

Route::get('/contacto', function () {
    return view('Contact');
});

Route::get('/nosotros', function () {
    return view('aboutus');
});

Route::get('/direccion', function () {
    return view('direccion');
});

Route::get('/servicios', function () {
    return view('Video');
});

Route::get('/url', function () {
    return view('quejas');
});
// APARTE

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// OTRAS RUTAS

// Route::get('/', [CartController::class, 'shop'])->name('shop');
// Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
// Route::post('/add', [CartController::class, 'add'])->name('cart.store');
// Route::post('/update', [CartController::class, 'update'])->name('cart.update');
// Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
// Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
