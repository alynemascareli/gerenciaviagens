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
							<td>{{ $clientes[$i]->pessoa['data_nascimento'] }}</td>
							<td><a href="{{url('/cliente/'.$clientes[$i]->id.'/edit')}}"><i class="fa fa-edit fa-fw"></i></a>							

							<form method="POST" action="/cliente/{{ $clientes[$i]->id }}" accept-charset="UTF-8">
								{{ method_field('DELETE') }}
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<a type="submit" href="#" type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Delete" onclick='this.parentNode.submit(); return false;'>
							        <i class="fa fa-times"></i>
							      </a>								
							</form>
							</td>
						</tr>
						@endfor
					</tbody>
				</table>
			</div>
		</div>
@stop
