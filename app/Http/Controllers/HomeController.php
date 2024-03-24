<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function homePage() {
        return view('welcome');
    }

    function aboutPage() {
        return view('about');
    }
}
