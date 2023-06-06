<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChamadoController;
use App\Http\Controllers\SetorController;
use App\Http\Controllers\SituacaoController;

Route::get('/', function () {
    return view('home');
})->name('home');

// Rotas para Chamados
Route::get('/chamados', [ChamadoController::class, 'index'])->name('chamados.index');
Route::get('/chamados/create', [ChamadoController::class, 'create'])->name('chamados.create');
Route::post('/chamados', [ChamadoController::class, 'store'])->name('chamados.store');
Route::get('/chamados/{chamado}/edit', [ChamadoController::class, 'edit'])->name('chamados.edit');
Route::put('/chamados/{chamado}', [ChamadoController::class, 'update'])->name('chamados.update');
Route::get('/chamados/{chamado}/delete', [ChamadoController::class, 'delete'])->name('chamados.delete');
Route::delete('/chamados/{chamado}', [ChamadoController::class, 'destroy'])->name('chamados.destroy');

// Rotas para Setores
Route::get('/setores', [SetorController::class, 'index'])->name('setores.index');
Route::get('/setores/create', [SetorController::class, 'create'])->name('setores.create');
Route::post('/setores', [SetorController::class, 'store'])->name('setores.store');
Route::get('/setores/{setor}/edit', [SetorController::class, 'edit'])->name('setores.edit');
Route::put('/setores/{setor}', [SetorController::class, 'update'])->name('setores.update');
Route::get('/setores/{setor}/delete', [SetorController::class, 'delete'])->name('setores.delete');
Route::delete('/setores/{setor}', [SetorController::class, 'destroy'])->name('setores.destroy');

// Rotas para Situações
Route::get('/situacoes', [SituacaoController::class, 'index'])->name('situacoes.index');
Route::get('/situacoes/create', [SituacaoController::class, 'create'])->name('situacoes.create');
Route::post('/situacoes', [SituacaoController::class, 'store'])->name('situacoes.store');
Route::get('/situacoes/{situacao}/edit', [SituacaoController::class, 'edit'])->name('situacoes.edit');
Route::put('/situacoes/{situacao}', [SituacaoController::class, 'update'])->name('situacoes.update');
Route::get('/situacoes/{situacao}/delete', [SituacaoController::class, 'delete'])->name('situacoes.delete');
Route::delete('/situacoes/{situacao}', [SituacaoController::class, 'destroy'])->name('situacoes.destroy');
