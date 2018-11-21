@extends('layout.index')

@section('content')

       <div class="row">
           <div class="col-12 titulo">	
           <h2>Editar Viagem</h2>
           </div>
           <div	class="col-12">
       <form method="POST" action="/viagem/{{$viagem['id']}}">
       {{ method_field('PUT') }}
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="viagem_id" value="{{ $viagem['id'] }}">

         <div class="form-group">
           <label for="viagem_nome">Nome</label>
           <input type="text" class="form-control" id="viagem_nome" name="nome" value="{{$viagem['nome']}}">
         </div>
            <div class="form-group">
               <label for="viagem_email">Descrição</label>
               <input type="text" class="form-control" id="viagem_descricao" name="descricao" value="{{$viagem['descricao']}}">
             </div>
             <div class="form-group">
           <label for="viagem_origem">origem</label>
           <input type="text" class="form-control" id="viagem_origem" name="origem" value="{{$viagem['origem']}}">
         </div>
            <div class="form-group">
               <label for="viagem_destino">destino</label>
               <input type="text" class="form-control" id="viagem_destino" name="destino" value="{{$viagem['destino']}}">
             </div>
           <div class="form-group">
               <label for="viagem_quantidade">Quantidade</label>
               <input type="text" class="form-control" id="viagem_quantidade" name="quantidade" value="{{$viagem['quantidade']}}">
             </div>
               <div class="form-group">
               <label for="viagem_valor">valor</label>
               <input type="text" class="form-control" id="viagem_valor" name="valor" value="{{$viagem['valor']}}">
             </div>
               <div class="form-group">
               <label for="viagem_saida">Data Saída</label>
               <input type="date" class="form-control" id="viagem_saida" name="data_saida" value="{{$viagem['data_saida']}}">
               
             </div>
               <div class="form-group">
               <label for="viagem_retorno">Data Retorno</label>
               <input type="date" class="form-control" id="viagem_retorno" name="data_retorno" value="{{$viagem['data_retorno']}}">
               
             </div>

         <button type="submit" class="btn btn-primary">Salvar</button>
       </form>

</div>
</div>
<script type="text/javascript" charset="utf-8" async defer>
   
</script>
@stop