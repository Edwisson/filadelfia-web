<?php

use App\Http\Controllers\SociedadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\MiembroController;
use App\Http\Controllers\EventoController;

Route::get('/', function () {
    return view('index');
});

Route::get('/contactos/create', [ContactoController::class, 'create'])->name('contactos.create');
Route::post('/contactos/store', [ContactoController::class, 'store'])->name('contacto.store');


Route::get('/intranet/{id}', [ContactoController::class, 'show'])->name('intranet.show');
Route::get('/intranet', [ContactoController::class,'intranetMensajes'])->name('intranet.mensajes');



// Carpeta miembros
Route::get('/miembros/create', [MiembroController::class, 'create'])->name('miembros.create');

Route::post('/miembros/store', [MiembroController::class, 'store'])->name('miembros.store');


Route::get('/miembros/{cedula}', [MiembroController::class, 'show'])->name('miembros.show');

Route::get('/miembros', [MiembroController::class,'listas'])->name('miembros.miembros');



//carpeta eventos
Route::get('/eventos/create', [EventoController::class, 'create'])->name('evento.create');

Route::post('/evento/store', [EventoController::class, 'store'])->name('evento.store');

Route::get('/evento/{id}', [EventoController::class, 'show'])->name('evento.show');

Route::get('/eventos', [EventoController::class, 'mensajes'])->name('evento.mensajes');



// Carpeta sociedades

Route::get('/sociedades/create',[SociedadController::class, 'create'])->name('sociedades.create');
Route::post('/sociedades/store', [SociedadController::class, 'store'])->name('sociedades.store');
Route::get('/sociedades/{nombre}', [SociedadController::class, 'show'])->name('sociedades.show');
Route::get('/sociedades',[SociedadController::class, 'lista'])->name('sociedades.lista');