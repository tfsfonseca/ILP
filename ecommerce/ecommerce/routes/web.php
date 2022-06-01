<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
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

Route::resources([
    'categoria' => CategoriaController::class
]);

Route::resources([
    'fornecedor' => FornecedorController::class
]);

Route::resources([
    'produto' => ProdutoController::class
]);

Route::get(
    '/', [HomeController::class,'index']);

Route::get(
    '/welcome', [HomeController::class,'index'])->name('home');

Route::get(
    '/detalhe/{id}', [HomeController::class, 'detalhe']);

Route::get(
    '/carrinho', [CompraController::class, 'compras'])->name('carrinho');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

Route::get(
    '/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get(
    '/adicionar/{id}', [CompraController::class, 'adicionar'])->name('adicionar');

Route::get(
    '/remover/{id}', [CompraController::class, 'remover'])->name('remover');

Route::get(
    '/finalizar/', [CompraController::class, 'finalizar'])->name('finalizar');

require __DIR__.'/auth.php';
