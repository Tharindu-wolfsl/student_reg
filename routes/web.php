<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
//if any one use /home in browser that open index func in HomeController
   
   Route::get('/',[HomeController::class,'index']);
   Route::post('/upload',[HomeController::class,'upload']);
   Route::get('/view',[HomeController::class,'view']);
   Route::get('/delete/{id}',[HomeController::class,'delete']);
   Route::get('/search',[HomeController::class,'search']);
   Route::get('/update_view/{id}',[HomeController::class,'update_view']);
   Route::post('/update/{id}',[HomeController::class,'update']);

