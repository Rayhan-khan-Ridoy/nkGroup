<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

class AgentController extends Controller
{
    //
    public function agentLoginForm(){
        return view('backend.agent.agent_login');
        //return "ok";
    }

    public function agent_Login(Request $req){
  
        
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
       // dd($req->all())              ;  
        if(Auth::guard('agent')->attempt(['email'=>$req->email,'password'=>$req->password])){
            return redirect('/agent/dashboard');
            

        }
        else{
            session()->flash('msg','Invalid entries!');
            return redirect()->back();
        }
       
        //return "ok";
    }

    public function custom_logout2(){
        session()->flush();
        return redirect()->route('login');
    }

    
}
