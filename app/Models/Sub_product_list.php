<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_product_list extends Model
{
    use HasFactory;

    public function subProduct()
    {
        return $this->hasOne(Sub_product::class, 'id', 'sub_product_id');
    }
    public function subproductCategory()
    {
        return $this->hasOne(Sub_product_category::class, 'id', 'sub_product_category_id');
    }
}
