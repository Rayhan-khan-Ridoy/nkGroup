<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function adminDashboard(){
        
            $agent=Agent::all(); 
            $admin=Admin::all(); 
            $user=User::all(); 
             //return "ok";
            return view('backend.dashboard.admin_dashboard')->with('agent',$agent)
                                                            ->with('admin',$admin)
                                                            ->with('user',$user);
        }
    public function agentDashboard(){

        $agent=Agent::all(); 
         //return "ok";
        return view('backend.dashboard.agent_dashboard')->with('agent',$agent);
    }

    //admin search
    public function searchAdmin(Request $req){


        if($req->search != ""){
         $searchVar=$req->search; //for see what is searching in search box
          //dd($search);
          $admin = Admin::where('name',"LIKE", "%{$req->search}%")->get();
          $agent = Agent::where('name',"LIKE", "%{$req->search}%")->get();
          $user = User::where('name',"LIKE", "%{$req->search}%")->get();

          return view('backend.dashboard.admin_dashboard')
          ->with("searchVar",$searchVar)
          ->with("user",$user)
          ->with("agent",$agent)
          ->with("admin",$admin);
        }
        else {
          return back();
        }
}
}
