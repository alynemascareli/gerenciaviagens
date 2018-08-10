 @extends('layout.index')

 @section('content')

		<div class="row">
			<div class="col-12 titulo">	
			<h2>Novo Cliente</h2>
			</div>
			<div	class="col-12">
		<form method="POST" action="/cliente">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
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
		    	<input type="date" class="form-control" id="cliente_datanascimento" name="datanascimento">
		  	</div>

		  <button type="submit" class="btn btn-primary">Salvar</button>
		</form>

</div>
</div>
<script type="text/javascript" charset="utf-8" async defer>
	
</script>
@stop