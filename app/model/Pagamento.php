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
        $pagamento->viagem_id = $data['viagem_id'];
        $pagamento->cliente_id = $data['cliente_id'];
        $pagamento->descricao = $data['descricao'];
        $pagamento->empresa_id = $data['empresa_id'];
        $pagamento->save();
    }
}
