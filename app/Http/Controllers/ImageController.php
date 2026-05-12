<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Image;

use App\Models\User;

use App\Models\Property;



class ImageController extends Controller
{

    public function create(){

        return view ('admin.images');

    }

    public function store(Request $request){

        $property = new Property;
        $propertyImg = new Image;


        $propertyImg->ref = $request->ref;


            if($request->hasFile('imageSlide')){

                $imgSlide = [];

                $ref = $property->ref;

                $id = $property->id = $request->id;

                $i = 2;


                foreach ($request->file('imageSlide') as $slide) {



                    $imgSlide[] = ['imageSlide' => $slide->storeAs('propriedade/' . $id, $ref . '-' . $i++ . '.jpg')];



                }


                $propertyImg = Image::find($propertyImg);
                $propertyImg['imageSlide'] = $imgSlide;



            }

    

        $user = auth()->user();
        $propertyImg->user_id = $user->id;


        $propertyImg->save();

        return redirect('/dashboard')->with('msg', 'Propriedade criada com sucesso!');

    }

}
