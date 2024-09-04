<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class Admin extends Controller
{
    function login(Request  $req){
            $email=$req->input('email');    
            $password=$req->input('password');
            $userType=$req->input('userType');
            
            if(!empty($email) and !empty($email) and !empty($userType) ){
                // ======Validation==here=====
                Session::put('userType', $userType);
                return redirect('/dashboard');
            }else{
                return redirect('/login');
            }
    }


}
