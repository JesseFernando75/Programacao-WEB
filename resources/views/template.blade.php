<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<!-- Início Template -->
	<style>

		@yield('estilo')

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
	<!-- Fim Template -->

	<!-- Início Template -->
	<title> @yield('title') </title>
	<!-- Fim Template --> 
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
		        <a class="nav-link" href="{{ route('index') }}">Home</a>
		        <a class="nav-link" href="{{ route('lista_clientes') }}">Clientes</a>
		      </div>
		    </div>
		  </div>
	    </nav>
    </header>
  	<!-- Fim menu -->

  	<!-- Início Template -->
	@yield('nav&footer')
	<!-- Fim Template -->

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