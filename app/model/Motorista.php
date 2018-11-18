<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
    protected $table = 'motorista'; 

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $with=['pessoa'];

    public function pessoa(){
        return $this->hasOne(Pessoa::class, 'id','pessoa_id');
    }

    public static function create (Array $data) {
        $motorista = new Motorista();
        self::setData($motorista, $data);
        return $motorista;
    }
    
    public static function edit (Motorista $motorista, Array $data) {
        self::setData($motorista, $data);
        
        return $motorista;
    }
    

    protected static function setData(Motorista &$motorista, $data){
        $motorista->cnh = $data['cnh'];
        $motorista->pessoa_id = $data['pessoa_id'];
                $motorista->save();
    }
}
