<?php

namespace App\Http\Controllers;

use App\Models\carts;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use LaravelDaily\Invoices\Classes\Party;



class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
  
     public function checkout(Request $request)
    {
    dump(Cart::content());
    if (Cart::content()->isEmpty()) {
        return redirect()->route('carts')->with('Winkelwagen is leeg.');
        //return image where name is empty
    }
    return view('carts', [
        'carts' => Product::all()
    ]);

    }

//this function prints the invoice and puts it in the database in row users_invoices

    public function user_order(Request $request )
    {
        $cart = Cart::content()->where('rowId', $request->rowId);
        if($cart->isNotEmpty()){
            Cart::remove($request->rowId);
    }

    $client = new Party([
        'name' => 'Baking Power' . ' ' . Auth::user()->name . rand(1, 100),
        'custom_fields' => [
            'Name' => 'Peterson',
            'note'        => 'IDDQD',
            'business id' => '365#GG',
        ],
    ]);

    $customer = new Buyer([
        Auth::user()->name,
        'custom_fields' => [

            'naam' => Auth::user()->name,
            'email' => Auth::user()->email,
            'address' => '52.379189, 4.899431.',
            'country' => 'Netherlands',
            'phone' => '+31 6 12345678', 
        ],
    ]);


    $items = [
            // ->title('Service 1')
            // ->description('Your product or service description')
            // ->pricePerUnit(47.79)
            // ->quantity(2)
            // ->discount(10),
        
    ];

    foreach (Cart::content() as $item) {
        array_push($items, (new InvoiceItem())
            ->title($item->name)
            ->description('Lorem ipsum dolor sit amet, consectetur adipiscing elit.
             Aenean ac augue turpis. Proin ut felis ut lorem interdum dignissim nec vitae sem. 
             Pellentesque habitant morbi tristique senectus et netus et.')
            ->pricePerUnit($item->price)
            ->quantity($item->qty)
            ->discount($item->discountRate));
    }

    $notes = [
        'Your Receipt',
        'This is your receipt, you can pick up your order at the selected store',
        '',
        'Thank you for your order'
        
    ];
    $notes = implode("<br>", $notes);

    $invoice = Invoice::make('receipt')
        ->series('BIG')
        // ability to include translated invoice status
        // in case it was paid
        ->status(__('invoices::invoice.paid'))
        ->sequence(667)
        ->serialNumberFormat('{SEQUENCE}/{SERIES}')
        ->seller($client)
        ->buyer($customer)
        ->date(now()->subWeeks(0))
        ->dateFormat('d/m/Y')
        ->payUntilDays(14)
        ->currencySymbol('€')
        ->currencyCode('Euro')
        ->currencyFormat('{SYMBOL}{VALUE}')
        ->currencyThousandsSeparator('.')
        ->currencyDecimalPoint(',')
        ->filename($client->name . ' ' . $customer->name)
        ->addItems($items)
        ->notes($notes)
        ->logo(public_path('vendor/invoices/bakingpowerlogo.png'))
        // You can additionally save generated invoice to configured disk
        ->save('public');

        $user = User::find(Auth::user()->id);
        $user->user_orders = $user->user_orders . '->'. $invoice->url();
        $user->save();
    return $invoice->stream();
    //save invoice in stirage as link
//    return  $invoice->Storage::disk('public')->save($fileLocation);

//save text in database user
    


















    //     Cart::instance('store')->store(Auth::user()->id);
    //  return redirect()->route('carts')->with('success_message', 'Product is toegewezen aan de DB.');

//         foreach (Cart::content() as $item) {
//             $cart = new carts();
//             $cart->user_id = Auth::user()->id; //return user id in db
//             $cart->product_id = $item;

//             $cart->toArray();
//             dump($cart);

//             // $cart->save()->where($this->users::column('user_orders'));
//             return redirect()->route('carts')->with('success_message', 'Product is toegewezen aan de DB.');
        
//  } 

}
    //remove item from cart
    public function remove(Request $request)
    {
        Cart::remove($request->id);
        return redirect()->route('carts')->with('success_message', 'Item is verwijderd uit de winkelwagen.');
    }

   
}


    
