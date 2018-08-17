
 @extends('layout.index')

 @section('content')
		<div class="row">
			<div class="col-12 titulo">	
			<h2>Cliente</h2>
			</div>
			<div	class="col-12">
		<form method="POST" action="/cliente/{{$cliente['id']}}">
		{{ method_field('PUT') }}
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="pessoa_id" value="{{ $cliente['pessoa']->id }}">
		
		  <div class="form-group">
		    <label for="cliente_nome">Nome</label>
		    <input type="text" class="form-control" id="cliente_nome" name="nome" value="{{ $cliente['pessoa']->nome }}">
		  </div>
 			<div class="form-group">
		    	<label for="cliente_email">email</label>
		    	<input type="text" class="form-control" id="cliente_email" name="email" value="{{ $cliente['pessoa']->email }}">
		  	</div>
		  	<div class="form-group">
		    <label for="cliente_cpf">cpf</label>
		    <input type="text" class="form-control" id="cliente_cpf" name="cpf" value="{{ $cliente['pessoa']->cpf }}">
		  </div>
 			<div class="form-group">
		    	<label for="cliente_telefone">telefone</label>
		    	<input type="text" class="form-control" id="cliente_telefone" name="telefone" value="{{ $cliente['pessoa']->telefone }}">
		  	</div>
			<div class="form-group">
		    	<label for="cliente_datanascimento">Data de Nascimento</label>
		    	<input type="date" class="form-control" id="cliente_datanascimento" name="datanascimento" value="{{ $cliente['pessoa']->datanascimento }}">
		  	</div>
		  	<div class="form-group">
		    <label for="cliente_cpf">RG</label>
		    <input type="text" class="form-control" id="cliente_cpf" name="rg" value="{{ $cliente['pessoa']->rg }}">
		  </div>
		  <div class="form-group">
		    <label for="cliente_cpf">data de Expedição</label>
		    <input type="date" class="form-control" id="cliente_cpf" name="dataexpedicao" value="{{ $cliente['pessoa']->dataexpedicao }}">
		  </div>

		  <button type="submit" class="btn btn-primary">Salvar</button>
		</form>

</div>

</div>
<script type="text/javascript" charset="utf-8" async defer>
	
</script>
@stop
