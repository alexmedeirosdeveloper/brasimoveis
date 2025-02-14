<?php

use App\Http\Controllers\PropertyController;

use App\Http\Controllers\ContactController;

use Illuminate\Support\Facades\Route;



Route::get ('/',[PropertyController::class, 'index']);

Route::get ('/propriedade/{id}',[PropertyController::class, 'show']);

Route::get ('/criar/propriedade',[PropertyController::class, 'create'])->middleware('auth');

Route::post ('/propriedade',[PropertyController::class, 'store'])->middleware('auth');

Route::get('/dashboard', [PropertyController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::get('/contato', [ContactController::class, 'index']);

Route::post('/contato', [ContactController::class, 'store']);

Route::get('/dashboard/contato', [ContactController::class, 'contactDashboard'])->middleware('auth')->name('contactDashboard');

Route::delete ('propriedade/{id}',[PropertyController::class, 'destroy'])->middleware('auth');

Route::get ('propriedade/editar/{id}',[PropertyController::class, 'edit'])->middleware('auth')->name('edit');

Route::put ('propriedade/atualizar/{id}',[PropertyController::class, 'update'])->middleware('auth')->name('update');


Route::get('/sobre', function () {
    return view('about');
});


