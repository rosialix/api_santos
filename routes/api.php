<?php

use App\Http\Controllers\Api\Santos\SantoSantoController;
use App\Http\Controllers\Api\Santos\SantoSantuarioController;
use App\Http\Controllers\Api\Santos\SantoPensamientoController;
use App\Http\Controllers\Api\Santos\SantoCronologiaController;
use App\Http\Controllers\Api\Santos\SantoPatronoController;
use App\Http\Controllers\Api\Santos\SantoMilagroController;
use App\Http\Controllers\Api\Santos\SantoMensajeController;
use App\Http\Controllers\Api\Santos\SantoGaleriaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('santos',SantoSantoController::class);
Route::apiResource('santuarios',SantoSantuarioController::class);
Route::apiResource('pensamientos',SantoPensamientoController::class);
Route::apiResource('cronologias',SantoCronologiaController::class);

Route::apiResource('patronos',SantoPatronoController::class);
Route::apiResource('milagros',SantoMilagroController::class);
Route::apiResource('frases',SantoMensajeController::class);
Route::apiResource('galerias',SantoGaleriaController::class);

