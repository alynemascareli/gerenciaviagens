 @extends('layout.index')

 @section('content')

		<div class="row">
			<div class="col-12 titulo">	
				<h2>Pagamentos Cadastrados</h2>
			</div>
			<div	class="col-12">
				
				<table class="table table-responsive">	
					<thead>
						<tr>
							<th>Nome</th>
							<th>Data</th>
							<th>Valor</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@for ($i = 0; $i < count($pagamentos); $i++)
						<tr>
							<td>{{ $pagamentos[$i]['nome'] }}</td>
							<td>{{ $pagamentos[$i]['data'] }}</td>
							<td>{{ $pagamentos[$i]['valor'] }}</td>
							<td><span></span></td>
						</tr>
						@endfor
					</tbody>
				</table>
			</div>
		</div>
@stop