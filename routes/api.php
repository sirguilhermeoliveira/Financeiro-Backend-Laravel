<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\SelectController;
 use App\Http\Controllers\SelectControllerDois;
use App\Http\Controllers\SelectControllerTres;
use App\Http\Controllers\SelectControllerQuatro;
use App\Http\Controllers\DespesaController;
use App\Http\Controllers\ReceitaController;



Route::post('auth/login', [AuthController::class, 'login']);

Route::resources([
    'despesas' => DespesaController::class,
    'receitas' => ReceitaController::class,
    'selects' => SelectController::class,
     'selects_dois' => SelectControllerDois::class,
    'selects_tres' => SelectControllerTres::class,
    'selects_quatro' => SelectControllerQuatro::class,
]);

Route::group(['middleware' => ['apiJwt']], function(){
/*     Route::post('auth/logout', [AuthController::class, 'logout']); */
    // só colocar aqui dentro que a rota tá barrada por token
    Route::get('users', [UserController::class, 'index']);
});
