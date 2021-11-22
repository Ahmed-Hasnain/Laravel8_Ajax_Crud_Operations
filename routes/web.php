<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

//Student Crud routes 
Route::get('/student',[StudentController::class,'index']);
Route::post('/student',[StudentController::class,'store']);
Route::get('/fetch_student',[StudentController::class,'fetchStudent']);
Route::get('/edit_student/{id}',[StudentController::class,'editStudent']);
Route::put('/update_student/{id}',[StudentController::class,'updateStudent']);
Route::delete('/delete_student/{id}',[StudentController::class,'deleteStudent']);



