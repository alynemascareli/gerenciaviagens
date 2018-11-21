<?php

namespace App\Model;

use App\model\Model;

class Pessoa extends Model {

    protected $table = 'pessoa'; 

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public static function create (Array $data) {
        $pessoa = new Pessoa();
        self::setData($pessoa, $data);
        return $pessoa;
    }
    
    public static function edit (Pessoa $pessoa, Array $data) {
        self::setData($pessoa, $data);
        
        return $pessoa;
    }
    
    protected static function setData(Pessoa &$pessoa, $data){
        $pessoa->nome = $data['nome'];
        $pessoa->email = $data['email'];
        $pessoa->telefone = $data['telefone'];
        $pessoa->cpf = $data['cpf'];
        $pessoa->data_nascimento = $data['data_nascimento'];
        $pessoa->rg = $data['rg'];
        $pessoa->data_expedicao = $data['data_expedicao'];

        $pessoa->save();
    }
    
}
