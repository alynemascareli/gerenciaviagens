 @extends('layout.index')

 @section('content')

		<div class="row">
			<div class="col-12 titulo">	
			<h2>Novo Pagamento</h2>
			</div>
			<div	class="col-12">
		<form method="POST" action="/hotel">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <div class="form-group">
		    <label for="hotel_nome">Cliente</label>
		    <select name="" id=""></select>
		  </div>
 			<div class="form-group">
		    	<label for="hotel_proprietario">Proprietário</label>
		    	<input type="text" class="form-control" id="hotel_proprietario" name="proprietario">
		  	</div>
		  	<div class="form-group">
		    <label for="hotel_telefone">telefone</label>
		    <input type="text" class="form-control" id="hotel_telefone" name="telefone">
		  </div>
 			<div class="form-group">
		    	<label for="hotel_endereco">endereco</label>
		    	<input type="text" class="form-control" id="hotel_endereco" name="endereco">
		  	</div>
				<div class="form-group">
		    	<label for="hotel_numero">numero</label>
		    	<input type="text" class="form-control" id="hotel_numero" name="numero">
		  	</div>
				<div class="form-group">
		    	<label for="hotel_bairro">bairro</label>
		    	<input type="text" class="form-control" id="hotel_bairro" name="bairro">
		  	</div>
				<div class="form-group">
		    	<label for="hotel_cidade">cidade</label>
		    	<input type="text" class="form-control" id="hotel_cidade" name="cidade">
		  	</div>
				<div class="form-group">
		    	<label for="hotel_estado">estado</label>
		    	<input type="text" class="form-control" id="hotel_estado" name="estado">
		  	</div>
				<div class="form-group">
		    	<label for="hotel_capacidade">capacidade</label>
		    	<input type="text" class="form-control" id="hotel_capacidade" name="capacidade">
		  	</div>
				<div class="form-group">
		    	<label for="hotel_acomodacao">acomodacao</label>
		    	<input type="text" class="form-control" id="hotel_acomodacao" name="acomodacao">
		  	</div>
				<div class="form-group">
		    	<label for="hotel_observacao">observacao</label>
		    	<input type="text" class="form-control" id="hotel_observacao" name="observacao">
		  	</div>
		  <button type="submit" class="btn btn-primary">Salvar</button>
		</form>

</div>
</div>
<script type="text/javascript" charset="utf-8" async defer>
	
</script>
@stop