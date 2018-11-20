<?php

namespace App\model;

use App\model\Model;


class OnibusViagem extends Model
{
   protected $table = 'onibus_has_viagem'; 

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    
    
    public static function create (Array $data) {
        $onibusViagem = new OnibusViagem();
        self::setData($onibusViagem, $data);
        return $onibusViagem;
    }
    
    public static function edit (OnibusViagem $onibusViagem, Array $data) {
        self::setData($onibusViagem, $data);
        
        return $onibusViagem;
    }
    

    protected static function setData(onibusViagem &$onibusViagem, $data){
        $onibusViagem->onibus_id = $data['onibus_id'];
        $onibusViagem->viagem_id = $data['viagem_id'];
        $onibusViagem->empresa_id = $data['empresa_id'];
     
        $onibusViagem->save();
    }
}
