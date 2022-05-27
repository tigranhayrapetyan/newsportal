<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;
use App\Models\HomeAbout;
use App\Models\Multipic;
use Auth;




class HomeAboutController extends Controller
{
    public function HomeAbout(){
        $homeabout = HomeAbout::latest()->get();
        return view('admin.home.index', compact('homeabout'));
    }

    public function AddAbout(){
        return view('admin.home.create');
    }


    public function StoreAbout(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|min:3',
            'short_dis' => 'required',
            'long_dis' => 'required',

        ],
        [
            //to show personal message in validation
            'title.required' => 'Please imput some Title name',
     
        ]);


        
        //Upload     insert
        HomeAbout::insert([
            'title' => $request ->title, 
            'short_dis' => $request ->short_dis, 
            'long_dis' => $request ->long_dis, 
            'created_at' => Carbon::now()
        ]);
        
        return Redirect()->route('home.about')->with('success', 'About title Inserted Successfully');

    }


    public function Edit($id){

        $homeabout = HomeAbout::find($id);

        return view ('admin.home.edit', compact('homeabout'));
    }

    

    public function AboutUpdate(Request $request, $id){

        HomeAbout::find($id)->update([
            'title' => $request ->title, 
            'short_dis' => $request ->short_dis, 
            'long_dis' => $request ->long_dis, 
            'updated_at' => Carbon::now()
        ]);
        
        return Redirect()->route('home.about')->with('success', 'Information Updated Successfully');

    }


    public function AboutDelete($id){
        HomeAbout::find($id)->delete();
                    
        return Redirect()->back()->with('success', 'Information Deleted Successfuly');
    }


    public function Portfolio(){
        $images = Multipic::all();
        return view('pages.portfolio', compact('images'));
    }



}
