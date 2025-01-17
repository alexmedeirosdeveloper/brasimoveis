<?php

use App\Http\Controllers\EventController;

use App\Http\Controllers\PropertyController;

use Illuminate\Support\Facades\Route;


Route::get ('/',[PropertyController::class, 'index']);

Route::get ('/{id}',[PropertyController::class, 'show']);


Route::get('propriedade/sobre', function () {
    return view('about');
});

Route::get('propriedade/contato', function () {
    return view('contact');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
