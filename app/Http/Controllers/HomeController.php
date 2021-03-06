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
        'image' => 'required',
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


public function SliderEdit($id){

    $sliders = Slider::find($id);

    return view ('admin.slider.edit', compact('sliders'));
}




public function SliderUpdate(Request $request, $id){

    $validatedData = $request->validate([
        'title' => 'required|min:3',
    ],
    [
        //to show personal message in validation
        'title.required' => 'Please imput some Title',
    ]);

    $old_image = $request->old_image;
    $slider_image = $request->file('image');


    if($slider_image){

                // for creating validation of unique  photo
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($slider_image->getClientOriginalExtension());
            $img_name = $name_gen.'.'.$img_ext;
            $up_location = 'image/slider/';
            $last_img = $up_location.$img_name;
            $slider_image->move($up_location, $img_name);

            //Upload     insert
            
            unlink($old_image);

            Slider::find($id)->update([
                'title' => $request ->title, 
                'description' => $request ->description,
                'image' => $last_img,
                'created_at' => Carbon::now()
            ]);

            return Redirect()->route('home.slider')->with('success', 'Slider Updated Successfully');

    }else{
        
             Slider::find($id)->update([
                'title' => $request ->title, 
                'description' => $request ->description, 
                'created_at' => Carbon::now()
            ]);

            return Redirect()->route('home.slider')->with('success', 'Slider Updated Successfully');
    }

   





}






            public function SliderDelete($id){
                       //Nkar@ jnjeluhamar
        $image = Slider::find($id);
        $old_image = $image->image;
        unlink($old_image);

        // BDic tvyalner@ jnjelu hamar
        Slider::find($id)->delete();
                    
        return Redirect()->back()->with('success', 'Slider Deleted Successfuly');
            }

}
