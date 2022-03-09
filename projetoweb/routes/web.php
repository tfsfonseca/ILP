<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'welcome']);

Route::get('/exemplo', [HomeController::class, 'exemplo']);

Route::post('/resultado', [HomeController::class,'resultado']);

Route::get('/ex1', [HomeController::class, 'ex1']);

Route::post('/result1', [HomeController::class, 'result1']);

Route::get('/ex2', [HomeController::class, 'ex2']);

Route::post('/result2', [HomeController::class, 'result2']);

Route::get('/ex3', [HomeController::class, 'ex3']);

Route::post('/result3', [HomeController::class, 'result3']);

Route::get('/ex4', [HomeController::class, 'ex4']);

Route::post('/result4', [HomeController::class, 'result4']);

Route::get('/ex5', [HomeController::class, 'ex5']);

Route::post('/result5', [HomeController::class, 'result5']);
