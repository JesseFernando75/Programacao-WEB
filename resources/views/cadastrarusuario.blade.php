@extends('template')

	@section('title') Cadastro de usuário @endsection

	@section('estilo')

		header{
				display:none;
			}

	@endsection

	@section('nav&footer')

	<!-- Início formulário -->
	  	<div class="row">
		  	<div class="col-lg-3 col-md-5 col-sm-8 col-xs-8 mx-auto mt-5 text-light">

				<form action="{{ route('cadastrar_usuario') }}" method="POST">
					@csrf
					<div class="mb-3">
					   <label class="form-label">Nome de usuário</label>
					   <input type="text" name="usuario" class="form-control" placeholder="Seu nome de usuário" required>
					</div>

					<div class="mb-3">
					 <label class="form-label">Email</label>
					   <input type="email" name="email" class="form-control" placeholder="email@email.com" required>
					</div>

					<div class="mb-4">
					   <label class="form-label">Senha</label>
					   <input type="password" name="senha" class="form-control" placeholder="Sua senha" required>
					</div>

					 <button class="btn btn-light" type="submit">Cadastrar</button>
				</form>	
			</div>
		</div>
	<!-- Fim formulário -->

	@endsection