<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<style>

		html{
			height: 100%;
			min-height: 100%;
		}

		body{
			background-color: #333333;
			display: flex;
    		flex-direction: column;
    		min-height: 100%;
		}

		footer{
			margin-top: auto;
		}

	</style>

	<title>Cadastro de cliente</title>
</head>
<body>
	<!-- Inicio menu -->
	 <header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
	        <div class="container">
	           <a class="navbar-brand" href="#">Host Line</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
	        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		      <div class="navbar-nav">
		        <a class="nav-link" href="#"></a>
		        <a class="nav-link" href="#"></a>
		      </div>
		    </div>
		  </div>
	    </nav>
    </header>
  	<!-- Fim menu -->

  	<!-- Início formuário -->
  	<div class="row">
  		<div class="col-lg-3 col-md-5 col-sm-8 col-xs-8 mx-auto mt-5 text-light">

			<form action="{{ route('cadastro') }}" method="POST">
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
				  <option value="AC">Acre (AC)</option>
				  <option value="AL">Alagoas (AL)</option>
				  <option value="AP">Amapá (AP)</option>
				  <option value="AM">Amazonas (AM)</option>
				  <option value="BA">Bahia (BA)</option>
				  <option value="CE">Ceará (CE)</option>
				  <option value="DF">Distrito Federal (DF)</option>
				  <option value="ES">Espírito Santo (ES)</option>
				  <option value="GO">Goiás (GO)</option>
				  <option value="MA">Maranhão (MA)</option>
				  <option value="MT">Mato Grosso (MT)</option>
				  <option value="MS">Mato Grosso do Sul (MS)</option>
				  <option value="MG">Minas Gerais (MG)</option>
				  <option value="PA">Pará (PA)</option>
				  <option value="PB">Paraíba (PB)</option>
				  <option value="PR">Paraná (PR)</option>
				  <option value="PE">Pernambuco (PE)</option>
				  <option value="PI">Piauí (PI)</option>
				  <option value="RJ">Rio de Janeiro (RJ)</option>
				  <option value="RN">Rio Grande do Norte (RN)</option>
				  <option value="RS">Rio Grande do Sul (RS)</option>
				  <option value="RO">Rondônia (RO)</option>
				  <option value="RR">Roraima (RR)</option>
				  <option value="SC">Santa Catarina (SC)</option>
				  <option value="SP">São Paulo (SP)</option>
				  <option value="SE">Sergipe (SE)</option>
				  <option value="TO">Tocantins (TO)</option>
				</select>
			  </div>

			  <div class="mb-3">
			    <label class="form-label">Digite o CEP</label>
			    <input type="number" name="cep" class="form-control" placeholder="89000000" min="00000000" max="99999999" required>
			  </div>

			  <button class="btn btn-light mt-4 mb-4" type="submit">Enviar</button>
			</form>	
		</div>
	</div>
	<!-- Fim formulário -->

  	<!-- Footer -->
	 <footer class="footer py-2 mt-4 bg-light">
	    <div class="container text-center">
	      <p class="text-dark fw-bold">Cadastro</p>
	    </div>
  	 </footer>
  <!-- Fim footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>