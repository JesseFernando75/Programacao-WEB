@extends('template')

	@section('title') Clientes @endsection

	@section('estilo')

		th, td{
			text-align: center;
		}

	@endsection

	@section('nav&footer')
	  	<!-- Início tabela -->
	  	<div class="row">
	  		<div class="col-lg-8 col-md-8 col-sm-10 col-xs-10 mx-auto mt-5">
			  	<table class="table table-striped table-bordered col-6">
				  <thead>
				    <tr class="text-light">
				      <th scope="col">Código</th>
				      <th scope="col">Nome</th>
				      <th scope="col">Rua</th>
				      <th scope="col">Bairro</th>
				      <th scope="col">Casa</th>
				      <th scope="col">Cidade</th>
				      <th scope="col">Estado</th>
				      <th scope="col">CEP</th>
				      <th scope="col">Opções</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      	@foreach($cliente as $v)
				      		<tr class="text-light">
				      			<td>{{ $v->id }}</td>
					      		<td>{{ $v->nome }}</td>
					      		<td>{{ $v->rua }}</td>
					      		<td>{{ $v->bairro }}</td>
					      		<td>{{ $v->num_casa }}</td>
					      		<td>{{ $v->cidade }}</td>
					      		<td>{{ $v->estado }}</td>
					      		<td>{{ $v->cep }}</td>
					      		<td>
					      			<a href="{{ route('edita_cliente', ['id' => $v->id]) }}" class="btn btn-info">Alterar</a>
					      			<a href="{{ route('exclui_cliente', ['id' => $v->id]) }}" class="btn btn-danger">Excluir</a>
					      		</td>
				      	    </tr>
				        @endforeach
				  </tbody>
				</table>
				<a href="{{ route('formulario') }}" class="btn mb-5 btn-light">Novo Cadastro</a>
			</div>
		</div>
		<!-- Fim tabela -->	
	@endsection