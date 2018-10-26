@extends('layout.index')

@section('content')

       <div class="row">
           <div class="col-12 titulo">	
           <h2>Novo Hotel/Pousada</h2>
           </div>
           <div	class="col-12">
       <form method="POST" action="/hotel/{{$hotel['id']}}">
       {{ method_field('PUT') }}
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <input type="hidden" name="hotel_id" value="{{ $hotel['id'] }}">
      
         <div class="form-group">
           <label for="hotel_nome">Nome</label>
           <input type="text" class="form-control" id="hotel_nome" value="{{$hotel->nome}}" name="nome">
         </div>
            <div class="form-group">
               <label for="hotel_proprietario">Proprietário</label>
               <input type="text" class="form-control" id="hotel_proprietario" value="{{$hotel->proprietario}}" name="proprietario">
             </div>
             <div class="form-group">
           <label for="hotel_telefone">telefone</label>
           <input type="text" class="form-control" id="hotel_telefone" value="{{$hotel->telefone}}" name="telefone">
         </div>
            <div class="form-group">
               <label for="hotel_endereco">endereco</label>
               <input type="text" class="form-control" id="hotel_endereco" value="{{$hotel->endereco}}" name="endereco">
             </div>
               <div class="form-group">
               <label for="hotel_numero">numero</label>
               <input type="text" class="form-control" id="hotel_numero" value="{{$hotel->numero}}" name="numero">
             </div>
               <div class="form-group">
               <label for="hotel_bairro">bairro</label>
               <input type="text" class="form-control" id="hotel_bairro" value="{{$hotel->bairro}}" name="bairro">
             </div>
               <div class="form-group">
               <label for="hotel_cidade">cidade</label>
               <input type="text" class="form-control" id="hotel_cidade" value="{{$hotel->cidade}}" name="cidade">
             </div>
               <div class="form-group">
               <label for="hotel_estado">estado</label>
               <input type="text" class="form-control" id="hotel_estado" value="{{$hotel->estado}}" name="estado">
             </div>
               <div class="form-group">
               <label for="hotel_capacidade">capacidade</label>
               <input type="text" class="form-control" id="hotel_capacidade" value="{{$hotel->capacidade}}" name="capacidade">
             </div>
               <div class="form-group">
               <label for="hotel_acomodacao">acomodacao</label>
               <input type="text" class="form-control" id="hotel_acomodacao" value="{{$hotel->acomodacao}}" name="acomodacao">
             </div>
               <div class="form-group">
               <label for="hotel_observacao">observacao</label>
               <input type="text" class="form-control" id="hotel_observacao" value="{{$hotel->observacao}}" name="observacao">
             </div>
         <button type="submit" class="btn btn-primary">Salvar</button>
       </form>

</div>
</div>
<script type="text/javascript" charset="utf-8" async defer>
   
</script>
@stop