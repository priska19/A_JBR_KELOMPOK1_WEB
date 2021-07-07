<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use App\User;
use DB;

class ApiUserController extends Controller
{
    public function getAll(){
        $user = DB::table('users')->get();
        return Response::json($user, 201);
    }

    public function getUser($id){
        $user = DB::table('users')->where('id',$id)->get();
        return Response::json($user, 201);
    }

    public function createUser(request $request){
        $user = DB::table('users')->get();
        $user = new User;
        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email_verified_at = $request->email_verified_at;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->remember_token = $request->remember_token;
        $user->created_at = $request->created_at;
        $user->updated_at = $request->updated_at;
        $user->save();

        return Response::json($user, 201);
    }
}
