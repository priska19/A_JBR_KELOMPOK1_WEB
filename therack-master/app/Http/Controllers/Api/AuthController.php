<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\User;

class AuthController extends Controller
{
    public function signup(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],            
            'email'=>['required', 'email', 'string'],
            'password'=>['required', 'string','min:8', 'confirmed'],
        ]);

        $user = new User([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role' => 'Customer',
        ]);

        $user->save();
        return response()->json([
            'success' => true,
            'message' => 'Berhasil Registrasi'
        ]);
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email'=>['required', 'email', 'string'],
            'password'=>['required', 'string'],
            'remember_me'=>['boolean']
        ]);
        if ($validator->fails()){
            return response()
            ->json([
                'error'=>true,
                'validations'=>$validator->errors()
            ], 422);
        }
        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials)){
            return response()
            ->json([
                'error'=>true,
                'message'=>'Email atau Password salah'
            ], 401);
        }
        $user =auth()->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
            $token->save();
            return response()
            ->json([
                'success'=>true,
                'token'=>[
                    'accessToken'=>$tokenResult->accessToken,
                    'expiresAt'=>$tokenResult->token->expires_at
                ]
            ]);
    }
    public function logout(){
        auth()->user()->token()->revoke();
 
        return response()->json([
            'success' => true,
            'message' => 'Berhasil logout'
        ]);
    }
    public function user(Request $request){
        return response()->json($request->user());
    }
}
