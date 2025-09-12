<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Mail\SendWelcomeEmail;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('user')->group(function () {
    Route::get('/{id}', [ProfileController::class, 'show']);
    Route::get('/profile', [ProfileController::class, 'profile']);
});

Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index']);     
    Route::get('/{id}', [ProductController::class, 'show']);  
    Route::post('/', [ProductController::class, 'store']);    
    Route::put('/{id}', [ProductController::class, 'update']);
    Route::delete('/{id}', [ProductController::class, 'destroy']);
});

Route::get('/send', function () {
    Mail::to('petrushandikasinaga@gmail.com')->send(new SendWelcomeEmail());
});
