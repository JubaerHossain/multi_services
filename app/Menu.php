<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'position'
    ];
   
    public function sub_menu(){
        return $this->hasMany('App\Submenu','menu_id','id');
    }
    public function page(){
        return $this->hasOne('App\Page','id','page_id');
    }
}
