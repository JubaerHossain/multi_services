<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSale extends Model
{
    protected $fillable = [
        'sale_id', 'product_id',
    ];
    public function product(){
        return $this->belongsTo('App\Products','product_id','id');
    }
}
