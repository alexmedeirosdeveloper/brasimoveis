<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ImageController;

/*
|--------------------------------------------------------------------------
| FRONTEND
|--------------------------------------------------------------------------
*/

Route::get('/', [PropertyController::class, 'index']);

Route::get('/propriedade/{id}', [
    PropertyController::class,
    'show'
]);

Route::get('/sobre', function () {
    return view('about');
});

/*
|--------------------------------------------------------------------------
| CONTATO
|--------------------------------------------------------------------------
*/

Route::get('/contato', [
    ContactController::class,
    'index'
]);

Route::post('/contato', [
    ContactController::class,
    'store'
]);

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', [
        PropertyController::class,
        'dashboard'
    ])->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | DRAFTS
    |--------------------------------------------------------------------------
    */

    Route::get('/drafts', [
        PropertyController::class,
        'drafts'
    ])->name('drafts');

    /*
    |--------------------------------------------------------------------------
    | LIXEIRA
    |--------------------------------------------------------------------------
    */

    Route::get('/trash', [
        PropertyController::class,
        'trash'
    ])->name('trash');

    /*
    |--------------------------------------------------------------------------
    | PROPERTY CREATE
    |--------------------------------------------------------------------------
    */

    Route::get('/criar/propriedade', [
        PropertyController::class,
        'create'
    ]);

    Route::post('/propriedade', [
        PropertyController::class,
        'store'
    ]);

    /*
    |--------------------------------------------------------------------------
    | PROPERTY EDIT
    |--------------------------------------------------------------------------
    */

    Route::get('/propriedade/editar/{id}', [
        PropertyController::class,
        'edit'
    ])->name('edit');

    Route::put('/propriedade/atualizar/{id}', [
        PropertyController::class,
        'update'
    ])->name('update');

    /*
    |--------------------------------------------------------------------------
    | SOFT DELETE
    |--------------------------------------------------------------------------
    */

    Route::delete('/propriedade/{id}', [
        PropertyController::class,
        'destroy'
    ]);

    /*
    |--------------------------------------------------------------------------
    | RESTORE
    |--------------------------------------------------------------------------
    */

    Route::put('/property/restore/{id}', [
        PropertyController::class,
        'restore'
    ])->name('property.restore');

    /*
    |--------------------------------------------------------------------------
    | PUBLICAR RASCUNHO
    |--------------------------------------------------------------------------
    */

    Route::put('/property/publish/{id}', [
        PropertyController::class,
        'publish'
    ])->name('property.publish');

    /*
    |--------------------------------------------------------------------------
    | FORCE DELETE
    |--------------------------------------------------------------------------
    */    

    Route::delete('/property/force-delete/{id}', [
        PropertyController::class,
        'forceDelete'
    ])->name('property.forceDelete');    

    /*
    |--------------------------------------------------------------------------
    | CONTACT DASHBOARD
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard/contato', [
        ContactController::class,
        'contactDashboard'
    ])->name('contactDashboard');

    /*
    |--------------------------------------------------------------------------
    | SLIDES
    |--------------------------------------------------------------------------
    */

    Route::get('/criar/slides', [
        ImageController::class,
        'create'
    ]);

    Route::post('/slides', [
        ImageController::class,
        'store'
    ]);
});