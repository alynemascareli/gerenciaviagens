
 @extends('layout.index')

@section('content')
       <div class="row">
           <div class="col-12 titulo">	
           <h2>Editando Empresa</h2>
           </div>
           @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul> @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
           <div	class="col-12">
       <form method="POST" action="/empresa/{{$empresa->id}}">
            {{ method_field('PUT') }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label for="empresa_nome">Nome</label>
                <input type="text" class="form-control" id="empresa_nome" name="nome" value="{{$empresa->nome}}">
            </div>
            <div class="form-group">
                <label for="empresa_cnpj">Cnpj</label>
                <input type="text" class="form-control" id="empresa_cnpj" name="cnpj" value="{{$empresa->cnpj}}">
            </div>
            <div class="form-group">
                <label for="nome_contato">Responsável</label>
                <input type="text" class="form-control" id="nome_contato" name="nome_contato" value="{{$empresa->nome_contato}}">
            </div>
            <div class="form-group">
                <label for="dominio">Dominio</label>
                <input type="text" class="form-control" id="dominio" name="dominio" value="{{$empresa->dominio}}">
            </div>
            <div class="form-group">
                <label for="telefone_contato">telefone</label>
                <input type="text" class="form-control" id="telefone_contato" name="telefone_contato" value="{{$empresa->telefone_contato}}">
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="{{$empresa->endereco->endereco}}">
            </div>
            <div class="form-group">
                <label for="numero">Número</label>
                <input type="text" class="form-control" id="numero" name="numero" value="{{$empresa->endereco->numero}}">
            </div>
            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" value="{{$empresa->endereco->bairro}}">
            </div>
            <div class="form-group">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control" id="complemento" name="complemento" value="{{$empresa->endereco->complemento}}">
            </div>
            <div class="form-group">
                <label for="cep">cep</label>
                <input type="text" class="form-control" id="cep" name="cep" value="{{$empresa->endereco->cep}}">
            </div>
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value="{{$empresa->endereco->cidade}}">
            </div>
            <div class="form-group">
                <label for="estado_contato">Estado</label>
                <input type="text" class="form-control" id="estado_contato" name="estado" value="{{$empresa->endereco->estado}}">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
       </form>

</div>

</div>
<script type="text/javascript" charset="utf-8" async defer>
   
</script>
@stop