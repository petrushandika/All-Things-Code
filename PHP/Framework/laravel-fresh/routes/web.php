<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
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

Route::get('/send', function () {
    Mail::to('petrushandikasinaga@gmail.com')->send(new SendWelcomeEmail());
});
