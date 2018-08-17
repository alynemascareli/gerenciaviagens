<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
     protected $table = 'empresa'; 

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

}
