<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = 'venda'; 

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

}
