@extends('template')

@section('title') Editar compra @endsection

	@section('nav&footer')

	<!-- Início formulário -->
	  	<div class="row">
		  	<div class="col-lg-3 col-md-5 col-sm-8 col-xs-8 mx-auto mt-5 text-light">

				<form action="{{ route('alterarCompra', ['id' => $v->id]) }}" method="POST">
					@csrf

					<div class="mb-3">
					 <label class="form-label">Data</label>
					   <input type="datetime-local" name="data" class="form-control" value="{{ $v->data }}" required>
					</div>

					<div class="mb-3">
					    <label class="form-label">Valor Final</label>
					    <input type="number" name="valor_final" class="form-control" min="0" value="{{ $v->valor_final }}" step="0.01" required>
				  	</div>

					 <button class="btn btn-light" type="submit">Alterar</button>
				</form>	
			</div>
		</div>
	<!-- Fim formulário -->

	@endsection