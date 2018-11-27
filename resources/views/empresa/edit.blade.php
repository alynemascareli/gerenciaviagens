
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
            <input type="hidden" class="form-control" id="empresa_nome" name="nome" value="{{$empresa->nome}}">
            <input type="hidden" class="form-control" id="empresa_cnpj" name="cnpj" value="{{$empresa->cnpj}}">
            <input type="hidden" class="form-control" id="nome_contato" name="nome_contato" value="{{$empresa->nome_contato}}">
            <input type="hidden" class="form-control" id="dominio" name="dominio" value="{{$empresa->dominio}}">
            <div class="form-group">
                <label for="telefone_contato">telefone</label>
                <input type="text" class="form-control" id="telefone_contato" name="telefone_contato" value="{{$empresa->telefone_contato}}">
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="{{$empresa->endereco['endereco']}}">
            </div>
            <div class="form-group">
                <label for="numero">Número</label>
                <input type="text" class="form-control" id="numero" name="numero" value="{{$empresa->endereco['numero']}}">
            </div>
            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" value="{{$empresa->endereco['bairro']}}">
            </div>
            <div class="form-group">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control" id="complemento" name="complemento" value="{{$empresa->endereco['complemento']}}">
            </div>
            <div class="form-group">
                <label for="cep">cep</label>
                <input type="text" class="form-control" id="cep" name="cep" value="{{$empresa->endereco['cep']}}">
            </div>
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value="{{$empresa->endereco['cidade']}}">
            </div>
            <div class="form-group">
                <label for="estado_contato">Estado</label>
                <input type="text" class="form-control" id="estado_contato" name="estado" value="{{$empresa->endereco['estado']}}">
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">Nome</label>
                    <input id="name" type="text" class="form-control" name="name" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="email" class="col-md-4 control-label">E-Mail</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                </div>
            </div>
            <div class="col-md-3">

                <div class="form-group">
                    <label for="password" class="col-md-4 control-label">Senha</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                </div>                       
            </div>  
            <div class="col-md-3">
                <div class="form-group">                
                   
                       <span class="btn btn-primary" onclick="CadastrarUsuario()"> Adicionar usuário</span>
                   
                </div>
            </div>
        
            <div class="col-md-12">            
                <button type="submit" class="btn btn-primary">Salvar</button>
       </form>
    </div>

</div>

</div>
<script type="text/javascript" charset="utf-8" async defer>
    function CadastrarUsuario(){
        var data = new FormData();
        data.append('name', document.getElementById("name"));
        data.append('email', document.getElementById("email"));
        data.append('password', document.getElementById("password"));
        
        let url = "http://"+ window.location.href.split("/")[2] +'/api/register/';
        var xhr = new XMLHttpRequest();
        xhr.open('POST', url, true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {//Call a function when the state changes.
            // if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) {
               
            // }
        }
        xhr.send(data); 
    }

</script>
@stop