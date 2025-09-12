<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Mail\SendWelcomeEmail;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    // $user = new \App\Models\User();
    // $user->name = 'Petrus Handika';
    // $user->email = 'petrushandikasinaga@gmail.com';
    // $user->password = bcrypt('password');
    // $user->save();

    // Static method
    // $user = \App\Models\User::create([
    //     'name' => 'Isah Veronika',
    //     'email' => 'isahveronika@gmail.com',
    //     'password' => bcrypt('password'),
    // ]);

    \App\Models\Product::create([
            'name' => 'NikeCourt Legacy Next Nature',
            'description' => 'NikeCourt Legacy Next Nature adalah sepatu wanita klasik yang terinspirasi dari budaya tenis, dibuat dengan setidaknya 20% bahan daur ulang. Sepatu ini menggabungkan gaya olahraga dan fashion dengan kulit sintetis yang tahan lama dan desain retro, serta memberikan traksi yang baik dengan sol karet berpola herringbone.',
            'price' => 100000,
            'image' => 'https://static.nike.com/a/images/t_PDP_936_v1/f_auto,q_auto:eco/f1f272c7-7c79-4fab-9d11-cdf96b67e0cf/WMNS+NIKE+COURT+LEGACY+NN.png'
    ]);

});

Route::prefix('product')->middleware('valid-token')->group(function () {
    ;
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

Route::get('/send', function () {
    Mail::to('petrushandikasinaga@gmail.com')->send(new SendWelcomeEmail());
});
