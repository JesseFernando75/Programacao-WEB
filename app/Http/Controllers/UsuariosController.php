<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{

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
}
