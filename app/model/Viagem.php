<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Viagem extends Model
{
   protected $table = 'viagem'; 

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

}
