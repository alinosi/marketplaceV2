<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index() {
        return view('web/market/market', [
            "title" => "Market",
            "assets" => "market",
            "data" => Products::all()->toArray()
        ]);
    }

    public function byId($id) {
        return view('web/market/product', [
            "title" => "Product",
            "assets" => "product",
            "data" => Products::find($id)
        ]);
    }
}
