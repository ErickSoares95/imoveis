<?php

use App\Http\Controllers\CidadeController;
use App\Http\Controllers\ImovelController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


//CIDADES
Route::get('/cidade', [CidadeController::class, 'index'])->name('cidade.index');
Route::get('/cidade/create', [CidadeController::class, 'create'])->name('cidade.create');
Route::post('/cidade/store', [CidadeController::class, 'store'])->name('cidade.store');

Route::get('/cidade/edit/{id}', [CidadeController::class, 'edit'])->name('cidade.edit');
Route::put('/cidade/update/{id}', [CidadeController::class, 'update'])->name('cidade.update');
Route::delete('/cidade/destroy/{id}', [CidadeController::class, 'destroy'])->name('cidade.destroy');

//IMOVEIS
Route::get('/imovel', [ImovelController::class, 'index'])->name('imovel.index');
Route::get('/imovel/create', [ImovelController::class, 'create'])->name('imovel.create');
Route::post('/imovel/store', [ImovelController::class, 'store'])->name('imovel.store');

Route::get('/imovel/edit/{id}', [ImovelController::class, 'edit'])->name('imovel.edit');
Route::put('/imovel/update/{id}', [ImovelController::class, 'update'])->name('imovel.update');
Route::delete('/imovel/destroy/{id}', [ImovelController::class, 'destroy'])->name('imovel.destroy');
