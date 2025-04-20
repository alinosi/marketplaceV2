<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ProductsController extends Controller
{
    public function index() {
        return view('web/market/market', [
            "title" => "Market",
            "assets" => "market",
            "data" => Product::all()
        ]);
    }

    public function byId( Product $product) {
        return view('web/market/product_detail', [
            "title" => "Product",
            "assets" => "product",
            "data" => $product
        ]);
    }

//     public function categories ( Categories $category) {
//         return [ "data" => $category ];
//     }

}
