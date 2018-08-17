@extends('layout.index')

@section('content')

       <div class="row">
           <div class="col-12 titulo">	
               <h2>Dados da Empresa</h2>
           </div>
           <div	class="col-12">
               
               <table class="table table-responsive">	
                   <thead>
                       <tr>
                           <th>Nome</th>
                           <th>cnpj</th>
                           <th>Responsável</th>
                           <th></th>
                       </tr>
                   </thead>
                   <tbody>
                       @for ($i = 0; $i < count($empresas); $i++)
                       <tr>
                           <td>{{ $empresas[$i]['nome'] }}</td>
                           <td>{{ $empresas[$i]['cnpj'] }}</td>
                           <td>{{ $empresas[$i]['nome_contato'] }}</td>
                           <td>
                               <a href="/empresa/{{$empresas[$i]['id']}}/edit" class="btn btn-sm btn-primary">Editar</a>
                           </td>
                           <td>
                               <a href="/empresa/apagar/{{$empresas[$i]['id']}}" class="btn btn-sm btn-danger">Excluir</a>
                           </td>
                           <td><span></span></td>
                       </tr>
                       @endfor
                   </tbody>
               </table>
           </div>
       </div>
@stop