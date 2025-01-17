<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Property;

class PropertyController extends Controller
{
    public function index(){

        $search = request('search');

        if ($search) {

            $properties = Property::where([
                ['ref', 'like','%'.$search.'%']
            ])->get();

        } else {

            $properties = Property::all();

        }
        
        return view ('welcome',['properties' => $properties, 'search' => $search]);
    }

    public function create(){

    }

    public function store(Request $request){

        $property = new Property;

        $property->title = $request->title;

        //Image Upload

        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->image->getClientOriginalName());

            $request->image->move(public_path('img/propriedades'), $imageName);

            $event->image = $imageName;
        }

    }

    public function show($id){
        $property = Property::findOrFail($id);
        return view ('propriedade', ['properties' => $property]);

    }
}
