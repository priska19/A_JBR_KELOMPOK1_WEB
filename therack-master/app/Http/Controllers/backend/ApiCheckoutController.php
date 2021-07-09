<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Order;
use DB;

class ApiCheckoutController extends Controller
{
    public function getAll(){
        $order = DB::table('orders')->get();
        return Response::json($order, 201);
    }

    public function getOrder($id){
        $order = DB::table('orders')->where('id',$id)->get();
        return Response::json($order, 201);
    }

    public function createOrder(request $request){
            $order = DB::table('orders')->get();
            $order = new Order;
            $order->id = $request->id;
            $order->created_at = $request->created_at;
            $order->updated_at = $request->updated_at;
            $order->user_id = $request->user_id;
            $order->name = $request->name;
            $order->cart = $request->cart;
            $order->telpon = $request->telpon;
            $order->kecamatan = $request->kecamatan;
            $order->alamat = $request->alamat;
            $order->save();
    
            return Response::json($product, 201);
    }
}
