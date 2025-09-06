<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Mail\SendMeWelcomeEmail;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    // return view('welcome');
});

Route::get('/belajar', function () {
    dd("Hello this is new route!");
});

Route::prefix('buku')->group(function () {
    Route::get('/', [BukuController::class, 'index']);

    Route::get('/send', function () {
        Mail::to('petrushandikasinaga@gmail.com')->send(new SendMeWelcomeEmail());
    });

    Route::get('/detail/{id?}', [BukuController::class, 'detail']);
});

// Route::post('/detail-buku/{id?}', function($id) {
//     dd("Hello this is new route ($id)!");
// });

// Route::put('/detail-buku/{id?}', function($id) {
//     dd("Hello this is new route ($id)!");
// });

// Route::delete('/detail-buku/{id?}', function($id) {
//     dd("Hello this is new route ($id)!");
// });
