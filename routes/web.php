<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/product/index', ProductController@index);

Route::get('/product/index',[ProductController::class, 'index']);//index page
Route::get('/product/create', [ProductController::class, 'create']);//create 
Route::post('/product', [ProductController::class, 'store']);//store
Route::get('/product/{product}/edit', [ProductController::class, 'edit']);//edit 
Route::put('/product/{product}', [ProductController::class, 'update']);//update
Route::delete('/product/{product}', [ProductController::class, 'destroy']);//delete
Route::get('/register', [UserController::class, 'create']);//register new user
Route::post('/users',[UserController::class,'store']);//store new user
Route::post('/logout',[UserController::class,'logout']);//logout
Route::get('/login',[UserController::class,'login']);//login form
Route::post('/users/authenticate',[UserController::class,'authenticate']);//for log in user

/* Error handling in laravel is already handled during nre laravel project. The class where 
all the exceptions are present are App/Exceptions/Handler*/