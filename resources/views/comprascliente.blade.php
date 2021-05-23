@extends('template')

	@routes
	@section('title') Compras cliente @endsection

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
	<!-- Fim mensagem alterar -->

	  	<!-- Início tabela -->
	  	<div class="row">
	  		<div class="col-lg-8 col-md-8 col-sm-10 col-xs-10 mx-auto mt-5">
			  	<table class="table col-6">
				  <thead>
				    <tr class="text-light">
				      <th scope="col">Código da compra</th>
				      <th scope="col">Código do cliente</th>
				      <th scope="col">Nome do cliente</th>
				      <th scope="col">Data da compra</th>
				      <th scope="col">Valor total</th>
				      <th scope="col">Opções</th> 
				    </tr>
				  </thead>
				  <tbody>
				      @foreach($compras as $v)
				      	<tr class="text-light">
					      	<td>{{ $v->id }}</td>
					      	<td>{{ $v->id_cliente }}</td>
					      	<td>{{ $v->cliente->nome }}</td>
					      	<td>{{ $v->data }}</td>
					      	<td>{{ $v->valor_final }}</td>
					      	<td>
					      		<a href="{{ route('edita_compra', ['id' => $v->id]) }}" class="btn btn-info">Alterar</a>
					      		<a href="#" data-bs-toggle="modal" data-bs-target="#exclusao" class="btn btn-danger" {{ $identificador = $v->id }} >Excluir</a>			
					      	</td>
				      	</tr>
				      @endforeach
				  </tbody>
				</table>
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
		        Você realmente deseja excluir esta compra? Essa ação é irreversível.
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
				location.href = route('exclui_compra', {id : id});
			}
		</script>
	@endsection