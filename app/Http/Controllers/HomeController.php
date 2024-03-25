<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function homePage(Request $request) {
        // $firstName = "wajahat";
        // $lastName = "Ullah";
        // $age = $request->age;
        // $gender = $request->gender;
        return view('welcome', get_defined_vars());
    }

    function loginPage() {
        return view('login');
    }

    function loginData(Request $request) {
        $email = $request->email;
        $password = $request->password;
        $gender = $request->gender;
        return view('data', get_defined_vars());
    }
}
