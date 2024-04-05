<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FaixaController;

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

/*Route::get('/album', [AlbumController::class, 'index']);
Route::get('/album/{id}', [AlbumController::class, 'show']);
Route::put('/album/{id}', [AlbumController::class, 'update']);
Route::delete('/album/{id}', [AlbumController::class, 'destroy']);
Route::post('/album', [AlbumController::class, 'store']);

Route::get('/faixa', [FaixaController::class, 'index']);
Route::get('/faixa/{id}', [FaixaController::class, 'show']);
Route::put('/faixa/{id}', [FaixaController::class, 'update']);
Route::delete('/faixa/{id}', [FaixaController::class, 'destroy']);
Route::post('/faixa', [FaixaController::class, 'store']);

O código abaixo é o resumo das rotas acima
*/
Route::apiResources([
    'album'=>AlbumController::class,
    'faixa'=>FaixaController::class
]);


