 @extends('layout.index')

 @section('content')

		<div class="row">
			<div class="col-12 titulo">	
			<h2>Novo Ônibus</h2>
			</div>
			<div	class="col-12">
		<form method="POST" action="/onibus">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <div class="form-group">
		    <label for="onibus_placa">placa</label>
		    <input type="text" class="form-control" id="onibus_placa" name="placa">
		  </div>
 			<div class="form-group">
		    	<label for="onibus_empresa">empresa</label>
		    	<input type="text" class="form-control" id="onibus_empresa" name="empresa">
		  	</div>
		  	<div class="form-group">
		    <label for="onibus_descricao">descricao</label>
		    <input type="text" class="form-control" id="onibus_descricao" name="descricao">
		  </div>

		  <button type="submit" class="btn btn-primary">Salvar</button>
		</form>

</div>
</div>
<script type="text/javascript" charset="utf-8" async defer>
	
</script>
@stop