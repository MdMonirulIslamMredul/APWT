<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
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

Route::get('/',[PagesController::class,'index']);
Route::get('/login',[PagesController::class,'login']);
Route::get('/homepage',[PagesController::class,'homepage']);
Route::get('/Contractsus',[PagesController::class,'Contractsus']);


Route::post('/login',[PagesController::class,'loginsubmit'])->name('login.submit');


// Route::get('/add_product',[ProductsController::class,'add_product']);
// Route::post('/add_product',[ProductsController::class,'add_productsubmit'])->name('add_product.submit');


Route::get('product/add_product',[ProductsController::class,'add_product']);
Route::post('product/add_product',[ProductsController::class,'add_productsubmit'])->name('product/add_product.submit');