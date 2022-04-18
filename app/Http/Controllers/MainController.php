<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product_category;
use App\Models\Sub_product;
use App\Models\Sub_product_category;
use App\Models\Sub_product_list;
use App\Models\Sub_product_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{
    public function __construct()
    {
        // Get Data
        $product = Product::All()->sortBy([
            ['product_category_id', 'desc'],
            ['name'],
        ]);

        // Share Data
        view::share('product', $product);
    }

    public function home()
    {
        return view('home');
    }

    public function product_list($product_category, $product_name)
    {
        $product = Product::where('name', $product_name)->first();
        $product_id = $product->id;
        // dd($product_id);
        return view('product_list', [
            'product_list' => Sub_product::where('product_id', $product_id)->get(),
            'page_title_category' => $product_category,
            'page_title_product' => $product_name
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
