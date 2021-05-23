@extends('template')

	@routes
	@section('title') Clientes @endsection

	@section('estilo')

		th, td{
			text-align: center;
		}

	@endsection

	@section('nav&footer')

	<!-- Início mensagem alterar -->
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
	<!-- Fim mensagem alterar -->

	  	<!-- Início tabela -->
	  	<div class="row">
	  		<div class="col-lg-9 col-md-9 col-sm-10 col-xs-10 mx-auto mt-5">
			  	<table class="table col-6">
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
					      			<a href="#" data-bs-toggle="modal" data-bs-target="#exclusao" class="btn btn-danger" {{ $identificador = $v->id }} >Excluir</a>
					      			<a href="{{ route('compras_cliente', ['id' => $v->id]) }}" class="btn btn-light">Compras</a>
					      			<a href="{{ route('cadastro_de_compra', ['id' => $v->id]) }}" class="btn btn-warning">Nova compra</a>
					      		</td>
				      	    </tr>
				        @endforeach
				  </tbody>
				</table>
				<a href="{{ route('formulario') }}" class="btn mb-5 btn-light">Novo Cadastro</a>
			</div>
		</div>
		<!-- Fim tabela -->	

		<!-- Modal de confirmação -->
		<div class="modal fade" id="exclusao" tabindex="-1" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">Excluir</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">
		        Você realmente deseja excluir este cadastro? Essa ação é irreversível.
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
		        <button type="button" onclick="excluir({{ $identificador }})" class="btn btn-danger">Excluir</button>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- Fim modal de confirmação -->

		<script>
			function excluir(id){
				location.href = route('exclui_cliente', {id : id});
			}
		</script>
	@endsection