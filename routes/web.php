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










// Route::post('/user', [HamoController::class, 'AddUser']);

// Route::post('/logUser', [HamoController::class, 'login']);
// Route::post('/AddProduct', [ProductController::class, 'AddProduct']);
// Route::get('/shop', [ProductController::class, 'ShopPr']);
// Route::get('/editpage/{id}', [ProductController::class, 'edit_page']);

// Route::get('/Reset_passwordUrl',  [ProductController::class, 'Reset_passwordUrl']);
// Route::get('/contact',  [ProductController::class, 'Contact']);
// Route::post('/ChangePassword',  [ProductController::class, 'Reset_password']);
// Route::post('/Search',  [ProductController::class, 'search_bar']);
// Route::post('/Edit',  [ProductController::class, 'edit']);
// Route::get('/Delete/{id}',  [ProductController::class, 'delete']);
// Route::post('/addWishList',  [ProductController::class, 'addWish']);
// Route::post('/addCartList',  [ProductController::class, 'addCart']);
// Route::get('/wishlist',  [ProductController::class, 'WishList']);
// Route::get('/cartlist',  [ProductController::class, 'CartList']);
// Route::get('/Deleteprod/{id}',  [ProductController::class, 'deleteprod']);
// Route::get('/Removeprod/{id}',  [ProductController::class, 'removeprod']);
// Route::get('/totalhover/{id}',  [ProductController::class, 'Totalhover']);
// Route::post('/prodcountup',  [ProductController::class, 'Prodcountup']);
// Route::post('/prodcountdown',  [ProductController::class, 'Prodcountdown']);
// // Route::get('/Myorders',  [ProductController::class, 'myorders']);
// Route::get('/Single_orders/{id}', [ProductController::class, 'single_orders']);
// Route::get('stripe', [ProductController::class, 'stripe']);
// Route::post('stripe', [ProductController::class, 'myorders'])->name('stripe.post');

// Route::get('sendbasicemail',[ProductController::class,'basic_email']);
// Route::get('sendhtmlemail',[ProductController::class,'html_email']);
// Route::get('sendattachmentemail',[ProductController::class,'attachment_email']);


