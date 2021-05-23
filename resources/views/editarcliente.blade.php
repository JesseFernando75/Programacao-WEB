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
					  <option value="AC" {{ 'AC' == $v->estado ? "selected" : ""}}>Acre</option>
					  <option value="AL" {{ 'AL' == $v->estado ? "selected" : ""}}>Alagoas</option>
					  <option value="AP" {{ 'AP' == $v->estado ? "selected" : ""}}>Amapá</option>
					  <option value="AM" {{ 'AM' == $v->estado ? "selected" : ""}}>Amazonas</option>
					  <option value="BA" {{ 'BA' == $v->estado ? "selected" : ""}}>Bahia</option>
					  <option value="CE" {{ 'CE' == $v->estado ? "selected" : ""}}>Ceará</option>
					  <option value="DF" {{ 'DF' == $v->estado ? "selected" : ""}}>Distrito Federal</option>
					  <option value="ES" {{ 'ES' == $v->estado ? "selected" : ""}}>Espírito Santo</option>
					  <option value="GO" {{ 'GO' == $v->estado ? "selected" : ""}}>Goiás</option>
					  <option value="MA" {{ 'MA' == $v->estado ? "selected" : ""}}>Maranhão</option>
					  <option value="MT" {{ 'MT' == $v->estado ? "selected" : ""}}>Mato Grosso</option>
					  <option value="MS" {{ 'MS' == $v->estado ? "selected" : ""}}>Mato Grosso do Sul</option>
					  <option value="MG" {{ 'MG' == $v->estado ? "selected" : ""}}>Minas Gerais</option>
					  <option value="PA" {{ 'PA' == $v->estado ? "selected" : ""}}>Pará</option>
					  <option value="PB" {{ 'PB' == $v->estado ? "selected" : ""}}>Paraíba</option>
					  <option value="PR" {{ 'PR' == $v->estado ? "selected" : ""}}>Paraná</option>
					  <option value="PE" {{ 'PE' == $v->estado ? "selected" : ""}}>Pernambuco</option>
					  <option value="PI" {{ 'PI' == $v->estado ? "selected" : ""}}>Piauí</option>
					  <option value="RJ" {{ 'RJ' == $v->estado ? "selected" : ""}}>Rio de Janeiro</option>
					  <option value="RN" {{ 'RN' == $v->estado ? "selected" : ""}}>Rio Grande do Norte</option>
					  <option value="RS" {{ 'RS' == $v->estado ? "selected" : ""}}>Rio Grande do Sul</option>
					  <option value="RO" {{ 'RO' == $v->estado ? "selected" : ""}}>Rondônia</option>
					  <option value="RR" {{ 'RR' == $v->estado ? "selected" : ""}}>Roraima</option>
					  <option value="SC" {{ 'SC' == $v->estado ? "selected" : ""}}>Santa Catarina</option>
					  <option value="SP" {{ 'SP' == $v->estado ? "selected" : ""}}>São Paulo</option>
					  <option value="SE" {{ 'SE' == $v->estado ? "selected" : ""}}>Sergipe</option>
					  <option value="TO" {{ 'TO' == $v->estado ? "selected" : ""}}>Tocantins</option>
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
