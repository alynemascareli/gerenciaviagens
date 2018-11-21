
 @extends('layout.index')

@section('content')
    <div class="row">
        <div class="col-12 titulo">	
        <h2>Novo Motorista</h2>
        </div>
        @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul> @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="col-12">
       <form method="POST" action="/motorista/{{$motorista->id}}">
            {{ method_field('PUT') }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

         <div class="form-group">
           <label for="motorista_nome">Nome</label>
           <input type="text" class="form-control" id="motorista_nome" name="nome" value="{{$motorista->pessoa->nome}}">
         </div>
            <div class="form-group">
               <label for="motorista_email">email</label>
               <input type="text" class="form-control" id="motorista_email" name="email" value="{{$motorista->pessoa->email}}">
             </div>
             <div class="form-group">
           <label for="motorista_cpf">cpf</label>
           <input type="text" class="form-control" id="motorista_cpf" name="cpf" value="{{$motorista->pessoa->cpf}}">
         </div>
            <div class="form-group">
               <label for="motorista_telefone">telefone</label>
               <input type="text" class="form-control" id="motorista_telefone" name="telefone" value="{{$motorista->pessoa->telefone}}">
             </div>
           <div class="form-group">
               <label for="motorista_data_nascimento">Data de Nascimento</label>
               <input type="date" class="form-control" id="motorista_data_nascimento" name="data_nascimento" value="{{$motorista->pessoa->data_nascimento}}">
             </div>
             <div class="form-group">
           <label for="motorista_cpf">RG</label>
           <input type="text" class="form-control" id="motorista_cpf" name="rg" value="{{$motorista->pessoa->rg}}">
         </div>
         <div class="form-group">
           <label for="motorista_cpf">data de Expedição</label>
           <input type="date" class="form-control" id="motorista_cpf" name="data_expedicao" value="{{$motorista->pessoa->data_expedicao}}">
           </div>
           <div class="form-group">
               <label for="cnh">CNH</label>
               <input type="text" class="form-control" id="cnh" name="cnh" value="{{$motorista->cnh}}">
           </div>

         <button type="submit" class="btn btn-primary">Salvar</button>
       </form>

</div>

</div>
<script type="text/javascript" charset="utf-8" async defer>
   
</script>
@stop
