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

      // $product->product_name = $request->name;
      // $product->product_price = $request->price;

      
      // $product->save();
      

      // dump($product);
      return view('stock', [
        'products' => Products::all(),
        'stores' => Stores::all(),
      ]);

    }

    // 
    public function addproduct(request $request)
    {
      $product = new Products;
      $product->product_name = $request->input('product_name');
      $product->product_price = $request->input('product_price');
      $product->product_quantity = $request->input('product_quantity');
      $path = $request->file('product_pictures')->getRealPath();
      $logo = file_get_contents($path);
      $base64 = base64_encode($logo);
      // $image = base64_encode($request->file('product_pictures')->pat‌​h());
      $product->product_pictures = $base64;
      $product->save(); 
      return redirect()->route('stock');
    }
    public function belongs(request $request)
    {
      $product = Products::find($request->input('product_id'));
      $product->stores()->attach($request->input('store_id'));
      return redirect()->route('stock');
    }
   
  }

