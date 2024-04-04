<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrationController extends Controller
{
    public function register(){
        return view('registration');
    }
    public function registrationData(request $request){
        $email=$request->email;
        $password=$request->password;
        return view('registrationData', get_defined_vars());

    }
}
