<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use App\Product;
use DB;

class ApiProductController extends Controller
{
    public function getAll(){
        $product = DB::table('products')->get();
        return Response::json($product, 201);
    }

    public function getProd($id){
        $product = DB::table('products')->where('id',$id)->get();
        return Response::json($product, 201);
    }

    // public function createProd(request $request){
    //     $product = DB::table('products')->get();
    //     $product = new Product;
    //     $product->id = $request->id;
    //     $product->name = $request->name;
    //     $product->price = $request->price;
    //     $product->image = $request->image;
    //     $product->category = $request->category;
    //     $product->stock = $request->stock;
    //     $product->created_at = $request->created_at;
    //     $product->updated_at = $request->updated_at;
    //     $product->save();

    //     return Response::json($product, 201);
    // }

    // public function updateProd(request $request, $id){
    //    $product = Product::find($id);
    //     $product->id = $request->id;
    //     $product->name = $request->name;
    //     $product->price = $request->price;
    //     $product->image = $request->image;
    //     $product->category = $request->category;
    //     $product->stock = $request->stock;
    //     $product->save();

    //     return Response::json($product, 201);
    // }

    // public function deleteProd($id){
    //     $product = Product::find($id);
    //     $product->delete();

    //     return Response::json($product, 201);
    // }
}
