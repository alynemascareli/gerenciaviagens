<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model as M;
use Illuminate\Database\Eloquent\SoftDeletes;

class Model extends M {
    
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    
}
