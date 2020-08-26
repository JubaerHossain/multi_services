<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function service(){
        return $this->belongsTo('App\Service','service_id', 'id');
    }
}
