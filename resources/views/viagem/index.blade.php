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

							<td><td><a href="{{url('/viagem/'.$viagens[$i]->id.'/edit')}}"><i class="fa fa-edit fa-fw"></i></a>							

<form method="POST" action="/viagem/{{ $viagens[$i]->id }}" accept-charset="UTF-8">
	{{ method_field('DELETE') }}
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<a type="submit" href="#" type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Delete" onclick='this.parentNode.submit(); return false;'>
		<i class="fa fa-times"></i>
	  </a>								
</form>
</td></td>
						</tr>
						@endfor
					</tbody>
				</table>
			</div>
		</div>
@stop