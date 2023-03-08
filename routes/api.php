<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frutasController;
use App\Http\Controllers\PedidosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
/* 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 */
/* ------------------------Rutas Frutas-------------------------- */
Route::get('/frutas', [frutasController::class, 'getFrutas']);
Route::get('/frutas/{id}', [frutasController::class, 'getFrutaId']);
//post
Route::post('/frutas/insert', [frutasController::class, 'insertFruta']);
//put
Route::post('/frutas/update/{id}', [frutasController::class, 'updateFruta']);
//delete
Route::delete('/frutas/delete/{id}', [frutasController::class, 'deleteFruta']);

/* -------------------------Rutas Pedidos------------------------------- */

Route::get('/pedidos', [PedidosController::class, 'getPedidos']);
Route::get('/pedidos/{id}', [PedidosController::class, 'getPedidoId']);

//post
Route::post('/pedidos/insert', [PedidosController::class, 'insertPedidos']);

