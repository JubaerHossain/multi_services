<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'out_stock',
    ];
    // PrimaryKey
    protected $primaryKey = 'id';

    public function category(){
        return $this->belongsTo('App\Categories','category_id', 'id');
    }
    public function sales(){
        return $this->hasMany('App\Sales','product_id','id');
    }
    public function images(){
        return $this->hasMany('App\ProductImage','product_id','id');
    }
    public function service(){
        return $this->belongsTo('App\Service','service_id', 'id');
    }
}
