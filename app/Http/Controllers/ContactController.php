<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

use App\Models\Property;


class ContactController extends Controller
{

        public function index(){
    
            $contact = Contact::all();

            $properties = Property::all();
    
            $type = request('type');
    
            if (!empty($type)) {
    
                $properties = Property::where([
                    ['type', 'like','%'.$type.'%']
                ])->get();
    
            } 
    
            $area = request('area');
    
            if (!empty($area)) {
    
                $properties = Property::where([
                    ['area', 'like','%'.$area.'%']
                ])->get();
    
            }
    
    
            $priceRange = request('priceRange');
    
    
            if (!empty($priceRange)) {
    
                $properties = Property::where([
                    ['priceRange', 'like','%'.$priceRange.'%']
                ])->get();
    
            }
    
    
    
            $bed = request('bed');
    
    
            if (!empty($bed)) {
    
                $properties = Property::where([
                    ['bed', 'like','%'.$bed.'%']
                ])->get();
    
            }

            
            return view ('contact',['properties' => $properties, 
                                    'type' => $type, 
                                    'area' => $area,
                                    'priceRange' => $priceRange,
                                    'bed' => $bed ]);
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
