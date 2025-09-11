<?php

require_once __DIR__ . "/../vendor/autoload.php";

use PetrusHandika\Learning\PHP\MVC\App\Route;
use PetrusHandika\Learning\PHP\MVC\Controller\HomeController;

Route::add("GET", "/", HomeController::class, "index");
Route::add("GET", "/hello", HomeController::class, "hello");
Route::add("GET", "/world", HomeController::class, "world");

Route::run();
