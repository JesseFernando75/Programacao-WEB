<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{

	function cadastrar(Request $request){
		$nome = $request->input('nome');
		$bairro = $request->input('bairro');
		$rua = $request->input('rua');
		$num_casa = $request->input('num_casa');
		$cidade = $request->input('cidade');
		$estado = $request->input('estado');
		$cep = $request->input('cep');

		$c1 = new Cliente();
		$c1->nome = $nome;
		$c1->bairro = $bairro;
		$c1->rua = $rua;
		$c1->num_casa = $num_casa;
		$c1->cidade = $cidade;
		$c1->estado = $estado;
		$c1->cep = $cep;

		$c1->save();
		session()->flash("Mensagem", "O cliente {$c1->nome} foi cadastrado com sucesso.");
		return redirect()->route('lista_clientes');
	}

	function mostraTelaCadastroCliente(){
    	if(session()->has('login')){
    		return view('form');
    	} else{
    		session()->flash("Retorno", "Faça o login para acessar esta página.");
    		return redirect()->route('login');
    	}
    }

	function obtemListaClientes(){
		if(session()->has('login')){
			$cliente = Cliente::all();
			return view('listacliente', ['cliente' => $cliente]);
		} else{
    		session()->flash("Retorno", "Faça o login para acessar esta página.");
    		return redirect()->route('login');
    	}
	}

	function editaCliente($id){
		if(session()->has('login')){
			$cliente = Cliente::find($id);
			return view('editarcliente', ['v' => $cliente]);
		} else{
    		session()->flash("Retorno", "Faça o login para acessar esta página.");
    		return redirect()->route('login');
    	}
	}

	function editar(Request $request, $id){
		$cliente = Cliente::find($id);

		$cliente->nome = $request->input('nome');
		$cliente->bairro = $request->input('bairro');
		$cliente->rua = $request->input('rua');
		$cliente->num_casa = $request->input('num_casa');
		$cliente->cidade = $request->input('cidade');
		$cliente->estado = $request->input('estado');
		$cliente->cep = $request->input('cep');

		$cliente->save();
		session()->flash("Mensagem", "O cliente {$cliente->nome} foi alterado com sucesso.");
		return redirect()->route('lista_clientes');	
	}

	function excluiCliente($id){
		$cliente = Cliente::findOrFail($id);

		$cliente->delete();
		session()->flash("Mensagem", "Excluído com sucesso.");
		return redirect()->route('lista_clientes');	
	}
}
