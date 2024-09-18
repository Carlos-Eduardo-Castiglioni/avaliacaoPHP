<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VendedorController;
use Illuminate\Support\Facades\Route;

Route::get('/cadastrar_vendedor', [VendedorController::class,'formCriarVendedor']);
Route::get('/listar_vendedor', [VendedorController::class, 'listarVendedor']);
Route::post('/criar_vendedor', [VendedorController::class, 'criarVendedor']);



Route::get('/cadastrar_cliente', [ClienteController::class,'formCriarCliente']);
Route::get('/listar_cliente', [ClienteController::class,'listarCliente']);
Route::post('/criar_cliente', [ClienteController::class,'criarCliente']);



Route::get('/cadastrar_produto', [ProductController::class,'formCriarProduto']);
Route::get('/listar_produto', [ProductController::class,'listarProduto']);
Route::post('/criar_produto', [ProductController::class,'criarProduto']);