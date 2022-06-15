<?php

namespace App\Http\Controllers;
use App\Models\User;

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
        $user=User::all(); 
        return view('home')->with('user',$user);;
    }

    public function custom_logout3(){
        session()->flush();
        //return "logout hoisa";
        return redirect()->route('login');
    }
}
