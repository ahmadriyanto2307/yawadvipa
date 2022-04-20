<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function productCategory()
    {
        return $this->hasOne(Product_category::class, 'id', 'product_category_id');
    }
    public function productRegion()
    {
        return $this->hasOne(Product_region::class, 'id', 'product_region_id');
    }
}
