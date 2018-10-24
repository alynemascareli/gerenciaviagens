 @extends('layout.index')

 @section('content')

		<div class="row">
			<div class="col-12 titulo">	
				<h2>Viagens Cadastrados</h2>
			</div>
			<div	class="col-12">
				
				<table class="table table-responsive">	
					<thead>
						<tr>
							<th>Nome</th>
							<th>Destino</th>
							<th>Quantidade</th>
							<th>Valor</th>
							<th>Data de Saída</th>
							<th>Data de Retorno</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@for ($i = 0; $i < count($viagens); $i++)
						<tr>
							<td>{{ $viagens[$i]['nome'] }}</td>
							<td>{{ $viagens[$i]['destino'] }}</td>
							<td>{{ $viagens[$i]['quantidade'] }}</td>
							<td>{{ $viagens[$i]['valor'] }}</td>
							<td>{{ $viagens[$i]['data_saida'].' ('.$viagens[$i]['origem'].')' }}</td>
							<td>{{ $viagens[$i]['data_retorno'].' ('.$viagens[$i]['destino'].')' }}</td>

							<td><span></span></td>
						</tr>
						@endfor
					</tbody>
				</table>
			</div>
		</div>
@stop