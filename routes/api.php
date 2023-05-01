<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PerfilController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/logout', [AuthController::class,'logout']);
    Route::apiResource('/perfil',PerfilController::class);
    
});

///Autenticacion
Route::post('/registro', [AuthController::class,'register']);
Route::post('/login', [AuthController::class,'login']);