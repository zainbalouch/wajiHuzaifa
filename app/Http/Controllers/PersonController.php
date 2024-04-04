<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    function addPersonPage(Request $request) {
        $id = $request->id;
        $people = People::where('id', $id)->first();
        return view('addPerson', get_defined_vars());
    }

    function addPerson(Request $request) {
        $request->validate([
            'email' => 'email | required | unique:people'

        ]);
        $people = new People();
        $people->name = $request->name;
        $people->email = $request->email;
        $people->image = $this->uploadImage($request, 'image');

        if (isset($request->isDisabled)) {
            $people->isDisabled = 1;
        } else {
            $people->isDisabled = 0;
        }
        $people->save();
        return redirect()->back();
    }



    function updatePerson(Request $request) {
        $id = $request->id;
        $people = People::where('id', $id)->first();
        $people->name = $request->name;
        $people->email = $request->email;
        $people->image = $this->uploadImage($request, 'image');
        if (isset($request->isDisabled)) {
            $people->isDisabled = 1;
        } else {
            $people->isDisabled = 0;
        }
        $people->save();
        return redirect('list_people');
    }

    function deletePerson(Request $request) {
        $id = $request->id;
        People::where('id', $id)->delete();
        // Session::flash('deleteMessage', 'User has been deleted successfully');
        return redirect()->back()->with('deleteMessage', 'User has been deleted successfully');
    }

    function listPeoplePage() {
        $people_list = People::get();
        return view('listPeople', get_defined_vars());
    }
}
