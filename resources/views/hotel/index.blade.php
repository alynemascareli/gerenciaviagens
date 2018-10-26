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
							<td>
							<a href="{{url('/hotel/'.$hoteis[$i]['id'])}}"><i class="fa fa-pencil  fa-"></i><a>
							<form method="POST" action="/hotel/{{ $hoteis[$i]->id }}" accept-charset="UTF-8">
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