<?php

namespace App\Model;

use App\model\Model;

class Endereco extends Model {

    protected $table = 'endereco'; 

    protected $hidden = ['created_at', 'updated_at', 'deleted_at']; 

    public static function create (Array $data) {
        $endereco = new Endereco();
        self::setData($endereco, $data);
        return $endereco;
    }
    
    public static function edit (Endereco $endereco, Array $data) {
        self::setData($endereco, $data);
        
        return $endereco;
    }
    

    protected static function setData(Endereco &$endereco, $data){
        $endereco->tipo = $data['tipo'];
        $endereco->id_tipo = $data['id_tipo'];
        $endereco->endereco = $data['endereco'];
        $endereco->numero = $data['numero'];
        $endereco->bairro = $data['bairro'];
        $endereco->cidade = $data['cidade'];
        $endereco->estado = $data['estado'];
        $endereco->cep = $data['cep'];
        $endereco->complemento = $data['complemento'];
        $endereco->save();
    }
    
}
