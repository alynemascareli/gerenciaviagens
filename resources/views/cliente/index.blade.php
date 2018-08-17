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
							<th></th>
						</tr>
					</thead>
					<tbody>
						@for ($i = 0; $i < count($clientes); $i++)
						<tr>
							<td>{{ $clientes[$i]->pessoa['nome'] }}</td>
							<td>{{ $clientes[$i]->pessoa['telefone'] }}</td>
							<td>{{ $clientes[$i]->pessoa['datanascimento'] }}</td>
							<td><a href="{{url('/cliente/'.$clientes[$i]->id.'/edit')}}"><i class="fa fa-edit fa-fw"></i></a></td>
						</tr>
						@endfor
					</tbody>
				</table>
			</div>
		</div>
@stop
