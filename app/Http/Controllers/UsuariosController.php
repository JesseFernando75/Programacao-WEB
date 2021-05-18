<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{

    function verificaLogin(Request $request){
    	$usuario = $request->input('usuario');
    	$senha = $request->input('senha');

    	if($u = Usuario::where('usuario', '=' , $usuario)->first() and $u->senha == $senha){
    		session(['login' => $u]);
	    	return redirect()->route('index');
	    } else{
	    		session()->flash("Retorno", "Usuário ou senha incorretos.");
	    		return redirect()->route('login');
	    }
    }

    /** Método não utilizado, talvez em uma próxima versão.
    function obtemDadosUsuario(){
    	if(session()->has('login')){
			$user = session()->get('login');

			$u = Usuario::where('usuario', '=' , $user)->first();

			return dd($u);
		} else{
    		session()->flash("Retorno", "Faça o login para acessar esta página.");
    		return redirect()->route('login');
    	}
    }
    **/

    function mostraTelaInicial(){
    	if(session()->has('login')){
    		return view('index');
    	} else{
    		session()->flash("Retorno", "Faça o login para acessar esta página.");
    		return redirect()->route('login');
    	}
    }

    function cadastrarUsuario(Request $request){
		$usuario = $request->input('usuario');
		$email = $request->input('email');
		$senha = $request->input('senha');

		$u1 = new Usuario();
		$u1->usuario = $usuario;
		$u1->email = $email;
		$u1->senha = $senha;

		$u1->save();
		session()->flash("Mensagem", "Usuário cadastrado com sucesso.");
		return redirect()->route('login');
	}

	/** Método não utilizado, talvez em uma próxima versão.
	function editaUsuario(){
		if(session()->has('login')){
			return view('editarusuario');
		} else{
    		session()->flash("Retorno", "Faça o login para acessar esta página.");
    		return redirect()->route('login');
    	}
	}
	 **/

	function logout(){
		session()->forget('login');
		return redirect()->route('login');
	}
}
