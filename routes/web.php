<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

Route::get('/', [PedidoController::class, 'index'])->name('pedido.index');
Route::get('/create', [PedidoController::class, 'create'])->name('pedido.create');
Route::get('/edit/{id}', [PedidoController::class, 'edit'])->name('pedido.edit');


