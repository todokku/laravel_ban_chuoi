<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = [];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;

    const HOT_ON = 1;
    const HOT_OFF = 0;

    protected $status = [
        1 => [
            'name' => 'Public',
            'class' => 'btn-success',
        ],

        0 => [
            'name' => 'Private',
            'class' => 'btn-danger',
        ],
    ];

    protected $hot = [
        1 => [
            'name' => 'Có',
            'class' => 'btn-success',
        ],

        0 => [
            'name' => 'Không',
            'class' => 'btn-danger',
        ],
    ];

    public function getStatus() {
        return array_get($this->status, $this->product_active);
    }

    public function getHot() {
        return array_get($this->status, $this->product_hot);
    }

    public function formatPrice($number) {
        $number = intval($number);
        return $number = number_format($number,0,',','.')." đ";
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'product_category_id');
    }


}
