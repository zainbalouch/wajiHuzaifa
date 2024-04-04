<?php

namespace App\Http\Controllers;

use App\Models\clients;
use Illuminate\Http\Request;

class AddingPeopleController extends Controller
{
    public function peopleadd(request $request){
        $id=$request->id;
        $client=clients::where('id',$id)->first();
        return view('addingpeople', get_defined_vars());

    }
    public function storepeople(request $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:clients',
            'phone' => 'required',
            'dob' => 'required|date',
            'address' => 'required',
        ]);

        $client=new clients();
        $client->name=$request->name;
        $client->email=$request->email;
        $client->phone=$request->phone;
        $client->dob=$request->dob;
        $client->address=$request->address;

        $client->save();


        return redirect('/people-list')->with('success','Data has been Stored Successfully');
    }
    public function peoplelist(){
        $clients_list=clients::get();
        return view('people-list',get_defined_vars(),);
    }
    public function peopleupdate(request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:clients,email,'.$request->id,           
            'phone' => 'required',
            'dob' => 'required|date',
            'address' => 'required',
        ]);
        $id=$request->id;
        $client=clients::where('id',$id)->first();

        $client->name=$request->name;
        $client->email=$request->email;
        $client->phone=$request->phone;
        $client->dob=$request->dob;
        $client->address=$request->address;

        $client->save();

        return redirect('/people-list')->with('update-success','Data has been Updated Successfully');
    }
    public function peopledelete(request $request){
        $id=$request->id;
        clients::where('id',$id)->delete();
        return redirect()->back()->with('deleted','User has been deleted Successfully');
    }
}
