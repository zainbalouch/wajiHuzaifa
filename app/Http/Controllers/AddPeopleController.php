<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\people;

class AddPeopleController extends Controller
{
    public function addPeople(request $request){
        $id=$request->id;
        $people=people::where('id',$id)->first();
        return view('addPeople',get_defined_vars());
    }
    public function peopleData(request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required | email',
            'gender'=>'required',
            'country'=>'required',
        ]);

       $people=new people();

       $name=$request->name;
       $people->name=$name;

       $email=$request->email;
       $people->email=$email;

       $condition=$request->condition;
       if(isset($condition)){
        $people->condition="disabled";
       }else{
        $people->condition="Perfect";
       }
       
       

       $gender=$request->gender;
       $people->gender=$gender;

       $country=$request->country;
       $people->country=$country;

       $people->save();

       
       return redirect()->back();
    }

    public function list_People(){
        $list_People=People::get();
        return view('listPeople',get_defined_vars());
    }
    public function update_people(request $request){
        $id=$request->id;
        $people=People::where('id',$id)->first();
        
        $name=$request->name;
        $people->name=$name;
 
        $email=$request->email;
        $people->email=$email;
 
        $condition=$request->condition;
        if(isset($condition)){
         $people->condition="disabled";
        }else{
         $people->condition="Perfect";
        }
        
        
 
        $gender=$request->gender;
        $people->gender=$gender;
 
        $country=$request->country;
        $people->country=$country;
 
        $people->save();

        return redirect('/list_People')->with('updatemsg','User Data has been Updated');

    }
    public function deletepeople(request $request){
        People::where('id', $request->id)->delete();
        return redirect()->back()->with('deletemeassage','User has been deleted succefully');
    }
}