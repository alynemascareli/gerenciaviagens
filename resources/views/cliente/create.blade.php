<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>Clientes - Boralá Viajar</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 titulo">	
			<h2>Novo Cliente</h2>
			</div>
			<div	class="col-12">
		<form method="post" action="cliente/store">
			<input type="hidden" name="csrf-token" value="{{ csrf_token() }}">
		  <div class="form-group">
		    <label for="cliente_nome">Nome</label>
		    <input type="text" class="form-control" id="cliente_nome" name="nome">
		  </div>
 			<div class="form-group">
		    	<label for="cliente_email">email</label>
		    	<input type="text" class="form-control" id="cliente_email" name="email">
		  	</div>
		  	<div class="form-group">
		    <label for="cliente_cpf">cpf</label>
		    <input type="text" class="form-control" id="cliente_cpf" name="cpf">
		  </div>
 			<div class="form-group">
		    	<label for="cliente_telefone">telefone</label>
		    	<input type="text" class="form-control" id="cliente_telefone" name="telefone">
		  	</div>
<div class="form-group">
		    	<label for="cliente_datanascimento">Data de Nascimento</label>
		    	<input type="text" class="form-control" id="cliente_datanascimento" name="datanascimento">
		  	</div>
		  <button type="submit" class="btn btn-primary">Salvar</button>
		</form>
	</div>
</div>
</div>
</body>
<footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</footer>
</html>