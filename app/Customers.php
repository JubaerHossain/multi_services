<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    public function country(){
        return $this->belongsTo('App\Country','country_id', 'id');
    }
}
