<?php

namespace App\Model;

use App\model\Model;

class Cliente extends Model {

    protected $table = 'cliente'; 

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $with=['pessoa', 'endereco'];

     public function pessoa(){
        return $this->hasOne(Pessoa::class, 'id','pessoa_id');
    }

    public function endereco(){
        return $this->hasOne(Endereco::class, 'id_tipo', 'id');
    }

 

    public static function create (Array $data) {
        $cliente = new Cliente();
        self::setData($cliente, $data);
        return $cliente;
    }
    
    public static function edit (Cliente $cliente, Array $data) {
        self::setData($cliente, $data);
        
        return $cliente;
    }
    

    protected static function setData(Cliente &$cliente, $data){
        $cliente->empresa_id = $data['empresa_id'];
        $cliente->pessoa_id = $data['pessoa_id'];
                $cliente->save();
    }
    
}
