<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function loginPage() {
        return view('login');
    }
    function registerPage() {
        return view('register');
    }
    function registerData(Request $request) {
        $request->validate([
            'email' => 'required | email',
            'password' => 'required | confirmed' ,
            'password_confirmation' => 'required'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('successMessage', 'Registered Successfully');
    }
    function loginData(Request $request) {
        $request->validate([
            'email' => 'required | email',
            'password' => 'required' ,
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            return redirect('addblog');
        } else {
            return redirect()->back()->with('error', 'Email or Password is Incorrect');
        }
    }
    function logout() {
        Auth::logout();
        return redirect('/login');
    }
}


