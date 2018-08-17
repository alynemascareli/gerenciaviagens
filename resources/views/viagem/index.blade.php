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
							<th>Telefone</th>
							<th>Data de Nascimento</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@for ($i = 0; $i < count($viagens); $i++)
						<tr>
							<td>{{ $viagens[$i]['nome'] }}</td>
							<td>{{ $viagens[$i]['telefone'] }}</td>
							<td>{{ $viagens[$i]['datanascimento'] }}</td>
							<td><span></span></td>
						</tr>
						@endfor
					</tbody>
				</table>
			</div>
		</div>
@stop