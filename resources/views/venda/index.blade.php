 @extends('layout.index')

 @section('content')

		<div class="row">
			<div class="col-12 titulo">	
				<h2>Vendas Cadastradas</h2>
			</div>
			<div	class="col-12">
				
				<table class="table table-responsive">	
					<thead>
						<tr>
							<th>Viagem</th>
							<th>Cliente</th>
							<th>Pagamento</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@for ($i = 0; $i < count($vendas); $i++)
						<tr>
							<td>{{ $vendas[$i]['viagem']->nome }}</td>
							<td>{{ $vendas[$i]['cliente']->pessoa->nome }}</td>
							<td>{{ $vendas[$i]['tipo_pagamento']['nome'].' '.$vendas[$i]['tipo_pagamento']['descricao'] }}</td>
							<td><span></span></td>
						</tr>
						@endfor
					</tbody>
				</table>
			</div>
		</div>
@stop