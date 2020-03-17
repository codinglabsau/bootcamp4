<?php

namespace App\Http\Controllers;
use App\Course;
use App\User;
use Auth;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Auth::user()->courses()->sync([1,3,5,7,9]);
        Course::find(11)->users()->sync([1]);
        return view('home');
    }
}
