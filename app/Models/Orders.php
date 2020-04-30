<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Orders extends Model
{
    protected $table = 'orders';
    protected $guarded = ['*'];

    public function products() {

    	return $this->belongsTo(Product::class, 'orders_product_id');
    }
}
