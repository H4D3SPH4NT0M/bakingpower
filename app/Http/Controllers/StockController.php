<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Stores;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;


class StockController extends Controller
{
    public function index(request $request)
    {   
      $products = Products::all();

      // foreach ($products as $product) {
      //   $product->stores()->attach(2);
      // }
      // $stores = Stores::all();

      // $product->name = $request->name;
      // $product->price = $request->price;

      // 
      // $product->save();

      // dump($product);
      return view('stock', [
        'products' => Products::all(),
        'stores' => Stores::all(),
      ]);

    

    }
}
