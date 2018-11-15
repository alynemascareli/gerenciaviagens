<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\model\Pagamento;
use App\model\Venda;



class APIController extends Controller
{
    public function pagamento($id)
    {
        $pagamentos = Pagamento::where('venda_id',$id)->get();
        return response()->json($pagamentos);    
    }
    public function venda($id){
        $venda = Venda::where('viagem_id', $id)->get();
        return response()->json($venda);
    }

}
