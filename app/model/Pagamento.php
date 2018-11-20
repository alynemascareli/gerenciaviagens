<?php

namespace App\model;

use App\model\Model;

class Pagamento extends Model
{
   protected $table = 'pagamento'; 

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];


    public static function create (Array $data) {
        $pagamento = new Pagamento();
        self::setData($pagamento, $data);
        return $pagamento;
    }
    
    public static function edit (Pagamento $pagamento, Array $data) {
        self::setData($pagamento, $data);        
        return $pagamento;
    }
    

    protected static function setData(Pagamento &$pagamento, $data){
        $pagamento->valor = $data['valor'];
        $pagamento->descricao = $data['descricao'];
        $pagamento->parcela = $data['parcela'];
        $pagamento->vencimento = $data['vencimento'];        
        $pagamento->pagamento = $data['pagamento'];
        $pagamento->empresa_id = $data['empresa_id'];
        $pagamento->venda_id = $data['venda_id'];
        $pagamento->save();
    }
}
