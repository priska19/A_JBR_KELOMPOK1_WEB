<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

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

        return redirect("/");
    }
}