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
							<td>
								<a href="{{url('/onibus/'.$onibus[$i]['id'])}}"><i class="fa fa-pencil  fa-"></i><a>
								<form method="POST" action="/onibus/{{ $onibus[$i]->id }}" accept-charset="UTF-8">
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