<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Property;
use App\Models\Image;
use App\Models\User;

class PropertyController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | LISTAGEM PÚBLICA
    |--------------------------------------------------------------------------
    */

public function index(Request $request)
{
    $query = Property::query()

        // NÃO mostrar deletados
        ->whereNull('deleted_at')

        // Mostrar apenas publicados
        ->where('status', 'published');

    /*
    |--------------------------------------------------------------------------
    | FILTROS
    |--------------------------------------------------------------------------
    */

    if ($request->filled('search')) {

        $query->where(
            'ref',
            'like',
            '%' . $request->search . '%'
        );
    }

    if ($request->filled('type')) {

        $query->where(
            'type',
            'like',
            '%' . $request->type . '%'
        );
    }

    if ($request->filled('area')) {

        $query->where(
            'area',
            'like',
            '%' . $request->area . '%'
        );
    }

    if ($request->filled('priceRange')) {

        $query->where(
            'priceRange',
            'like',
            '%' . $request->priceRange . '%'
        );
    }

    if ($request->filled('bed')) {

        $query->where(
            'bed',
            'like',
            '%' . $request->bed . '%'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | RESULTADO
    |--------------------------------------------------------------------------
    */

    $properties = $query
        ->latest()
        ->paginate(6);

    /*
    |--------------------------------------------------------------------------
    | AJAX - Infinite Scroll
    |--------------------------------------------------------------------------
    */

    if ($request->ajax()) {

        return view(
            'partials.property-card',
            compact('properties')
        )->render();
    }

    /*
    |--------------------------------------------------------------------------
    | VIEW NORMAL
    |--------------------------------------------------------------------------
    */

    return view('welcome', [

        'properties' => $properties,

        'search' => $request->search,
        'type' => $request->type,
        'area' => $request->area,
        'priceRange' => $request->priceRange,
        'bed' => $request->bed

    ]);
}

    /*
    |--------------------------------------------------------------------------
    | FORM CREATE
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('admin.create-property');
    }

    /*
    |--------------------------------------------------------------------------
    | STORE PROPERTY
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        // Validação
        $request->validate([

            'title' => 'required',
            'ref' => 'required|unique:properties',
            'price' => 'required',
            'location' => 'required',

        ]);

        $property = new Property;

        $property->title = $request->title;
        $property->ref = $request->ref;
        $property->description = $request->description;
        $property->price = number_format(
            $request->price,
            2,
            ',',
            '.'
        );

        $property->priceRange = $request->priceRange;
        $property->bed = $request->bed;
        $property->bath = $request->bath;
        $property->garage = $request->garage;
        $property->location = $request->location;
        $property->area = $request->area;
        $property->type = $request->type;

        // NOVO: STATUS
        $property->status = $request->status ?? 'draft';
        // Usuário
        $property->user_id = auth()->id();

        /*
        |--------------------------------------------------------------------------
        | IMAGEM PRINCIPAL
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('image')) {

            $ref = $request->ref;

            // cria pasta
            Storage::disk('public')
                ->makeDirectory("properties/$ref");

            // salva imagem principal
            $imagePath = $request->file('image')
                ->storeAs(
                    "properties/$ref",
                    "$ref-1.jpg",
                    'public'
                );

            $property->image = $imagePath;
        }

        /*
        |--------------------------------------------------------------------------
        | GALERIA
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('imageSlide')) {

            $i = 2;

            foreach ($request->file('imageSlide') as $slide) {

                $slide->storeAs(
                    "properties/$ref",
                    "$ref-$i.jpg",
                    'public'
                );

                $i++;
            }
        }

        $property->save();

        return redirect('/dashboard')
            ->with(
                'msg',
                $request->status == 'draft'
                    ? 'Rascunho salvo com sucesso!'
                    : 'Imóvel publicado com sucesso!'
            );
    }

    /*
    |--------------------------------------------------------------------------
    | SHOW PROPERTY
    |--------------------------------------------------------------------------
    */

    public function show($id)
    {
        $property = Property::query()

            ->whereNull('deleted_at')

            ->where('status', 'published')

            ->findOrFail($id);

        $files = Storage::disk('public')
            ->allFiles('properties/' . $property->ref);

        return view('propriedade', [

            'properties' => $property,

            'files' => $files

        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    public function dashboard(Request $request)
    {
        $query = Property::query()

            ->whereNull('deleted_at');

        if ($request->filled('searchDashboard')) {

            $query->where(
                'ref',
                'like',
                '%' . $request->searchDashboard . '%'
            );
        }

        $properties = $query
            ->latest()
            ->paginate(10);

        return view('admin.dashboard', [

            'properties' => $properties,

            'searchDashboard' => $request->searchDashboard

        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | DELETE (SOFT DELETE)
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {
        Property::findOrFail($id)
            ->delete();

        return redirect('/dashboard')
            ->with(
                'msg',
                'Propriedade enviada para lixeira!'
            );
    }

    /*
    |--------------------------------------------------------------------------
    | DRAFT
    |--------------------------------------------------------------------------
    */

public function drafts()
{
    $properties = Property::query()

        ->whereNull('deleted_at')

        ->where('status', 'draft')

        ->latest()

        ->paginate(10);

    return view('admin.drafts', [

        'properties' => $properties

    ]);
}
    /*
    |--------------------------------------------------------------------------
    | PUBLISH
    |--------------------------------------------------------------------------
    */

    public function publish($id)
    {
        $property = Property::findOrFail($id);

        $property->status = 'published';

        $property->save();

        return redirect('/drafts')
            ->with(
                'msg',
                'Imóvel publicado com sucesso!'
            );
    }

    /*
    |--------------------------------------------------------------------------
    | TRASH
    |--------------------------------------------------------------------------
    */    

    public function trash()
    {
    $properties = Property::onlyTrashed()
        ->latest()
        ->get();

    return view('admin.trash', [
        'properties' => $properties
    ]);
    }

    /*
    |--------------------------------------------------------------------------
    | RESTORE
    |--------------------------------------------------------------------------
    */
    
    public function restore($id)
    {
        Property::withTrashed()
            ->findOrFail($id)
            ->restore();

        return redirect('/trash')
            ->with(
                'msg',
                'Imóvel restaurado com sucesso!'
            );
    }    

    /*
    |--------------------------------------------------------------------------
    | EDIT
    |--------------------------------------------------------------------------
    */

    public function edit($id)
    {
        $property = Property::findOrFail($id);

        return view('admin.edit', [
            'property' => $property
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | FORCE DELETE
    |--------------------------------------------------------------------------
    */    

    public function forceDelete($id)
    {
        $property = Property::withTrashed()
            ->findOrFail($id);

        /*
        |--------------------------------------------------------------------------
        | DELETAR PASTA DE IMAGENS
        |--------------------------------------------------------------------------
        */

        Storage::disk('public')
            ->deleteDirectory(
                'properties/' . $property->ref
            );

        /*
        |--------------------------------------------------------------------------
        | DELETAR DEFINITIVAMENTE
        |--------------------------------------------------------------------------
        */

        $property->forceDelete();

        return redirect('/trash')
            ->with(
                'msg',
                'Imóvel excluído permanentemente!'
            );
    }    

    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */

    public function update(Request $request)
    {
        $property = Property::findOrFail($request->id);

        $property->update([

            'title' => $request->title,
            'ref' => $request->ref,
            'description' => $request->description,
            'price' => $request->price,
            'priceRange' => $request->priceRange,
            'bed' => $request->bed,
            'bath' => $request->bath,
            'garage' => $request->garage,
            'location' => $request->location,
            'area' => $request->area,
            'type' => $request->type,
            'status' => $request->status

        ]);

        $ref = $request->ref;

        /*
        |--------------------------------------------------------------------------
        | IMAGEM PRINCIPAL
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('image')) {

            $imagePath = $request->file('image')
                ->storeAs(
                    "properties/$ref",
                    "$ref-1.jpg",
                    'public'
                );

            $property->image = $imagePath;

            $property->save();
        }

        /*
        |--------------------------------------------------------------------------
        | GALERIA
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('imageSlide')) {

            $i = 2;

            foreach ($request->file('imageSlide') as $slide) {

                $slide->storeAs(
                    "properties/$ref",
                    "$ref-$i.jpg",
                    'public'
                );

                $i++;
            }
        }

        return redirect('/dashboard')
            ->with(
                'msg',
                'Propriedade atualizada com sucesso!'
            );
    }
}