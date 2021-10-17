<?php

namespace App\Http\Controllers;
use App\Models\Sudo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\InvoiceItem;




use Illuminate\Http\Request;
use Svg\Tag\Rect;

class SudoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if(auth()->user()->usertype == 'sudo') {
            $sudo = User::all();
            return view('admin', compact('sudo'));
            $invoice = user::find($request->id)->user_orders;
            $invoice = explode(',', $invoice);
        } else {
            echo "You are not authorized to view this page helaas => ;-)" .' '. auth()->user()->name;
        }

    }
    //get invoices knop
        public function get_invoices(Request $request){   
                 
        $invoice = user::find($request->id)->user_orders;
        $invoice = explode('->', $invoice);
        $invoice = array_filter($invoice);
        $test = explode('/', $invoice[0]);
        return response()->download(public_path().'/storage/'. $test[count($test)-1]);
    
    }
    public function order_complete(Request $requist){
        // if order finished set 1 in user_orders column
        $user = User::find($requist->id);
        $user-> ordercomplete = 1;
        $user->save();
        return redirect()->route('carts')->with('message', 'Order has now been finished and removed');




        }


    }

