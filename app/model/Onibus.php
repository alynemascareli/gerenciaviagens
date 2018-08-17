<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Onibus extends Model
{
    protected $table = 'onibus'; 

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

}
