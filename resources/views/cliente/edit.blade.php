
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
		    	<label for="cliente_data_nascimento">Data de Nascimento</label>
		    	<input type="date" class="form-control" id="cliente_data_nascimento" name="data_nascimento" value="{{ $cliente['pessoa']->data_nascimento }}">
		  	</div>
		  	<div class="form-group">
		    <label for="cliente_cpf">RG</label>
		    <input type="text" class="form-control" id="cliente_cpf" name="rg" value="{{ $cliente['pessoa']->rg }}">
		  </div>
		  <div class="form-group">
		    <label for="cliente_cpf">data de Expedição</label>
		    <input type="date" class="form-control" id="cliente_cpf" name="data_expedicao" value="{{ $cliente['pessoa']->data_expedicao }}">
			</div>
			<div class="form-group">
					<label for="endereco">Endereço</label>
					<input type="text" class="form-control" id="endereco" name="endereco" value="{{$cliente->endereco->endereco}}">
			</div>
			<div class="form-group">
					<label for="numero">Número</label>
					<input type="text" class="form-control" id="numero" name="numero" value="{{$cliente->endereco->numero}}">
			</div>
			<div class="form-group">
					<label for="bairro">Bairro</label>
					<input type="text" class="form-control" id="bairro" name="bairro" value="{{$cliente->endereco->bairro}}">
			</div>
			<div class="form-group">
					<label for="complemento">Complemento</label>
					<input type="text" class="form-control" id="complemento" name="complemento" value="{{$cliente->endereco->complemento}}">
			</div>
			<div class="form-group">
					<label for="cep">cep</label>
					<input type="text" class="form-control" id="cep" name="cep" value="{{$cliente->endereco->cep}}">
			</div>
			<div class="form-group">
					<label for="cidade">Cidade</label>
					<input type="text" class="form-control" id="cidade" name="cidade" value="{{$cliente->endereco->cidade}}">
			</div>
			<div class="form-group">
					<label for="estado_contato">Estado</label>
					<input type="text" class="form-control" id="estado_contato" name="estado" value="{{$cliente->endereco->estado}}">
			</div>

		  <button type="submit" class="btn btn-primary">Salvar</button>
		</form>

</div>

</div>
<script type="text/javascript" charset="utf-8" async defer>
	
</script>
@stop
