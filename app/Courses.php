<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    public function trainer(){
        return $this->belongsTo('App\User','trainer_id', 'id');
    }
    public function mentor(){
        return $this->belongsTo('App\User','mentor_id', 'id');
    }
}
