<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
     protected $table = 'hotel'; 

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
 protected $with = ['endereco'];

     public function endereco(){
        return $this->hasOne(Endereco::class, 'id_hotel','id');
    }
}
