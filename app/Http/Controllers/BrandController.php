<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Carbon;
use Image;

class BrandController extends Controller
{

        //Middlewere 
        public function __construct(){
            $this->middleware('auth');
        }

        
    
    public function AllBrand(){

        $brands = Brand::latest()->paginate(5);

        return view('admin.brand.index', compact('brands'));
    }



    public function StoreBrand(Request $request){
         
                        $validatedData = $request->validate([
            'brand_name' => 'required|unique:brands|min:3',
            // 'brand_image' => 'required|mimes:jpg.jpeg,png',
        ],
        [
            //to show personal message in validation
            'brand_name.required' => 'Please imput some Brand name',
            // 'brand_name.unique:brands' => 'The Brand name is already exists',
        ]);


        $brand_image = $request->file('brand_image');

        /*
        // for creating validation of unique  photo by classic method
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($brand_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/brand/';
        $last_img = $up_location.$img_name;
        $brand_image->move($up_location, $img_name);
        */

        //By using Laravelimage intervantion adition mehtode where we can modify the image demantion before saving 
        $name_gen = hexdec(uniqid()).'.'.$brand_image->getClientOriginalExtension();
        Image::make($brand_image)->resize(300,200)->Save('image/brand/'.$name_gen);
        $last_img = 'image/brand/'.$name_gen;


        //Upload     insert
        Brand::insert([
            'brand_name' => $request ->brand_name, 
            'brand_image' => $last_img,
            'created_at' => Carbon::now()
        ]);
        
        $notification = array(
            'message' => 'Brand Inserted Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);


    }



    public function Edit($id){
        $brands = Brand::find($id);

        return view('admin.brand.edit', compact('brands'));


    }




    public function Update(Request $request, $id){

              
        $validatedData = $request->validate([
            'brand_name' => 'required|min:3',
        ],
        [
            //to show personal message in validation
            'brand_name.required' => 'Please imput some Brand name',
            // 'brand_name.unique:brands' => 'The Brand name is already exists',
        ]);

        $old_image = $request->old_image;
        $brand_image = $request->file('brand_image');


        if($brand_image){

                    // for creating validation of unique  photo
                $name_gen = hexdec(uniqid());
                $img_ext = strtolower($brand_image->getClientOriginalExtension());
                $img_name = $name_gen.'.'.$img_ext;
                $up_location = 'image/brand/';
                $last_img = $up_location.$img_name;
                $brand_image->move($up_location, $img_name);

                //Upload     insert
                
                unlink($old_image);

                Brand::find($id)->update([
                    'brand_name' => $request ->brand_name, 
                    'brand_image' => $last_img,
                    'created_at' => Carbon::now()
                ]);

                $notification = array(
                    'message' => 'Brand Updated Successfully',
                    'alert-type' => 'info'
                );
                return Redirect()->back()->with($notification);


        }else{
                Brand::find($id)->update([
                    'brand_name' => $request ->brand_name, 
                    'created_at' => Carbon::now()
                ]);

                $notification = array(
                    'message' => 'Brand Updated Successfully',
                    'alert-type' => 'info'
                );
                return Redirect()->back()->with($notification);
        }

       


    }


    public function Delete($id){

        //Nkar@ jnjeluhamar
        $image = Brand::find($id);
        $old_image = $image->brand_image;
        unlink($old_image);

        // BDic tvyalner@ jnjelu hamar
        Brand::find($id)->delete();
        $notification = array(
            'message' => 'Brand Soft Deleted Successfuly',
            'alert-type' => 'error'
        );
        return Redirect()->back()->with($notification);

    }





}
