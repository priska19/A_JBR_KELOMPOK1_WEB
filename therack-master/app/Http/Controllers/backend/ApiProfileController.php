<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use App\Profile;
use DB;

class ApiProfileController extends Controller
{

    public function getProfile($id){
        $profile = DB::table('profiles')->where('id', $id)->get();
        return Response::json($profile, 201);
    }

    public function updateProfile(request $request, $id){
        $profile = Profile::find($id);
        $profile->id = $request->id;
        $profile->user_id = $request->user_id;
        $profile->telpon = $request->telpon;
        $profile->kecamatan = $request->kecamatan;
        $profile->alamat = $request->alamat;
        $profile->created_at = $request->created_at;
        $profile->updated_at = $request->update_at;
        $profile->save();

        return Response::json($profile, 201);
    }
}
