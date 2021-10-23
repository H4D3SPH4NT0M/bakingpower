<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store_name;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;


class StockController extends Controller
{
    public function index()
    {
    //return back all columns -> products from database

      //return stock blade with all products and store names
        $products = Product::all();
        $store_names = Store_name::all();
        return view('stock', compact('products', 'store_names'));

      
    }
 
}
