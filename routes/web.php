<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/about', [PageController::class, 'about']); 
Route::get('/home', [PageController::class, 'home']);  
Route::get('/', function () {
    return 'Hello, Laravel!';
});

