<?php

namespace App\model;

use App\model\Model;

class PagamentoVenda extends Model
{
   protected $table = 'pagamento_has_venda'; 

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $with =['pagamento'];

    
    public function pagamento(){
        return $this->hasOne(Pagamento::class, 'id','pagamento_id');
    }


    public static function create (Array $data) {
        $pagamentoVenda = new PagamentoVenda();
        self::setData($pagamentoVenda, $data);
        return $pagamentoVenda;
    }
    
    public static function edit (PagamentoVenda $pagamentoVenda, Array $data) {
        self::setData($pagamentoVenda, $data);        
        return $pagamentoVenda;
    }
    

    protected static function setData(PagamentoVenda &$pagamentoVenda, $data){
        $pagamentoVenda->pagamento_id = $data['pagamento_id'];
        $pagamentoVenda->venda_id = $data['venda_id'];
        $pagamentoVenda->venda_empresa_id = $data['venda_empresa_id'];
        $pagamentoVenda->venda_cliente_id = $data['venda_cliente_id'];
        $pagamentoVenda->venda_cliente_empresa_id = $data['venda_cliente_empresa_id'];
        $pagamentoVenda->save();
    }
}
