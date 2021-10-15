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

class SudoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(auth()->user()->usertype == 'sudo') {
            $sudo = User::all();
            return view('admin', compact('sudo'));
        } else {
            echo "You are not authorized to view this page helaas => ;-)" .' '. auth()->user()->name;
        }

    }
        public function get_invoices(Request $request){        
        $invoice = user::find($request->id)->user_orders;
        dd($invoice);

    //    $explode = explode('->', $invoice);
    //    return $invoice->url().' '.$invoice->id;

    
    }

}