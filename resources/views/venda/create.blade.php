 @extends('layout.index')

 @section('content')

		<div class="row">
			<div class="col-12 titulo">	
			<h2>Novo venda</h2>
			</div>
			<div	class="col-12">
		<form method="POST" action="/venda">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <div class="form-group">
		    <label for="venda_cliente">cliente</label>
				<select name="cliente_id" id="venda_cliente">
						@for ($i = 0; $i < count($cliente); $i++)
 							<option value="{{ $cliente[$i]->id }}">{{ $cliente[$i]->pessoa['nome'] }}</option>
						@endfor
				</select>
		  </div>
 			<div class="form-group">
		    	<label for="venda_viagem">viagem</label>
					<select name="viagem_id" id="venda_viagem">
						@for ($i = 0; $i < count($viagem); $i++)
 							<option value="{{ $viagem[$i]->id }}">{{ $viagem[$i]->nome }}</option>
						@endfor
				</select>
		  	</div>
		  	<div class="form-group">
					<label for="venda_Pagamento">Pagamento</label>
					<select name="tipo_pagamento_id" id="venda_pagamento">
							@for ($i = 0; $i < count($pagamento); $i++)
								@if($pagamento[$i]->tipo==1)<option value="{{ $pagamento[$i]->id }}">{{ $pagamento[$i]->nome.' '.$pagamento[$i]->descricao }}</option>
								@else<option value="{{ $pagamento[$i]->id }}">{{ $pagamento[$i]->nome.' '.$pagamento[$i]->descricao.' x' }}</option>
								@endif
							@endfor
					</select>	  
				</div>
				<div class="form-group">
					<label for="venda_quantidade">Quantidade</label>
					<input type="number" id="venda_quantidade" name="quantidade" min="1" max="10" value="1">
				</div>
				<input type="text" class="hidden" name="confirmacao" value="0">
				<input type="text" class="hidden" name="empresa_id" value="1">
				<input type="text" class="hidden" name="cliente_empresa_id" value="0">
				<input type="text" class="hidden" name="viagem_empresa_id" value="0">
				<input type="text" class="hidden" name="tipo_pagamento_empresa_id" value="0">
				<input type="text" class="hidden" name="pagamento_id" value="0">


		  <button type="submit" class="btn btn-primary">Salvar</button>
		</form>

</div>
</div>
<script type="text/javascript" charset="utf-8" async defer>
	
</script>
@stop