<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiProductoController;
use App\Http\Controllers\ApiCategoriaController;
use App\Http\Controllers\Api\AuthController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('productos', ApiProductoController::class);
Route::apiResource('categorias', ApiCategoriaController::class);

Route::post('registro', [AuthController::class, 'registro']);
Route::post('login',    [AuthController::class, 'login']);

// Rutas protegidas por JWT
Route::middleware('auth:api')->group(function () {
    Route::get('retorno', [AuthController::class, 'retorno']);
    Route::apiResource('categorias', ApiCategoriaController::class);
});
