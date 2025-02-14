<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Image;

use App\Models\Property;

use App\Models\User;

use Illuminate\Support\Facades\Storage;


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
            $properties = Property::orderBy('id', 'desc')->get();

        }


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


        return view ('welcome',['properties' => $properties, 
                                'search' => $search, 
                                'type' => $type, 
                                'area' => $area,
                                'priceRange' => $priceRange,
                                'bed' => $bed ]);
    }

    public function create(){

        return view ('admin.create-property');

    }

    public function store(Request $request){

        $property = new Property;

        $propertyImg = new Image;


        $property->title = $request->title;
        $property->ref = $request->ref;
        $property->description = $request->description;
        $property->price = $request->price;
        $property->priceRange = $request->priceRange;
        $property->bed = $request->bed;
        $property->bath = $request->bath;
        $property->garage = $request->garage;
        $property->location = $request->location;
        $property->area = $request->area;
        $property->type = $request->type;



            if($request->hasFile('image') && $request->file('image')->isValid()){

                $ref = $property->ref = $request->ref;

                Storage::makeDirectory("/app/public/properties/$ref");
                
                $imagePath = $request->image->storeAs('properties/' . $ref, $ref . '-1.jpg');


                $property['image'] = $imagePath;

                }

            if($request->hasFile('imageSlide')){

                $imgSlide = [];

                $ref = $property->ref = $request->ref;

                $i = 2;


                foreach ($request->file('imageSlide') as $slide) {



                    $imgSlide[] = ['imageSlide' => $slide->storeAs('properties/' . $ref, $ref . '-' . $i++ . '.jpg')];




                }



                


            }

        $user = auth()->user();
        $property->user_id = $user->id;


        $property->save();

        return redirect('/dashboard')->with('msg', 'Propriedade criada com sucesso!');

    }




    public function show($id){
        
        $property = Property::findOrFail($id);

        $ref = $property->ref;

        $directory = "public/properties/" . $ref;

        $files = Storage::files($directory);

        //$propertyOwner = User::where('id', $event->user_id)->first() ->toArray();

        return view ('propriedade', ['properties' => $property]);

    }

    public function dashboard() {
        $properties = Property::all();
        $user = auth()->user();
        $properties = Property::orderBy('id', 'desc')->get();
        //$properties = $user->properties;

        return view('admin.dashboard' , ['properties' => $properties]);
    }

    public function destroy($id) {

        Property::findOrFail($id)->delete();


        return redirect('dashboard')->with('msg', 'Propriedade Excluída com sucesso!');
    }

    public function edit($id) {

        $property = Property::findOrFail($id);


        return view('admin.edit' , ['property' => $property]);
    }

    public function update(Request $request) {

        $property = new Property;

        $data = $request->all();

        if($request->hasFile('image') && $request->file('image')->isValid()){

            $ref = $property->ref = $request->ref;
            
            $imagePath = $request->image->storeAs('properties/' . $ref, $ref . '-1.jpg');


            $data['image'] = $imagePath;

            }


        Property::findOrFail($request->id)->update($data);


        return redirect('/dashboard')->with('msg', 'Propriedade Atualizada com sucesso!');
    }

}
