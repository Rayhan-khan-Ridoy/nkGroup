<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function adminLoginForm(){
        return view('backend.admin.admin_login');
        //return "ok";
    }
}
