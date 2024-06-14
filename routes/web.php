<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('index');
});


// Esto se puede eliminar despues si el read queda en segundo plano por el intranet.show
Route::get('/contactos',[ContactoController::class,  'index'])->name('contactos.read');


Route::get('/contactos/create', [ContactoController::class, 'create'])->name('contactos.create');
Route::post('/contactos/store', [ContactoController::class, 'store'])->name('contacto.store');


Route::get('/intranet/{id}', [ContactoController::class, 'show'])->name('intranet.show');


Route::get('/intranet', [ContactoController::class,'intranetMensajes'])->name('intranet.mensajes');





