<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

class AdminController extends Controller
{
    //
    public function adminLoginForm(){
        return view('backend.admin.admin_login');
        //return "ok";
    }

    public function admin_Login(Request $req){
  
        
        $this->validate($req,
                              [

                                  'email'=>'required',//
                                  'password'=>'required'

                              ],
                              [
                                  'email.required'=>'Please provide email**',
                                  'password.required'=>'Please provide password**'
                              ]
                          );
                          
        if(Auth::guard('admin')->attempt(['email'=>$req->email,'password'=>$req->password])){
            return redirect('/admin/dashboard');

        }
        else{
            session()->flash('msg','Invalid entries!');
            return redirect()->back();
        }
       
        //return "ok";
    }

    public function custom_logout(){
        session()->flush();
        //return "logout hoisa";
        return redirect()->route('login');
    }
}
