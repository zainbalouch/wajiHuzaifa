<?php

use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'homePage']);
Route::get('/login', [HomeController::class, 'loginPage']);
Route::post('/loginData', [HomeController::class, 'loginData']);


Route::get('/calculator', [CalculatorController::class, 'calculatorPage']);
Route::post('/calculator', [CalculatorController::class, 'calculatorResult']);

Route::get('/add-person', [PersonController::class, 'addPersonPage']);
Route::post('/add-person', [PersonController::class, 'addPerson']);

