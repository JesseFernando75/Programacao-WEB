@extends('template')

	@section('title') Home @endsection

	@section('estilo')

		header{
				display:none;
			}

		footer{
			display:none;
		}

	@endsection

	@section('nav&footer')
	  	<!-- Texto principal -->
	  	<div class="row d-flex justify-content-md-center align-items-center vh-100">
			<div class="jumbotron text-center">
			 	<h1 class="display-5 text-light">Cadastre um novo prospecto.</h1>
			  	<p class="lead text-muted">Utilize este formulário online para cadastrar um novo cliente.</p>
			  	<p class="lead">
			    <a class="btn btn-light btn-lg" href="{{ route('formulario') }}" role="button">Cadastrar</a>
			  	</p>
			</div>
		</div>
		<!-- Fim texto principal -->
	@endsection
