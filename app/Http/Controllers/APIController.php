<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\model\PagamentoVenda;



class APIController extends Controller
{
    public function pagamento($id)
    {
        $pagamentos = PagamentoVenda::where('venda_id',$id)->get();
        return response()->json($pagamentos);    
    }

}
