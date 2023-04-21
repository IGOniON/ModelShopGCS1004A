<?php

use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use resources\views\customer;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('index', [ProductController::class, 'index']);
Route::get('add', [ProductController::class, 'add']);
Route::post('save', [ProductController::class, 'save']);
Route::get('edit/{id}', [ProductController::class, 'edit']);
Route::post('update', [ProductController::class, 'update']);
Route::get('delete/{id}', [ProductController::class, 'delete']);
*/

Route::get('customer/index', [ProductController::class, 'index']);
Route::get('customer/product.blade.php', [ProductController::class, 'product']);

Route::get('admin/index.blade.php', [AdminController::class, 'index']);
Route::get('admin/login.blade.php', [AdminController::class, 'login']);
Route::get('admin/register.blade.php', [AdminController::class, 'register']);

Route::get('/login', [Auth::class, 'login']);
Route::get('/registration', [Auth::class, 'registration']);
