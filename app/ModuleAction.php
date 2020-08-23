<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission; 
class ModuleAction extends Model
{
    function module_permission(){
        return $this->hasOne(Permission::class,'action_id','id');
    }
}
