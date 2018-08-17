<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
   protected $table = 'pagamento'; 

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

}
