<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;

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

Route::get('/home', function () {
    return view('index');
})->name('index');

Route::get('/cliente/cadastro', function() {
	return view('form');
})->name('formulario');

Route::post('/cliente/adicionar', [ClientesController::class, 'cadastrar'])->name('cadastrar');

Route::get('/cliente/lista', [ClientesController::class, 'obtemListaClientes'])->name('lista_clientes');

Route::get('/cliente/editar/{id}', [ClientesController::class, 'editaCliente'])->name('edita_cliente');

Route::get('/cliente/excluir/{id}', [ClientesController::class, 'excluiCliente'])->name('exclui_cliente');

Route::post('/cliente/alterar/{id}', [ClientesController::class, 'editar'])->name('alterar');




