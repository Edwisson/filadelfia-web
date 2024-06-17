<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('index');
});

Route::get('/contactos/create', [ContactoController::class, 'create'])->name('contactos.create');
Route::post('/contactos/store', [ContactoController::class, 'store'])->name('contacto.store');


Route::get('/intranet/{id}', [ContactoController::class, 'show'])->name('intranet.show');


Route::get('/intranet', [ContactoController::class,'intranetMensajes'])->name('intranet.mensajes');





