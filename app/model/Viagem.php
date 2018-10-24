<?php

namespace App\model;

use App\model\Model;


class Viagem extends Model
{
   protected $table = 'viagem'; 

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    
    
    public static function create (Array $data) {
        $viagem = new Viagem();
        self::setData($viagem, $data);
        return $viagem;
    }
    
    public static function edit (Viagem $viagem, Array $data) {
        self::setData($viagem, $data);
        
        return $viagem;
    }
    

    protected static function setData(Viagem &$viagem, $data){
        $viagem->nome = $data['nome'];
        $viagem->descricao = $data['descricao'];
        $viagem->origem = $data['origem'];
        $viagem->destino = $data['destino'];
        $viagem->viagem_id = $data['viagem_id'];
        $viagem->onibus_id = $data['onibus_id'];
        $viagem->empresa_id = $data['empresa_id'];
        $viagem->quantidade = $data['quantidade'];
        $viagem->valor = $data['valor'];
        $viagem->save();
    }
}
