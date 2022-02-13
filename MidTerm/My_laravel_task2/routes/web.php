<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
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
Route::get('/registration',[PagesController::class,'register'])->name('registration');

Route::post('/login',[PagesController::class,'loginsubmit'])->name('login.submit');
Route::post('/registration',[PagesController::class,'registersubmit'])->name('register.submit');

Route::get('/student/create',[StudentController::class,'create']);
Route::get('/student/edit',[StudentController::class,'edit']);
Route::get('/student/details/{id}',[StudentController::class,'get'])->name('student.details');
Route::get('/student/list',[StudentController::class,'list'])->name('student.list');

// Route::get('/add_product',[ProductsController::class,'add_product']);
// Route::post('/add_product',[ProductsController::class,'add_productsubmit'])->name('add_product.submit');


Route::get('product/',[ProductsController::class,'product']);
Route::get('product/add_product',[ProductsController::class,'add_product']);
Route::post('product/add_product',[ProductsController::class,'add_productsubmit'])->name('product/add_product.submit');


Route::get('/product/details/{id}',[StudentController::class,'get'])->name('product.details');
Route::get('/product/list_product',[ProductsController::class,'list_product']);