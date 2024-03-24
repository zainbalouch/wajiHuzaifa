<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'homePage']);
Route::get('/login', [HomeController::class, 'loginPage']);

Route::post('/loginData', [HomeController::class, 'loginData']);

