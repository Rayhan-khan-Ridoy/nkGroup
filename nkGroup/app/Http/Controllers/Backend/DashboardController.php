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
}
