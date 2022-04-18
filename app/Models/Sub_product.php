<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_product extends Model
{
    use HasFactory;

    public function Product()
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }
}
