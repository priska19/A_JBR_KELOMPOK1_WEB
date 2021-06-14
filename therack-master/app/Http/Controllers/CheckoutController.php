<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\Cart;
use App\Order;
use App\Stock;
use DB;

class CheckoutController extends Controller
{
    public function index()
    {
        if(!Session::has('cart')){
            return view('cart.index');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        $user = Auth::user();
        return view('checkout.index',compact('total','user'));
    }

    public function checkout(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|string',
            'telpon' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
            'kecamatan' => 'required|string',
            'alamat' => 'required',
            //'address' => 'required',
            // 'zipcode' => 'required|digits:5',
            // 'creditcardnumber' => 'required|digits:16',
            // 'expiremonth' => 'required|digits:2',
            // 'expireyear' => 'required|digits:2',
            // 'cvc' => 'required|digits:3',
        ]);
        
        if(!Session::has('cart')){
            return view('cart.index');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        foreach ($cart->items as $order) {
            Stock::where('product_id',$order['product_id'])
                    ->where('name',$order['size'])
                    ->decrement('quantity');
        }
        

        $order = new Order();
        $order->cart = serialize($cart); 
        $order->alamat = $request->input('alamat');
        $order->name = $request->input('name');
        $order->telpon = $request->input('telpon');
        $order->kecamatan = $request->input('kecamatan');
        // $order->alamat = $request->input('country');
        // $order->zipcode = $request->input('zipcode');
        
        Auth::user()->orders()->save($order);

        Session::forget('cart');
        return redirect()->route('home.index')->with('success','Successfully purchased the products!');
    }
}