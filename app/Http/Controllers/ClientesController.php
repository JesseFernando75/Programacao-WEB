<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{

	function cadastraCliente(Request $request){

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
		$cliente = Cliente::all();
		return view('retornocadastro')->with('cliente', $cliente);
	}

    function obtemClientesCadastrados(){
    	//
    }
}
