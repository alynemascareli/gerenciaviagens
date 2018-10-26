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
							<th>Cliente</th>
							<th>Viagem</th>
							<th>Tipo Pagamento/ Parcela</th>
							<th>Valor</th>
							<th>Data Pagamento</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@for ($i = 0; $i < count($pagamentos); $i++)
						<tr>
							<td>nome cliente</td>
							<td>nome viagem</td>
							<td>{{ $pagamentos[$i]['parcela'] }}</td>
							<td>{{ $pagamentos[$i]['pagamento'] }}</td>
							<td>R$ {{ number_format($pagamentos[$i]['valor'],2)	 }}</td>
							<td><span></spa	n></td>
						</tr>
						@endfor
					</tbody>
				</table>
			</div>
		</div>
@stop