<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    function addPersonPage() {
        return view('addPerson');
    }

    function addPerson(Request $request) {
        $people = new People();
        $people->name = $request->name;
        $people->email = $request->email;
        $people->save();
        return redirect()->back();
    }
}
