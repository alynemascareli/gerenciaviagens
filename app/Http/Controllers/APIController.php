<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\model\Pagamento;
use App\model\Venda;



class APIController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
