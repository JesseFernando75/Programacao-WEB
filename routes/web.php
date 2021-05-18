<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ComprasController;

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


Route::get('/login', function() {
	return view('login');
})->name('login');

Route::get('/usuario/cadastro', function() {
	return view('cadastrarusuario');
})->name('cadastro_de_usuario');

Route::post('/login/verificacao', [UsuariosController::class, 'verificaLogin'])->name('verifica_login');

Route::post('/cliente/adicionar', [ClientesController::class, 'cadastrar'])->name('cadastrar');

Route::post('/usuario/adicionar', [UsuariosController::class, 'cadastrarUsuario'])->name('cadastrar_usuario');

Route::post('/cliente/compra/adicionar/{id}', [ComprasController::class, 'cadastrarCompra'])->name('cadastrar_compra');

Route::post('/cliente/alterar/{id}', [ClientesController::class, 'editar'])->name('alterar');

Route::post('/cliente/compras/alterar/{id}', [ComprasController::class, 'editarCompra'])->name('alterarCompra');

Route::get('/home', [UsuariosController::class, 'mostraTelaInicial'])->name('index');

Route::get('/cliente/cadastro', [ClientesController::class, 'mostraTelaCadastroCliente'])->name('formulario');

Route::get('/cliente/compras/cadastro/{id}', [ComprasController::class, 'mostraTelaCadastroCompra'])->name('cadastro_de_compra');

Route::get('/cliente/lista', [ClientesController::class, 'obtemListaClientes'])->name('lista_clientes');

Route::get('/cliente/editar/{id}', [ClientesController::class, 'editaCliente'])->name('edita_cliente');

Route::get('/cliente/compras/{id}', [ComprasController::class, 'obtemComprasCliente'])->name('compras_cliente');

Route::get('/cliente/excluir/{id}', [ClientesController::class, 'excluiCliente'])->name('exclui_cliente');

Route::get('/cliente/compras/editar/{id}', [ComprasController::class, 'editaCompra'])->name('edita_compra');

Route::get('/cliente/compras/excluir/{id}', [ComprasController::class, 'excluiCompra'])->name('exclui_compra');

/**Route não utilizada, talvez em uma próxima versão. **/
Route::get('/usuario/editar', [UsuariosController::class, 'obtemDadosUsuario'])->name('edita_usuario');

Route::get('/usuario/logout', [UsuariosController::class, 'logout'])->name('logout');






