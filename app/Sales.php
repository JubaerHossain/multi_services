<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    public function sale_item(){
        return $this->hasMany('App\ProductSale','sale_id','id');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
