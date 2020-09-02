<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsAttribute extends Model
{
    protected $fillable = [
        'product_id', 'stock', 'size', 'sku', 'status',
    ];
}
