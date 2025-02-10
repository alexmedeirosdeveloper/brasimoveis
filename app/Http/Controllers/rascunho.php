$filter = Property::orderBy('location','asc')
                            ->orderBy('type','asc')
                            ->orderBy('area','asc');

        $location = $request->location;
        $type = $request->type;
        $area = $request->area;

        if($location) {
            $filter->where('location','like',"%$request->location%");
        }

        if($type) {
            $filter->where('type','like',"%$request->type%");
        }

        if($area) {
            $filter->where('area','like',"%$request->area%");
        }


        $filter = $filter->get();

        $filter = Property::orderBy('location')->get();



        

        //Image Upload

if($request->hasFile('image') && $request->file('image')->isValid()){


    $requestImage = $request->image;

    $extension = $requestImage->extension();

    $imageName = md5($requestImage->getclientOriginalName() . strtotime("now")) . "." .$extension;

    $requestImage->move(public_path('/img'), $imageName);

    $property->image = $imageName;
}