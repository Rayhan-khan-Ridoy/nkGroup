<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\testMail;
use Illuminate\Support\Facades\Mail;


class mailController extends Controller
{
    public function sendMail(){
        $details = ["tittle"=>"Email verification",
                    "body"=>"....___body__test purpose___body__...
                    your verification code is:1234"
                    ];
        //Mail::to(["kredoy416@gmail.com","tanvir.ahmed@aiub.edu"])->send(new testMail($details));
        Mail::to("kredoy416@gmail.com")->send(new testMail($details));
       // return response()->json(["mail"=>"mail sent succesfully!"]);
        return "mail sent succesfully!";
       
    }
    
}