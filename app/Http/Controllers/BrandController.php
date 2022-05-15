<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Carbon;

class BrandController extends Controller
{
    
    public function AllBrand(){

        $brands = Brand::latest()->paginate(5);

        return view('admin.brand.index', compact('brands'));
    }



    public function StoreBrand(Request $request){
         
                        $validatedData = $request->validate([
            'brand_name' => 'required|unique:brands|min:3',
            'brand_image' => 'required|mimes:jpg.jpeg,png',
        ],
        [
            //to show personal message in validation
            'brand_name.required' => 'Please imput some Brand name',
            // 'brand_name.unique:brands' => 'The Brand name is already exists',
        ]);


        $brand_image = $request->file('brand_image');

        
        // for creating validation of unique  photo
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($brand_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/brand/';
        $last_img = $up_location.$img_name;
        $brand_image->move($up_location, $img_name);

        //Upload     insert

        Brand::insert([
            'brand_name' => $request ->brand_name, 
            'brand_image' => $last_img,
            'created_at' => Carbon::now()
        ]);
        
        return Redirect()->back()->with('success', 'Brand Inserted Successfully');


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
                
                return Redirect()->back()->with('success', 'Brand Updated Successfully');

        }else{
                Brand::find($id)->update([
                    'brand_name' => $request ->brand_name, 
                    'created_at' => Carbon::now()
                ]);
                
                return Redirect()->back()->with('success', 'Brand Updated Successfully');
        }

       


    }


    public function Delete($id){

        //Nkar@ jnjeluhamar
        $image = Brand::find($id);
        $old_image = $image->brand_image;
        unlink($old_image);

        // BDic tvyalner@ jnjelu hamar
        Brand::find($id)->delete();
                    
        return Redirect()->back()->with('success', 'Brand Soft Deleted Successfuly');

    }





}