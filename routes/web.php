<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VisitaController;
use App\Http\Controllers\OrdemServicoController;
use App\Http\Controllers\SiteController;
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
Auth::routes();
Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::post('/orcamento/enviar', [\App\Http\Controllers\OrcamentoController::class, 'enviar'])->name('orcamento.enviar');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('admin.dashboard');

    Route::get('clientes', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('clientes', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('clientes/{cliente}', [ClienteController::class, 'show'])->name('clientes.show');
    Route::get('clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

    Route::get('ordens-servico', [OrdemServicoController::class, 'index'])->name('ordens-servico.index');
    Route::get('ordens-servico/create', [OrdemServicoController::class, 'create'])->name('ordens-servico.create');
    Route::post('ordens-servico', [OrdemServicoController::class, 'store'])->name('ordens-servico.store');
    Route::get('ordens-servico/{ordemServico}', [OrdemServicoController::class, 'show'])->name('ordens-servico.show');
    Route::get('ordens-servico/{ordemServico}/edit', [OrdemServicoController::class, 'edit'])->name('ordens-servico.edit');
    Route::put('ordens-servico/{ordemServico}', [OrdemServicoController::class, 'update'])->name('ordens-servico.update');
    Route::delete('ordens-servico/{ordemServico}', [OrdemServicoController::class, 'destroy'])->name('ordens-servico.destroy');

    Route::get('visitas', [VisitaController::class, 'index'])->name('visitas.index');
    Route::get('visitas/create', [VisitaController::class, 'create'])->name('visitas.create');
    Route::post('visitas', [VisitaController::class, 'store'])->name('visitas.store');
    Route::get('visitas/{visita}', [VisitaController::class, 'show'])->name('visitas.show');
    Route::get('visitas/{visita}/edit', [VisitaController::class, 'edit'])->name('visitas.edit');
    Route::put('visitas/{visita}', [VisitaController::class, 'update'])->name('visitas.update');
    Route::delete('visitas/{visita}', [VisitaController::class, 'destroy'])->name('visitas.destroy');
});
