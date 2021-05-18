<!-- Método não utilizado, talvez em uma próxima versão. -->

@extends('template')

	@section('title') Editar usuário @endsection

	@section('nav&footer')

	<!-- Início formulário -->
	  	<div class="row">
		  	<div class="col-lg-3 col-md-5 col-sm-8 col-xs-8 mx-auto mt-5 text-light">

				<form action="{{ route('cadastrar_usuario') }}" method="POST">
					@csrf
					<div class="mb-3">
					   <label class="form-label">Usuário</label>
					   <in sessame="usuario" class="form-control" value="{{ $usuario->usuario }}" sess required>
					</div>

					<div class="mb-3">
					 <label class="form-label">Email</label>
					   <input type="email" name="email" class="form-control" value="{{ $usuario->email }}" required>
					</div>

					<div class="mb-4">
					   <label class="form-label">Senha</label>
					   <input type="text" name="senha" class="form-control" value="{{ $usuario->senha }}" required>
					</div>

					 <button class="btn btn-light" type="submit">Alterar</button>
				</form>	
			</div>
		</div>
	<!-- Fim formulário -->

	@endsection
	
