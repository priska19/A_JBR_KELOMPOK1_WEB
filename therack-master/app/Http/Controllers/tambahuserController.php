<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class tambahuserController extends Controller
{
    public function form()
    {
        return view('admin.tambahuser');
    }
    public function create()
    {
        $add_user = DB::table('user')->get();
        return view('admin.addproduct');
    }

    protected function validator(array $request)
    {
        return Validator::make($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function store(Request $request){
    
        DB::table('user')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            ]);
        
        return redirect()->route('admin.user')->with('success','Successfully added the user!');
    }
}
