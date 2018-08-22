
 @extends('layout.index')

@section('content')
       <div class="row">
           <div class="col-12 titulo">	
           <h2>Nova Empresa</h2>
           </div>
           <div	class="col-12">
       <form method="POST" action="/empresa">

       <input type="hidden" name="_token" value="{{ csrf_token() }}">

         <div class="form-group">
           <label for="empresa_nome">Nome</label>
           <input type="text" class="form-control" id="empresa_nome" name="nome">
         </div>
        <div class="form-group">
            <label for="empresa_cnpj">Cnpj</label>
            <input type="text" class="form-control" id="empresa_cnpj" name="cnpj">
        </div>
        <div class="form-group">
           <label for="nome_contato">Responsável</label>
           <input type="text" class="form-control" id="nome_contato" name="nome_contato">
         </div>
         <div class="form-group">
           <label for="dominio">Dominio</label>
           <input type="text" class="form-control" id="dominio" name="dominio">
         </div>
        <div class="form-group">
            <label for="telefone_contato">telefone</label>
            <input type="text" class="form-control" id="telefone_contato" name="telefone_contato">
        </div>
        <div class="form-group">
            <label for="endereco_contato">Endereço</label>
            <input type="text" class="form-control" id="endereco_contato" name="endereco_contato">
        </div>
        <div class="form-group">
            <label for="numero_contato">Número</label>
            <input type="text" class="form-control" id="numero_contato" name="numero_contato">
        </div>
        <div class="form-group">
            <label for="cidade_contato">Cidade</label>
            <input type="text" class="form-control" id="cidade_contato" name="cidade_contato">
        </div>
        <div class="form-group">
            <label for="estado_contato">Estado</label>
            <input type="text" class="form-control" id="estado_contato" name="estado_contato">
        </div>
         <button type="submit" class="btn btn-primary">Salvar</button>
       </form>

</div>

</div>
<script type="text/javascript" charset="utf-8" async defer>
   
</script>
@stop