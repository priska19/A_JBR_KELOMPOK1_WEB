<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function edit(User $user){
        $this->authorize('update',$user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update($user){
        $data = request()->validate([
            'telpon'=> ['required', 'numeric'] ,
            'kecamatan'=>['required', 'string', 'max:255'],
            'alamat'=>['required', 'string', 'max:255'],

        ]);

        $name = request()->validate([
            'name'=>['required', 'string', 'max:255'],
        ]);

        auth()->user()->profile->update($data);
        auth()->user()->update($name);

        if (Auth::user()->role == 'Admin') {
            return redirect()->route('admin.index')->with('success','Successfully edited the profile!');
        }
        else {
            return redirect("/");
        }

        //return redirect("/");
    }
}