<?php

use App\Http\Controllers\PropertyController;

use App\Http\Controllers\ContactController;

use Illuminate\Support\Facades\Route;



Route::get ('/',[PropertyController::class, 'index']);

Route::get ('propriedade/{id}',[PropertyController::class, 'show']);

Route::get('/dashboard', [PropertyController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::get('/contato', [ContactController::class, 'index']);

Route::post('/contato', [ContactController::class, 'store']);

Route::get('/dashboard/contato', [ContactController::class, 'contactDashboard'])->middleware('auth')->name('contactDashboard');

Route::delete ('propriedade/{id}',[PropertyController::class, 'destroy']);



Route::get('/sobre', function () {
    return view('about');
});


