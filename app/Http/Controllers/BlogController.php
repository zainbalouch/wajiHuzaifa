<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function homePage() {
        return view('home');
    }
    public function addblog(){
        return view('addblog');
    }
    public function storeblog(request $request){

        $request->validate([
            'title'=>'required',
            'price'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            'description'=>'required',
            'quantity'=>'required|integer|min:1', // Validate quantity as required, integer, and minimum value of 1
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // adjust max size as per your requirements

        ]);

        $blog=new blog();

        $blog->title=$request->title;
        $blog->price=$request->price;
        $blog->description=$request->description;
        $blog->quantity=$request->quantity;
        $blog->img = $this->uploadImage($request, 'img');



        $blog->save();

        return redirect()->back()->with('success','Your post has been published');
    }
    public function viewblog(request $request){
        $blogs=blog::get();

        return view('viewblog',get_defined_vars());
    }
    public function blogdetail(request $request){
        $id=$request->id;
        $blog=blog::where('id',$id)->first();
        return view('blogdetail',get_defined_vars());
    }
}
