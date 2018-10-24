 @extends('layout.index')

 @section('content')

		<div class="row">
			<div class="col-12 titulo">	
				<h2>Hoteis Cadastrados</h2>
			</div>
			<div	class="col-12">
				
				<table class="table table-responsive">	
					<thead>
						<tr>
							<th>Nome</th>
							<th>Telefone</th>
							<th>Proprietário</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@for ($i = 0; $i < count($hoteis); $i++)
						<tr>
							<td>{{ $hoteis[$i]['nome'] }}</td>
							<td>{{ $hoteis[$i]['telefone'] }}</td>
							<td>{{ $hoteis[$i]['proprietario'] }}</td>
							<td><span></span></td>
						</tr>
						@endfor
					</tbody>
				</table>
			</div>
		</div>
@stop