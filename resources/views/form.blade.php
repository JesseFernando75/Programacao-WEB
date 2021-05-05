@extends('template')

	@section('title') Cadastro de cliente @endsection

	@section('nav&footer')
	  	<!-- Início formulário -->
	  	<div class="row">
	  		<div class="col-lg-3 col-md-5 col-sm-8 col-xs-8 mx-auto mt-5 text-light">

				<form action="{{ route('cadastrar') }}" method="POST">
				  @csrf
				  <div class="mb-3">
				    <label class="form-label">Digite o nome do prospect</label>
				    <input type="text" name="nome" class="form-control" placeholder="Nome" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" required>
				  </div>

				  <div class="mb-3">
				    <label class="form-label">Informe a rua</label>
				    <input type="text" name="rua" class="form-control" placeholder="Rua" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" required>
				  </div>

				  <div class="mb-3">
				    <label class="form-label">Informe o bairro</label>
				    <input type="text" name="bairro" class="form-control" placeholder="Bairro" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" required>
				  </div>

				  <div class="mb-3">
				    <label class="form-label">Informe o número da casa</label>
				    <input type="number" name="num_casa" class="form-control" placeholder="Número da casa" min="0" max="999999" required>
				  </div>

				  <div class="mb-3">
				    <label class="form-label">Informe a cidade</label>
				    <input type="text" name="cidade" class="form-control" placeholder="Cidade" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" required>
				  </div>

				  <div class="mb-3">
				    <label class="form-label">Escolha o estado</label>
				    <select name="estado" class="form-control" placeholder="Escolha o estado:" required>
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
				    <label class="form-label">Digite o CEP</label>
				    <input type="number" name="cep" class="form-control" placeholder="89000000" min="11111111" max="99999999" required>
				  </div>

				  <button class="btn btn-light mt-4 mb-5" type="submit">Enviar</button>
				</form>	
			</div>
		</div>
		<!-- Fim formulário -->
	@endsection
