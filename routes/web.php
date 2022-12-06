<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CartController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
    return view('index');
})->name('home');

Route::get('product', [ProductController::class,'productPage'])->name('product');
Route::post('loginUser', [RegistrationController::class,'authenticate'])->name('loginUser');
Route::post('addProduct',[ProductController::class,'addProduct'])->name('addProduct');
Route::get('edit/{id}',[ProductController::class,'edit'])->name('edit');
Route::get('delete/{id}',[ProductController::class,'delete'])->name('delete');
Route::post('update',[ProductController::class,'update'])->name('update');
Route::get('usersList',[UserController::class,'usersList'])->name('usersList');


// User Routes
Route::get('userRegister', function () {
    return view('registerPage');
})->name('userRegister');

Route::get('logout', function () {
    session()->forget('user');
    return redirect()->route('home');
    
})->name('logout');


Route::post('userAdd',[UserController::class,'usersRegister'])->name('userAdd');
Route::get('allproduct', [UserController::class,'allproduct'])->name('allproduct');
Route::get('addCart/{id}', [UserController::class,'addCart'])->name('addCart');
Route::get('viewProduct/{id}', [UserController::class,'viewProduct'])->name('viewProduct');
Route::get('showCart', [UserController::class,'showCart'])->name('showCart');
Route::get('remove/{id}',[UserController::class,'remove'])->name('remove');

