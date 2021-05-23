<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compras;
use App\Models\Cliente;

class ComprasController extends Controller
{
   function obtemComprasCliente($id){
		$cliente = Cliente::find($id);
		$compras = $cliente->compras;

		if(sizeof($compras) == 0){
			session()->flash("Retorno", "O cliente $cliente->nome não possuí nenhuma compra.");
			return redirect()->route('lista_clientes');
		} else{
			return view('comprascliente', ['compras' => $compras]);
		}
	}

	function cadastrarCompra(Request $request, $id){
		$valor_final = $request->input('valor_final');
		$id_cliente = $id;

		$compra = new Compras();
		$compra->valor_final = $valor_final;
		$compra->id_cliente = $id_cliente;

		$compra->save();
		session()->flash("Mensagem", "Compra cadastrada com sucesso.");
		return redirect()->route('lista_clientes');
	}

	function mostraTelaCadastroCompra($id){
    	return view('cadastrarcompra', ['id' => $id]);
    }

	function editaCompra($id){
		$compra = Compras::find($id);
		return view('editarcompra', ['v' => $compra]);
	}

	function editarCompra(Request $request, $id){
		$compra = Compras::find($id);

		$compra->data = $request->input('data');
		$compra->valor_final = $request->input('valor_final');

		$compra->save();
		session()->flash("Mensagem", "Compra alterada com sucesso.");
		return redirect()->route('compras_cliente', ['id' => $compra->id_cliente]);
	}

	function excluiCompra($id){
		$compra = Compras::findOrFail($id);

		$compra->delete();
		session()->flash("Mensagem", "Compra excluída com sucesso.");
		return redirect()->route('compras_cliente', ['id' => $compra->id_cliente]);
	}
}
