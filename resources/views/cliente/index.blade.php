@extends('layout.index')

@section('content')
		<div class="row">
			<div class="col-12 titulo">	
			<h2>Clientes Cadastrados</h2>
			</div>
			<div	class="col-12">
				
			<table class="table table-responsive">	
				<thead>
					<tr>
						<th>Nome</th>
						<th>Telefone</th>
						<th>Data de Nascimento</th>
					</tr>
				</thead>
				<tbody>
					@for ($i = 0; $i < count($clientes); $i++)
					<tr>
						<td>{{ $clientes[$i]['nome'] }}</td>
						<td>{{ $clientes[$i]['telefone'] }}</td>
						<td>{{ $clientes[$i]['datanascimento'] }}</td>
					</tr>
					@endfor
				</tbody>
			</table>
			</div>
	</div>
@endsection