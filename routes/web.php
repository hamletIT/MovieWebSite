<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoveController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
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


Route::view('/','index');
Route::view('/register','register');
Route::view('/login','login');

Route::post('/login', [MoveController::class, 'login']);
Route::post('/register', [MoveController::class, 'registerUser']);

Route::post('/Addmove', [MoveController::class, 'Add_move']);
Route::get('/Addmove', [MoveController::class, 'addmove']);

Auth::routes();
Route::post('/login', [LoginController::class, 'login']);
// Route::get('/', [HomeController::class, 'index'])->name('home');
  
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);

});











