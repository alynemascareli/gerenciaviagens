<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Clientes - Boralá Viajar</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 titulo">	
			<h2>Clientes Cadastrados</h2>
			</div>
			<div	class="col-12">
				
		<table class="table table-responsive">	
			<thead>
				<tr>
					<th>Nome</th>
					<th>Telefone</th>
					<th>Data de Nascimento</th>
				</tr>
			</thead>
			<tbody>
				@for ($i = 0; $i < count($clientes); $i++)
				<tr>
					<td>{{ $clientes[$i].nome }}</td>
					<td>{{ $clientes[$i].telefone }}</td>
					<td>{{ $clientes[$i].data_nascimento }}</td>
				</tr>
				@endfor
			</tbody>
		</table>
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