<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Auth;
use Illuminate\Support\Carbon; 
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function AllCat(){
        
        // Eloquent ORM
        // $categories = Category::latest()->get();

        // Query builder
        // $categories = DB::table('categories')->latest()->get();


        // MArc lyonchin te xia es metodov aneluc amen useri hamarmi togh cuyc talis 
        // $categories = DB::table('categories')
        // ->join('users', 'categories.user_id', 'user_id')
        // ->select('categories.*', 'users.name')->latest()->paginate(5);


        //For Select data by Eloqent ORM
        $categories = Category::latest()->paginate(5);



        // For Temporary delete data 
        $trachCat = Category::onlyTrashed()->latest()->paginate(3);
        



        //Query builder with pagination  // Anjatel Catrgori-i funkcian u hanel index.bladi-um ayd funkcian
        // $categories = DB::table('categories')->latest()->paginate(5);
        
        return view('admin.category.index', compact('categories', 'trachCat'));  

    }
    public function AddCat(Request $request){
        $validated = $request->validate([
            'category_name' => 'required|unique:posts|max:255',
        ],
        [
            //to show personal message in validation
            'category_name.required' => 'Please imput some Category name',
            'category_name.unique:posts' => 'The name is already exists',
        ]);
       
        /*
        //Data upload to server method 1 by Eloquent ORM
        Category::insert([
            'category_name' => $request->category_name,
            'user_id'=>Auth::user()->id,
            'created_at'=>Carbon::now(),
        ]);
        return Redirect()->back()->with('success', 'Category inserted Successfully');
        */




        
        
         
        // Data upload to server method 2 by Eloquent ORM
        $category = New Category;
        $category-> category_name = $request->category_name;
        $category->user_id = Auth::user()->id;
        // $category -> created_at = Carbon::now();  in this method we dont need to add this row becouse with this method automaticaly all dates will be fixed in server
        $category -> save(); 
        return Redirect()->back()->with('success', 'Category inserted Successfully');
        



        /*
        //Data upload to server method 3 by Query Builder
        $data = array();
        $data['category_name'] = $request -> category_name;
        $data['user_id'] = Auth::user() -> id;
        DB::table('categories')->insert($data);

        return Redirect()->back()->with('success', 'Category inserted Successfully');
        */
        
       
        
    }

        public function Edit($id){
            
            //Eloqent ORM
            $categories =Category::find($id);
            
            
            /* 
            //Query builder
            $categories = DB::table('categories')->where('id', $id)->first();
            */
            
            return view('admin.category.edit', compact('categories')); 
        }

        public function Update(Request $request, $id){
           
            //Eloqent ORM method
            $update = Category::find($id)->update([
                'category_name' => $request->category_name,
                'user_id' => Auth::user()->id, 
            ]); 
            
            /* 
            // Query bulilder method 
            $data = array();
            $data['category_name'] = $request->category_name;
            $data['user_id'] = Auth::user()->id;
            DB::table('categories')->where('id', $id)->update($data); 
            */

            return Redirect()->route('all.category')->with('success', 'Category Updated Successfully');  
        }





        public function SoftDelete($id){
            /*
                //Eloqent ORM method
            */
            $delete =Category::find($id)->delete();
            
            return Redirect()->back()->with('success', 'Category Soft Deleted Successfuly');
            
        
        }







        public function Restore($id){
            $delete = Category::withTrashed()->find($id)->restore();
            return Redirect()->back()->with('success', 'Category Restored Successfuly');
        }


        public function Pdelete($id){

            $delete = Category::onlyTrashed()->find($id)->forceDelete();

            return Redirect()->back()->with('success', 'Category Permanently Deleted');

        }



}
