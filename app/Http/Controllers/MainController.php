<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product_region;
use App\Models\Product_category;
use App\Models\Sub_product;
use App\Models\Sub_product_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{
    public function __construct()
    {
        // Get Data
        $product_region = Product_region::All();

        // Share Data
        view::share('product_region', $product_region);
    }

    public function home()
    {
        return view('home');
    }

    public function product($product_category, $product_region)
    {
        $product_categories = Product_category::where('slug', $product_category)->first();
        $product_regions = Product_region::where('slug', $product_region)->first();
        $product_list = Product::where('product_region_id', $product_regions->id)->get();
        // dd($product_list);
        return view('product_list', [
            'product_list' => $product_list,
            'category' => $product_categories,
            'region' => $product_regions
        ]);
    }
    public function product_detail($id, product $product)
    {
        $product_list = Sub_product::where('product_id', $id)->get();
        $product_category = sub_product_category::all();
        return view('product_detail', [
            'product_list' => $product_list,
            'product_category' => $product_category,
            'region' => $product->name
        ]);
    }


    public function product_jateng()
    {
        return view('product_jateng');
    }

    public function product_jogja()
    {
        return view('product_jateng');
    }
}
