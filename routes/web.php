<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PostController;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::resource('/',  ProjectController::class);
    Route::resource('posts',  PostController::class);
    Route::resource('projects',  ProjectController::class);
    Route::get('/about', [App\Http\Controllers\AGILEController::class, 'about'])->name('about');
    Route::get('/method', [App\Http\Controllers\AGILEController::class, 'method'])->name('method');
    Route::get('/stages', [App\Http\Controllers\AGILEController::class, 'stages'])->name('stages');
    Route::get('/principle', [App\Http\Controllers\AGILEController::class, 'principle'])->name('principle');
    Route::get('/process', [App\Http\Controllers\AGILEController::class, 'process'])->name('process');
  
});
