<?php

use App\Http\Controllers\CustomerAuthController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('login', [CustomerAuthController::class, 'login']);
Route::get('register', [CustomerAuthController::class, 'register']);
Route::post('/registerUser', [CustomerAuthController::class, 'Registercustomer'])->name('register-user');
