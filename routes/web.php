<?php

use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productosController;
use App\Http\Controllers\adminController;
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

Route::get('/Sesion', function(){
    return view ('iniciarSesion');
});

Route::controller(clienteController::class)->group(function(){
    Route::get('client/ofice' , 'ofice');
    Route::get('client/edifice' , 'edifice');
    Route::get('client/house' , 'house');
    Route::get('client/general' , 'general');
    Route::get('client/Shopping cart' , 'shoping');
    Route::get('client/buy' , 'buy');
    Route::get('client/details', 'details');
    Route::get('client/profile', 'profile');
    Route::get('register', 'register');
});

Route::controller(adminController::class)->group(function(){
    Route::get('admin/index' , 'index');
    Route::get('admin/products', 'products');
    Route::get('admin/users', 'users');
    Route::get('admin/software', 'software');
});