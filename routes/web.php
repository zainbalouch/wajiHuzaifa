<?php

use App\Http\Controllers\registrationController;
use App\Http\Controllers\WajahatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\AddPeopleController;
use App\Http\Controllers\AddingPeopleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\ForAuthnticatedUsers;
use App\Http\Middleware\ForLoggedInUssers;
use App\Http\Middleware\ForNotLoggedInUsers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('demo');
// });


// Route::get('/demo', [WajahatController::class , 'demo'] );
// route::get('/registration' , [registrationController::class, 'register']);

// route::post('/registrationData', [registrationController::class, 'registrationData']);

// route::get('/calculator',[CalculatorController::class,'calculator']);
// route::post('/calculator',[CalculatorController::class,'calculatorResult']);

// route::get('/addPeople',[AddPeopleController::class, 'addPeople']);
// route::post('/addPeople', [AddPeopleController::class, 'peopleData']);
// route::get('/list_People', [AddPeopleController::class, 'list_People'] );
// route::post('/update_people',[AddPeopleController::class, 'update_people']);
// route::get('/deletepeople',[AddPeopleController::class,'deletepeople']);

// route::get('/people-add',[AddingPeopleController::class, 'peopleadd']);
// route::post('/people-add', [AddingPeopleController::class,'storepeople']);
// route::get('/people-list',[AddingPeopleController::class,'peoplelist']);

// route::post('/people-update',[AddingPeopleController::class,'peopleupdate']);
// route::get('/peopledelete',[AddingPeopleController::class,'peopledelete']);


route::get('/',[BlogController::class,'homePage']);

route::get('/addblog',[BlogController::class,'addblog'])->middleware(ForLoggedInUssers::class);
route::post('/addblog',[BlogController::class,'storeblog'])->middleware(ForLoggedInUssers::class);

route::get('/viewblog',[BlogController::class,'viewblog']);
route::get('/blogdetail',[BlogController::class,'blogdetail']);




route::get('/login',[UserController::class,'loginPage'])->middleware(ForNotLoggedInUsers::class);
route::post('/loginData',[UserController::class,'loginData'])->middleware(ForNotLoggedInUsers::class);
route::get('/register',[UserController::class,'registerPage'])->middleware(ForNotLoggedInUsers::class);
route::post('/registerData',[UserController::class,'registerData'])->middleware(ForNotLoggedInUsers::class);

