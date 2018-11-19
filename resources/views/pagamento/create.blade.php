 @extends('layout.index')

 @section('content')
 		<div class="row">
			<div class="col-12 titulo">	
			<h2>Novo Pagamento</h2>
			</div>
			<div	class="col-12">
		

		<input type="hidden" name="_token" id="csrf" value="{{ csrf_token() }}">		 

		<div class="form-group">
			<label for="pagamento_viagem">Viagem</label>
			<select name="viagem_id" id="pagamento_viagem" onchange="verificaVendas()">
				<option value="">Selecione a Viagem</option>
				@foreach ($viagem as $vi)
					<option value="{{$vi['id']}}">{{$vi['nome']}}</option>
				@endforeach
			</select>
			<label for="viagem_viagem">Cliente</label>
			
			<select name="viagem_id" id="viagem_viagem" onchange="verificaParcelas()">
					<option value="">Aguardando escolha de viagem...</option>						
			</select>
			<table class="table table-striped">
				<thead>
					<tr>
					<th scope="col">#</th>
					<th scope="col">Vencimento</th>
					<th scope="col">Valor</th>
					<th scope="col"></th>
					</tr>
				</thead>
				<tbody id="pagamento_tabela">
					
				</tbody>
			</table>			
		</div>

</div>
</div>
<script type="text/javascript" charset="utf-8" async defer>
	function verificaParcelas(){
		let id = document.getElementById('viagem_viagem').value;
		let url = "http://gerencia-viagens.test/api/pagamento/"+id;
		//let url = "http://gerenciaviagens/api/pagamento/"+id;
		var xhttp = new XMLHttpRequest();
		document.getElementById("pagamento_tabela").innerHTML = '';

		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				let result = JSON.parse(xhttp.responseText);
				for (let a = 0; a < result.length; a++) {
					
					let y = document.createElement("TR");
					let x = document.createElement("TD");
					let t = document.createTextNode(result[a].parcela);
					x.appendChild(t);
					y.appendChild(x);

					x = document.createElement("TD");
					t = document.createTextNode(result[a].vencimento);
					x.appendChild(t);
					y.appendChild(x);

					x = document.createElement("TD");
					t = document.createTextNode(result[a].valor);
					x.appendChild(t);
					y.appendChild(x);
					
					
					x = document.createElement("TD");
					if(result[a].situacao==1)
					{		
						t = document.createElement("FORM");
						t.setAttribute("method", "POST");
						t.setAttribute("action", "/pagamento/up");
						let f = document.createElement("INPUT");
						f.setAttribute("type", "hidden");
						f.setAttribute("value", result[a].id);
						f.setAttribute("name", "id");
						t.appendChild(f);
						f = document.createElement("INPUT");
						f.setAttribute("type", "hidden");
						f.setAttribute("value", document.getElementById("csrf").value);
						f.setAttribute("name", "_token");
						t.appendChild(f);
						f = document.createElement("BUTTON");
						let txt = document.createTextNode("PAGAR");
						f.appendChild(txt);

					
						
						t.appendChild(f);


					}else{						
						t = document.createTextNode("PAGO");
					}
					x.appendChild(t);
					y.appendChild(x);
					document.getElementById("pagamento_tabela").appendChild(y);
				}			
			}
		};
		xhttp.open("GET", url, true);
		xhttp.send();
	}
	// window.onload = function() {
	// 	verificaParcelas();
	// };
	function verificaVendas(){
		let id = document.getElementById('pagamento_viagem').value;
		let url = "http://gerencia-viagens.test/api/venda/"+id;
		//let url = "http://gerenciaviagens/api/pagamento/"+id;
		let xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				let result = JSON.parse(xhttp.responseText);
				console.log(result.length)
				document.getElementById("viagem_viagem").innerHTML   = '';
				for (let b = 0; b < result.length; b++) {
					var x = document.createElement("OPTION");
					x.setAttribute("value", result[b].id);
					var t = document.createTextNode(result[b].cliente.pessoa.nome);
					x.appendChild(t);
					document.getElementById("viagem_viagem").appendChild(x);				
				}
				verificaParcelas();
			}
		};
		xhttp.open("GET", url, true);
		xhttp.send();
	}
</script>
@stop