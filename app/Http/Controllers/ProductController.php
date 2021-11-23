<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Stores;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        dump(Cart::content());
        return view('products', [
            'product' => Products::all(),
            'stores' => Stores::all()
        ]);
        
    }
 

    public function addtocart(Request $request){
    
        $product = Products::findOrFail($request->input('id'));
        Cart::add( 
            $product->id,
            $product->product_name,
            $request->input('product_quantity'),
            $product->product_price,
        );

    return redirect()->route('carts')->with('message', 'Successfully added');

    }

    //filter store name
    public function filterStore(Request $request){
        $store = Stores::find($request->input('store_id'));
        //return redirect()->route('products')->with(['products', $store->products()], ['store', $store], ['stores' => Stores::all()]);
        return view('products', [
            'product' => $store->products,
            'stores' => Stores::all(),
            'store' => $store
            
        ]);
    }




// add product to cart with session and redirect to cart
    // public function addToCart(Request $request, $id)
    // {
    //     $product = Products::find($id);
    //     $oldCart = session()->has('cart') ? session()->get('cart') : null;
    //     $cart = new Cart($oldCart);
    //     $cart->add($product, $product->id);
    //     $request->session()->put('cart', $cart);
    //     return redirect()->route('shoppingCart');
    // }
    // public function cart()
    // {
    //     if (!session()->has('cart')) {
    //         return view('shopping-cart');
    //     }
    //     $oldCart = session()->get('cart');
    //     $cart = new Cart($oldCart);
    //     return view('shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    // }
    // public function reduceByOne($id)
    // {
    //     $oldCart = session()->has('cart') ? session()->get('cart') : null;
    //     $cart = new Cart($oldCart);
    //     $cart->reduceByOne($id);
    //     if (count($cart->items) > 0) {
    //         session()->put('cart', $cart);
    //     } else {
    //         session()->forget('cart');
    //     }
    //     return redirect()->route('shoppingCart');
    // }
    // public function removeItem($id)
    // {
    //     $oldCart = session()->has('cart') ? session()->get('cart') : null;
    //     $cart = new Cart($oldCart);
    //     $cart->removeItem($id);
    //     if (count($cart->items) > 0) {
    //         session()->put('cart', $cart);
    //     } else {
    //         session()->forget('cart');
    //     }
    //     return redirect()->route('shoppingCart');
    // }
    //end cart functions


    
    
    // public function __construct()
    // {
    // $this->middleware('auth');
    // }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
    

}