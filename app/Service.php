<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function portfolio(){
        return $this->hasMany('App\Portfolio','service_id','id');
    }
    public function products(){
        return $this->hasMany('App\Products','service_id','id');
    }
}
