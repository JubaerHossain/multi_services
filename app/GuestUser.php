<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuestUser extends Model
{
    public function sale_item(){
        return $this->hasMany('App\GuestOrder','user_id','id');
    }
}
