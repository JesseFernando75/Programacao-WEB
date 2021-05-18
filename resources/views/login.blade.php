@extends('template')

	@section('title') Login @endsection

	@section('estilo')

		header{
				display:none;
			}

		footer{
			display:none;
		}

		.fundo{
			background-color: #fff;
			background-clip: padding-box;
			padding-top: 40px;
			padding-bottom: 40px;
			padding-left: 70px;
			padding-right: 70px;
			border-radius: 1.1rem;
		}

		a:link{
		 	text-decoration:none; 
		}

	@endsection

	@section('nav&footer')

	<!-- Início mensagem cadastro -->
		@if(session('Mensagem'))
			<div class="row">
				<div class="alert alert-success text-center py-3">
					{{ session('Mensagem') }}
				</div>
			</div>
		@endif

		@if(session('Retorno'))
			<div class="row">
				<div class="alert alert-danger text-center py-3">
					{{ session('Retorno') }}
				</div>
			</div>
		@endif
	<!-- Fim mensagem cadastro -->

	<!-- Início formulário -->
	  	<div class="row">
	  		<div class="row d-flex justify-content-md-center align-items-center vh-100">
		  		<div class="col-lg-4 col-md-4 col-sm-8 col-xs-8 text-dark fundo">

					<span class="fs-1 text-center">Host Line</span>
					<br>

					<form action="{{ route('verifica_login') }}" method="POST">
					  @csrf
					  <div class="mb-3">
					    <label class="form-label">Usuário</label>
					    <input type="text" name="usuario" class="form-control" placeholder="Nome de usuário" required>
					  </div>

					  <div class="mb-4">
					    <label class="form-label">Senha</label>
					    <input type="password" name="senha" class="form-control" placeholder="Sua senha" required>
					  </div>

					  <div class="d-grid gap-1 mb-4">
					  	<button class="btn btn-dark" type="submit">Entrar</button>
					  </div>

					  <a href="{{ route('cadastro_de_usuario') }}" class="text-muted">Não tem registro? Cadastre-se.</a>
					</form>	
				</div>
			</div>
		</div>
	<!-- Fim formulário -->

	@endsection