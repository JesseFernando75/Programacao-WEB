@extends('template')

	@routes
	@section('title') Editar cliente @endsection

	@section('nav&footer')
	  	<!-- Início formulário -->
	  	<div class="row">
	  		<div class="col-lg-3 col-md-5 col-sm-8 col-xs-8 mx-auto mt-5 text-light">

				<form action="{{ route('alterar', ['id' => $v->id]) }}" method="POST">
				  @csrf
				  <div class="mb-3">
				    <label class="form-label">Nome</label>
				    <input type="text" name="nome" class="form-control" placeholder="Nome" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" value="{{ $v->nome }}" required>
				  </div>

				  <div class="mb-3">
				    <label class="form-label">Rua</label>
				    <input type="text" name="rua" class="form-control" placeholder="Rua" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" value="{{ $v->rua }}" required>
				  </div>

				  <div class="mb-3">
				    <label class="form-label">Bairro</label>
				    <input type="text" name="bairro" class="form-control" placeholder="Bairro" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" value="{{ $v->bairro }}" required>
				  </div>

				  <div class="mb-3">
				    <label class="form-label">Número da casa</label>
				    <input type="number" name="num_casa" class="form-control" placeholder="Número da casa" min="0" max="999999" value="{{ $v->num_casa }}" required>
				  </div>

				  <div class="mb-3">
				    <label class="form-label">Cidade</label>
				    <input type="text" name="cidade" class="form-control" placeholder="Cidade" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" value="{{ $v->cidade }}" required>
				  </div>

				  <div class="mb-3">
				    <label class="form-label">Estado</label>
				    <select name="estado" class="form-control" placeholder="Escolha o estado:" value="{{ $v->estado }}" required>
					  <option value="AC">Acre</option>
					  <option value="AL">Alagoas</option>
					  <option value="AP">Amapá</option>
					  <option value="AM">Amazonas</option>
					  <option value="BA">Bahia</option>
					  <option value="CE">Ceará</option>
					  <option value="DF">Distrito Federal</option>
					  <option value="ES">Espírito Santo</option>
					  <option value="GO">Goiás</option>
					  <option value="MA">Maranhão</option>
					  <option value="MT">Mato Grosso</option>
					  <option value="MS">Mato Grosso do Sul</option>
					  <option value="MG">Minas Gerais</option>
					  <option value="PA">Pará</option>
					  <option value="PB">Paraíba</option>
					  <option value="PR">Paraná</option>
					  <option value="PE">Pernambuco</option>
					  <option value="PI">Piauí</option>
					  <option value="RJ">Rio de Janeiro</option>
					  <option value="RN">Rio Grande do Norte</option>
					  <option value="RS">Rio Grande do Sul</option>
					  <option value="RO">Rondônia</option>
					  <option value="RR">Roraima</option>
					  <option value="SC">Santa Catarina</option>
					  <option value="SP">São Paulo</option>
					  <option value="SE">Sergipe</option>
					  <option value="TO">Tocantins</option>
					</select>
				  </div>

				  <div class="mb-3">
				    <label class="form-label">CEP</label>
				    <input type="number" name="cep" class="form-control" placeholder="89000000" min="11111111" max="99999999" value="{{ $v->cep }}" required>
				  </div>

				  <button class="btn btn-light mt-4 mb-5" type="submit">Editar</button> 
				</form>	
			</div>
		</div>
		<!-- Fim formulário -->
		
	@endsection
