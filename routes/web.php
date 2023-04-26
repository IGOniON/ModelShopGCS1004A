<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ConnectController;
use PhpParser\Node\Name;

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


//HomePages
Route::get('/Customer/index',[HomePageController::class,'index']);
Route::get('/Customer/products',[HomePageController::class,'products']);
Route::get('/Customer/shoppingcart',[HomePageController::class,'shoppingcart']);
//Login&Register
Route::get('/Connect/register',[ConnectController::class,'register']);
Route::get('/Connect/login',[ConnectController::class,'login']);
Route::post('/Connect/registerUser',[ConnectController::class,'registerUser']);



