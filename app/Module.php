<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    function sub_module(){
        return $this->hasMany('App\SubModule','module_id','id');
    }
}
