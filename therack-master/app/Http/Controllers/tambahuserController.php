<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use DB;


class tambahuserController extends Controller
{
    public function form()
    {
        return view('admin.tambahuser');
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
        $user = new User;
        //$user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'Admin';
        $user->save();
        
        $id = $user->id;

        DB::table('profiles')->insert([
            'user_id'=>$id,
            ]);

        return redirect()->route('admin.user')->with('success','Successfully added the user!');
    }
}
