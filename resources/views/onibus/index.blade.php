 @extends('layout.index')

 @section('content')

		<div class="row">
			<div class="col-12 titulo">	
				<h2>Ônibus Cadastrados</h2>
			</div>
			<div	class="col-12">
				
				<table class="table table-responsive">	
					<thead>
						<tr>
							<th>Placa</th>
							<th>Empresa</th>
							<th>Descrição</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@for ($i = 0; $i < count($onibus); $i++)
						<tr>
							<td>{{ $onibus[$i]['placa'] }}</td>
							<td>{{ $onibus[$i]['empresa'] }}</td>
							<td>{{ $onibus[$i]['descricao'] }}</td>
							<td><span></span></td>
						</tr>
						@endfor
					</tbody>
				</table>
			</div>
		</div>
@stop