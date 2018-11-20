<?php

namespace App\model;

use App\model\Model;


class HotelViagem extends Model
{
   protected $table = 'hotel_has_viagem'; 

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    
    
    public static function create (Array $data) {
        $hotelViagem = new HotelViagem();
        self::setData($hotelViagem, $data);
        return $hotelViagem;
    }
    
    public static function edit (HotelViagem $hotelViagem, Array $data) {
        self::setData($hotelViagem, $data);
        
        return $hotelViagem;
    }
    

    protected static function setData(HotelViagem &$hotelViagem, $data){
        $hotelViagem->hotel_id = $data['hotel_id'];
        $hotelViagem->viagem_id = $data['viagem_id'];
        $hotelViagem->empresa_id = $data['empresa_id'];
     
        $hotelViagem->save();
    }
}
