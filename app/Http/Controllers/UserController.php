<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;

class UserController extends Controller
{
    public function edit()
    {
        if(Auth::user()) {
            $user = User::find(Auth::user()->id);

            if($user) {
                return view('user.edit')->withUser($user);
            } else {
                redirect()->back();
            }
        } else {
            redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $user = User::find(Auth::user()->id);

        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required | email'
        ]);

        if($user) {
            $user->name = $request['name'];
            $user->email = $request['email'];

            $user->save();
        } else {
            redirect()->back();
        }
    }


}
