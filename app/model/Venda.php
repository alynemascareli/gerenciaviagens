<?php

namespace App\model;

use App\model\Model;

class Venda extends Model
{
    protected $table = 'venda'; 

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $with = ['cliente', 'viagem','tipopagamento'];

    public function cliente(){
        return $this->hasOne(Cliente::class, 'id','cliente_id');
    }

    public function viagem(){
        return $this->hasOne(Viagem::class, 'id','viagem_id');
    }

    public function tipopagamento(){
        return $this->hasOne(TipoPagamento::class, 'id','tipo_pagamento_id');
    }

    
    
    public static function create (Array $data) {
        $venda = new Venda();
        self::setData($venda, $data);
        return $venda;
    }
    
    public static function edit (Venda $venda, Array $data) {
        self::setData($venda, $data);
        
        return $venda;
    }
    

    protected static function setData(Venda &$venda, $data){
        $venda->cliente_id = $data['cliente_id'];
        $venda->viagem_id = $data['viagem_id'];
        $venda->pagamento_id = $data['pagamento_id'];
        $venda->confirmacao = $data['confirmacao'];
        $venda->empresa_id = $data['empresa_id'];
        $venda->cliente_empresa_id = $data['cliente_empresa_id'];
        $venda->viagem_empresa_id = $data['viagem_empresa_id'];
        $venda->tipo_pagamento_id = $data['tipo_pagamento_id'];
        $venda->tipo_pagamento_empresa_id = $data['tipo_pagamento_empresa_id'];


        $venda->save();
    }

}
