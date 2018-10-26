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
			<label for="venda_viagem">Venda</label>
				<select name="viagem_id" id="venda_viagem" onchange="verificaParcelas()">
					@for ($i = 0; $i < count($venda); $i++)
						<option value="{{ $venda[$i]->id }}">{{ $venda[$i]->cliente->pessoa->nome." - ".$venda[$i]->viagem->nome }}</option>
					@endfor
				</select>
		</div>
		<div>
		<textarea name="" id="demo" cols="30" rows="10"></textarea>
		</div>
		  <button type="submit" class="btn btn-primary">Salvar</button>
		</form>

</div>
</div>
<script type="text/javascript" charset="utf-8" async defer>
	function verificaParcelas(){
		let id = document.getElementById('venda_viagem').value;
		let url = "http://gerenciaviagens/api/pagamento/"+id;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			// Typical action to be performed when the document is ready:
			document.getElementById("demo").innerHTML = xhttp.responseText;
			}
		};
		xhttp.open("GET", url, true);
		xhttp.send();
	}
	window.onload = function() {
		verificaParcelas();
};
</script>
@stop