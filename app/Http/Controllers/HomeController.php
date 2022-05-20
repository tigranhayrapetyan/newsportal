<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;
use App\Models\Slider;
use Auth;

class HomeController extends Controller
{
 public function HomeSlider(){
     $sliders = Slider::latest()->get();
     return view('admin.slider.index', compact('sliders'));
 }

 public function AddSlider(){
    return view('admin.slider.create');
}




public function StoreSlider(Request $request){

    $validatedData = $request->validate([
        'title' => 'required|unique:sliders|min:3',
        'description' => 'required',
        'image' => 'required|mimes:jpg.jpeg,png',
    ],
    [
        //to show personal message in validation
        'title.required' => 'Please imput Title',
        // 'brand_name.unique:brands' => 'The Brand name is already exists',
    ]);


    $slider_image = $request->file('image');

    

    
    $name_gen = hexdec(uniqid()).'.'.$slider_image->getClientOriginalExtension();
    Image::make($slider_image)->resize(1920,1088)->Save('image/slider/'.$name_gen);
    $last_img = 'image/slider/'.$name_gen;


    //Upload     insert
    Slider::insert([
        'title' => $request ->title,
        'description' => $request ->description,  
        'image' => $last_img,
        'created_at' => Carbon::now()
    ]);
    
    return Redirect()->route('home.slider')->with('success', 'Slider Added Successfully');
}



}
