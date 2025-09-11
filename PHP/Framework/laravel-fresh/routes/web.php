<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('product')->middleware('valid-token')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/detail/{id}', [ProductController::class, 'detail']);
});

Route::get('/promo', function () {
    $promos = [
        'Diskon 10% untuk produk A',
        'Beli 1 gratis 1 produk B',
        'Gratis ongkir untuk pembelian di atas 100rb',
        'Voucher cashback 20rb',
        'Flash sale produk C hanya hari ini!'
    ];
    return view('promo', ['promos' => $promos]);
});

Route::get('/product/detail/{id}', [ProductController::class, 'detail']);
