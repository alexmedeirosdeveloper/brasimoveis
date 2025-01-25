<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;


class ContactController extends Controller
{

        public function index(){
        
            $contact = Contact::all();
    
            return view ('contact',['contacts' => $contact]);
        }
    
        public function store(Request $request){

        $contact = New Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->cellphone = $request->cellphone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        return redirect('/');

        }

        public function contactDashboard() {
            $contacts = Contact::all();
            $user = auth()->user();
            //$properties = $user->properties;
    
            return view('admin.contact-form-table' , ['contacts' => $contacts]);
        }
}
