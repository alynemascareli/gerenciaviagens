<?php

namespace App\model;

use App\model\Model;

class TipoPagamento extends Model
{
   protected $table = 'tipo_pagamento'; 

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    
    public static function create (Array $data) {
        $tipo_pagamento = new TipoPagamento();
        self::setData($tipo_pagamento, $data);
        return $tipo_pagamento;
    }
    
    public static function edit (TipoPagamento $tipo_pagamento, Array $data) {
        self::setData($tipo_pagamento, $data);        
        return $tipo_pagamento;
    }
    

    protected static function setData(TipoPagamento &$tipo_pagamento, $data){
        $tipo_pagamento->nome = $data['nome'];
        $tipo_pagamento->descricao = $data['descricao'];
        $tipo_pagamento->empresa_id = $data['empresa_id'];
        $tipo_pagamento->tipo = $data['tipo'];
        $tipo_pagamento->save();
    }
}
