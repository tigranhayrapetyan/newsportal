<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class ChangePassController extends Controller
{
    public function ChangePassword(){
        return view('admin.body.change_password');
    }


    public function UpdatePassword(Request $request){
        $validatedData = $request->validate([
            'current_password' => 'required|',
            'password' => 'required|confirmed',
           ]);
        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->current_password,  $hashedPassword )){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user-> save();
            Auth::logout();
            return redirect()->route('login')->with('success', 'Password is Changed Successfully');
        }
        else {
            return redirect()->back()->with('error', 'Current Password IS Invalid');
        }
    }  



    public function ProfileUpdate(){
        if(Auth::user()){
            $user = User::find(Auth::user()->id);
            if($user){
                return view('admin.body.update_profile', compact('user'));
            }
        }
    }


    public function UpdateUserProfile(Request $request){
        $user = User::find(Auth::user()->id);
        if($user){
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->Save();
            return Redirect()->back()->with('success', 'Profile updated successfuly');
        }else{
            return Redirect()->back()->with('error', 'Profile NOT updated');
        }

    }




    public function ProfilePicture(){
        if(Auth::user()){
            $userphoto = User::find(Auth::user()->id);
            if($userphoto){
                return view('admin.body.update_profile_picture', compact('userphoto'));
            }
        }
    }



    public function UpdateProfilePicture(Request $request){
        $user = User::find(Auth::user()->id);
        if($user){

            $old_image = $request->old_image;
            $slider_image = $request->file('image');
                
            if($slider_image){
        
                        // for creating validation of unique  photo
                    $name_gen = hexdec(uniqid());
                    $img_ext = strtolower($slider_image->getClientOriginalExtension());
                    $img_name = $name_gen.'.'.$img_ext;
                    $up_location = 'storage/profile-photos/';
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
        
                    return Redirect()->back()->with('success', 'Profile updated successfuly');
        
            }else{
                
                     Slider::find($id)->update([
                        'title' => $request ->title, 
                        'description' => $request ->description, 
                        'created_at' => Carbon::now()
                    ]);
        
                    return Redirect()->back()->with('success', 'Profile updated successfuly');
            }
 
        }

    }



}
