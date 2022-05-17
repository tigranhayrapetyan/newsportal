<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;
use App\Models\Multipic;
use Auth;


class MultiPictureController extends Controller
{

    //Middlewere 
    public function __construct(){
        $this->middleware('auth');
    }

    //Select all datas from database and send to .index page 
    public function Multipic(){

        $images = Multipic::all();

        return view('admin.multipic.index',compact('images'));

    }


    public function StoreImg(Request $request){

        $image = $request->file('multi_image');

        //start of foreache
        foreach($image as $multi_img){

        $name_gen = hexdec(uniqid()).'.'.$multi_img->getClientOriginalExtension();
        Image::make($multi_img)->resize(300,200)->Save('image/multi/'.$name_gen);
        $last_img = 'image/multi/'.$name_gen;


        //Upload     insert
        Multipic::insert([
            'image' => $last_img, 
            'created_at' => Carbon::now()
        ]);
        } //end of foreache

        return Redirect()->back()->with('success', 'Brand Inserted Successfully');
    }


//Admin User logout method 
    public function Logout(){
        Auth::logout();
        return Redirect()->route('login')->with('success', 'User Logout'); 
    }







}
