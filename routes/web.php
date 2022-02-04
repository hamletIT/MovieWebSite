<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoveController;
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









