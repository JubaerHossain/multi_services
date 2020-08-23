<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Backeup extends Model
{
    public function user(){
        return $this->belongsTo('App\User','updated_by','id');
    }
}
