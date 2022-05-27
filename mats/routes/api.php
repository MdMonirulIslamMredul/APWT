<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAPIController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Course
Route::get('/student/course',[StudentAPIController::class,'getallcourse']);
Route::get('/student/course/{id?}',[StudentAPIController::class,'getcourse']);
Route::post('/student/course/add',[StudentAPIController::class,'addcourse']);
Route::delete('/student/course/delete/{id}',[StudentAPIController::class,'deletecourse']);
Route::put('/student/course/update', [StudentAPIController::class,'updatecourse']);
Route::get('/student/course/search/{c_title}',[StudentAPIController::class,'searchcourse']);
//Cetegories
Route::get('/student/category',[StudentAPIController::class,'getallcategory']);
Route::get('/student/category/{id?}',[StudentAPIController::class,'getcategory']);
Route::post('/student/category/add',[StudentAPIController::class,'addcategory']);
Route::delete('student/category/delete/{id}',[StudentAPIController::class,'deletecategory']);
Route::put('/student/category/update', [StudentAPIController::class,'updatecategory']);
Route::get('/student/category/search/{cat_name}',[StudentAPIController::class,'searchcategory']);
//Certificate
Route::get('/student/certificate',[StudentAPIController::class,'getallcertificate']);
Route::get('/student/certificate/{id?}',[StudentAPIController::class,'getcertificate']);
Route::post('/student/certificate/add',[StudentAPIController::class,'addcertificate']);
Route::delete('/student/certificate/delete/{id}',[StudentAPIController::class,'deletecertificate']);
Route::put('/student/certificate/update', [StudentAPIController::class,'updatecertificate']);
Route::get('/student/certificate/search/{v_id}',[StudentAPIController::class,'searchcertificate']);
//Student
Route::get('/student/student',[StudentAPIController::class,'getallstudent']);
Route::get('/student/student/{id?}',[StudentAPIController::class,'getstudent']);
Route::post('/student/student/add',[StudentAPIController::class,'addstudent']);
Route::delete('/student/student/delete/{id}',[StudentAPIController::class,'deletestudent']);
Route::put('/student/student/update', [StudentAPIController::class,'updatestudent']);
Route::get('/student/student/search/{st_username}',[StudentAPIController::class,'searchstudent']);

