<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();

        return view('profile')->with('user', $user);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit(User $user)
    {
        return view('user/update')->with('user', $user);
    }

    public function update(Request $request, User $user)
    {
        if($request->hasFile('avatar')) {
            $imageName = $request->avatar->getClientOriginalName();
            $request->avatar->storeAs('public', $imageName);
        
            $request->user()->avatar = $imageName;
            $request->user()->save();
        }

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required'
        ]);
        
        $user->update($data);

        

        return redirect('/todos');
    }//php artisan storage:link

    public function destroy($id)
    {
        //
    }
}
