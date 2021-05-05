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

	<title>Clientes</title>
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
			      	    </tr>
			        @endforeach
			  </tbody>
			</table>
		</div>
	</div>
	<!-- Fim tabela -->

  	<!-- Footer -->
	 <footer class="footer py-2 bg-light">
	    <div class="container text-center">
	      <p class="text-dark fw-bold">Cadastro</p>
	    </div>
  	 </footer>
  <!-- Fim footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>