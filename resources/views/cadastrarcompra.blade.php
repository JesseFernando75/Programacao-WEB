@extends('template')

@section('title') Cadastrar compra @endsection

	@section('nav&footer')

	<!-- Início formulário -->
	  	<div class="row">
		  	<div class="col-lg-3 col-md-5 col-sm-8 col-xs-8 mx-auto mt-5 text-light">

				<form action="{{ route('cadastrar_compra', ['id' => $id]) }}" method="POST">
					@csrf

					<div class="mb-3">
					    <label class="form-label">Valor Final</label>
					    <input type="number" name="valor_final" class="form-control" min="0" placeholder="1,99" step="0.01" required>
				  	</div>

					 <button class="btn btn-light" type="submit">Enviar</button>
				</form>	
			</div>
		</div>
	<!-- Fim formulário -->

	@endsection