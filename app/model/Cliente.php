<?php

namespace App\Model;

use App\model\Model;

class Cliente extends Model {

    protected $table = 'cliente'; 

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

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
        $cliente->nome = $data['nome'];
        $cliente->email = $data['email'];
        $cliente->telefone = $data['telefone'];
        $cliente->cpf = $data['cpf'];
        $cliente->datanascimento = $data['datanascimento'];

        $cliente->save();
    }
    
}
