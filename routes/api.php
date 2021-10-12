<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController, SolicitacoesController, EspecialidadesController};

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
    $user = $request->user();
    $user->perfis;
    return $user;
});

Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);

Route::post('/forgot-password', [UserController::class, 'forgotPassword']); 
Route::post('/reset-password', [UserController::class, 'updatePassword']); 

Route::resource('/solicitacoes', SolicitacoesController::class);
Route::get('/solicitacoes/search', [SolicitacoesController::class,'search']);
Route::resource('/especialidades', EspecialidadesController::class);
