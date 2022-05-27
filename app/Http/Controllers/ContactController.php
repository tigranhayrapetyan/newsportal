<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ContactController extends Controller
{
public function HomeContact(){
    $contacts = Contact::all();
    return view('admin.contact.index', compact('contacts'));
}

public function AddContact(){

    return view('admin.contact.create');
}

public function StoreContact(Request $request){
    $validatedData = $request->validate([
        'phone' => 'required|min:9',
        'email' => 'required',
        'address' => 'required',

    ],
    [
        //to show personal message in validation
        'phone.min:9' => 'Please imput correct phone mumber',
 
    ]);


    
    //Upload     insert
    Contact::insert([
        'phone' => $request ->phone, 
        'email' => $request ->email, 
        'address' => $request ->address, 
        'created_at' => Carbon::now()
    ]);
    
    return Redirect()->route('home.contact')->with('success', 'About title Inserted Successfully');



}


public function ContactDelete($id){

    Contact::find($id)->delete();
                    
    return Redirect()->back()->with('success', 'Information Deleted Successfuly');

}

public function EditContact($id){
    $contacts = Contact::find($id);
    return view('admin.contact.edit', compact('contacts'));
}


public function ContactUpdate(Request $request, $id){

    Contact::find($id)->update([
        'phone' => $request ->phone, 
        'email' => $request ->email, 
        'address' => $request ->address, 
        'updated_at' => Carbon::now()
    ]);
    
    return Redirect()->route('home.contact')->with('success', 'Information Updated Successfully');

}

public function Contacts(){
    $contacts = Contact::first();
    return view('pages.contacts', compact('contacts'));
}


}
