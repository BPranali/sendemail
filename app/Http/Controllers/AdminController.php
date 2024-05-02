<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function createContact(Request $request){

        // $request->validate([
        //     'phone' => 'required|min:10',
        // ]);

        // $contact = new Contact;

        // $contact->name = $request->name;

        // $contact->phone = $request->phone;

        // $contact->email = $request->email;

        // $contact->save();
        $request->validate([

            // 'name' => 'required',

            // 'email' => 'required|email',

            'phone' => 'required|digits:10|numeric',

        ]);

  

        Contact::create($request->all());
        // return redirect()->back()->with('message','Sent successfully!!');
        return redirect()->away('https://drive.google.com/file/d/1Dlmaie_6Nx7XnVidG0Em93pt1nu1HXdJ/view');
    }
}
