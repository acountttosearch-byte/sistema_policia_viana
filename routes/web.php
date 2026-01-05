<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AgenteController;

/*
|--------------------------------------------------------------------------
| ROTAS PÚBLICAS – AUTENTICAÇÃO
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'formLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login']);

/*
|--------------------------------------------------------------------------
| ROTAS PROTEGIDAS – SISTEMA
|--------------------------------------------------------------------------
| Todas as rotas abaixo exigem agente autenticado
*/

Route::middleware('auth:agente')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | PAINÉIS
    |--------------------------------------------------------------------------
    */

    // Painel do Administrador
    Route::get('/admin/painel', function () {
        return view('admin.painel');
    })->name('admin.painel');

    // Painel do Agente
    Route::get('/agente/painel', function () {
        return view('agente.painel');
    })->name('agente.painel');

    /*
    |--------------------------------------------------------------------------
    | MÓDULO: AGENTES
    |--------------------------------------------------------------------------
    */

    Route::get('/agentes', [AgenteController::class, 'index'])
        ->name('agentes.lista');

    Route::get('/agentes/novo', [AgenteController::class, 'create'])
        ->name('agentes.novo');

    /*
    |--------------------------------------------------------------------------
    | LOGOUT
    |--------------------------------------------------------------------------
    */

    Route::get('/logout', [AuthController::class, 'logout'])
        ->name('logout');

});


use App\Http\Controllers\Admin\PainelController;

Route::get('/admin/painel', [PainelController::class, 'index'])
    ->name('admin.painel');
