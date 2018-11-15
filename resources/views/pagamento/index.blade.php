 @extends('layout.index')

 @section('content')

		<div class="row">
			<div class="col-12 titulo">	
				<h2>{{$titulo}}</h2>
			</div>
			<div	class="col-12">
				
				<table class="table table-responsive">	
					<thead>
						<tr>
							<th>Cliente</th>
							<th>Viagem</th>
							<th>Tipo Pagamento</th>
							<th>Parcela</th>
							<th>Valor</th>
							<th>Data Vencimento</th>							
							<th></th>
						</tr>
					</thead>
					<tbody>
						@for ($i = 0; $i < count($vendas); $i++)
						@if(strtotime($vendas[$i]->vencimento) >= strtotime(date("Y-m-d")))
						<tr>
							@else
							<tr class="atrasado">

							@endif
							<td>{{$vendas[$i]->cliente['pessoa']->nome}}</td>
							<td>{{$vendas[$i]->viagem['nome']}}</td>					

							<td>{{ $vendas[$i]->tipopagamento['nome'] }}</td>
							<td>{{ $vendas[$i]->parcela }}</td>
							<td>R$ {{ number_format($vendas[$i]->valor,2)	 }}</td>
							<td>{{ $vendas[$i]->vencimento }}</td>
							<td><a href="#"><i class="fa fa-pencil  fa-"></i><a></td>
						</tr>
						@endfor
					</tbody>
				</table>
			</div>
		</div>
		<style>
			.atrasado{
				background: #de5156
			}
			.pago{				
				background: #7cd25a;
			}
		</style>
@stop