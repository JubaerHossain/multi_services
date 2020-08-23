<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubModule extends Model
{
    function module_action(){
        return $this->hasMany('App\ModuleAction','sub_module_id','id');
    }
}
