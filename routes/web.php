<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[App\Http\Controllers\AGILEController::class,'about']);
Route::get('/about',[App\Http\Controllers\AGILEController::class,'about']);
Route::get('/method',[App\Http\Controllers\AGILEController::class,'method']);
Route::get('/stages',[App\Http\Controllers\AGILEController::class,'stages']);
Route::get('/principle',[App\Http\Controllers\AGILEController::class,'principle']);
Route::get('/process',[App\Http\Controllers\AGILEController::class,'process']);
