<?php

namespace App\model;

use App\model\Model;

class Onibus extends Model
{
    protected $table = 'onibus'; 

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];


    
    
    public static function create (Array $data) {
        $onibus = new Onibus();
        self::setData($onibus, $data);
        return $onibus;
    }
    
    public static function edit (Onibus $onibus, Array $data) {
        self::setData($onibus, $data);
        
        return $onibus;
    }
    

    protected static function setData(Onibus &$onibus, $data){
        $onibus->placa = $data['placa'];
        $onibus->empresa = $data['empresa'];
        $onibus->descricao = $data['descricao'];
        $onibus->empresa_id = $data['empresa_id'];
        $onibus->save();
    }
}
