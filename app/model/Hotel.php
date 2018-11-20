<?php

namespace App\model;

use App\model\Model;

class Hotel extends Model
{
     protected $table = 'hotel'; 

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    
    
    public static function create (Array $data) {
        $hotel = new Hotel();
        self::setData($hotel, $data);
        return $hotel;
    }
    
    public static function edit (Hotel $hotel, Array $data) {
        self::setData($hotel, $data);
        
        return $hotel;
    }
    

    protected static function setData(Hotel &$hotel, $data){
        $hotel->nome = $data['nome'];
        $hotel->proprietario = $data['proprietario'];
        $hotel->telefone = $data['telefone'];
        // $hotel->endereco = $data['endereco'];
        // $hotel->numero = $data['numero'];
        // $hotel->bairro = $data['bairro'];
        // $hotel->cidade = $data['cidade'];
        // $hotel->estado = $data['estado'];
        $hotel->capacidade = $data['capacidade'];
        $hotel->acomodacao = $data['acomodacao'];
        $hotel->observacao = $data['observacao'];
        $hotel->save();
    }


}
