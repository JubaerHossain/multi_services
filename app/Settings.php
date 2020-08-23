<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    public function currencySymbol(){
        return $this->belongsTo('App\Currency','currency', 'id');
    }

    public function color(){
        return $this->belongsTo('App\Color','color', 'id');
    }
}
