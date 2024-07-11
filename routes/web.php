<?php

use App\Http\Controllers\AsistenciaController;
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
Route::get('/contacto/{id}', [ContactoController::class, 'show'])->name('intranet.show');
Route::get('/contacto', [ContactoController::class,'intranetMensajes'])->name('contacto.mensajes');

// Carpeta miembros

Route::get('/miembros/create', [MiembroController::class, 'create'])->name('miembros.create');
Route::post('/miembros/store', [MiembroController::class, 'store'])->name('miembros.store');
Route::get('/miembros/{cedula}', [MiembroController::class, 'show'])->name('miembros.show');
Route::get('/miembros', [MiembroController::class,'listas'])->name('miembros.miembros');
Route::get('miembros/{miembro}/edit', [MiembroController::class, 'edit'])->name('miembros.edit');
Route::put('miembros/{miembro}', [MiembroController::class, 'update'])->name('miembros.update');
Route::get('/miembros/{miembro}/asistencias', [MiembroController::class, 'asistencias'])->name('miembros.listaAsistencias');

//carpeta eventos

Route::get('/eventos/create', [EventoController::class, 'create'])->name('evento.create');
Route::post('/evento/store', [EventoController::class, 'store'])->name('evento.store');
Route::get('/evento/{id}', [EventoController::class, 'show'])->name('evento.show');
Route::get('/eventos', [EventoController::class, 'lista'])->name('evento.lista');
Route::get('evento/{evento}/edit', [EventoController::class, 'edit'])->name('evento.edit');
Route::put('evento/{evento}', [EventoController::class, 'update'])->name('evento.update');
Route::get('/eventos/{evento}/asistencias', [EventoController::class, 'asistencias'])->name('evento.listaAsistencias');

//asistencias

Route::get('/asistencia/create', [AsistenciaController::class, 'create'])->name('asistencia.create');
Route::post('/asistencia/store', [AsistenciaController::class, 'store'])->name('asistencia.store');

// Carpeta sociedades

Route::get('/sociedades/create',[SociedadController::class, 'create'])->name('sociedades.create');
Route::post('/sociedades/store', [SociedadController::class, 'store'])->name('sociedades.store');
Route::get('/sociedades/{nombre}', [SociedadController::class, 'show'])->name('sociedades.show');
Route::get('/sociedades',[SociedadController::class, 'lista'])->name('sociedades.lista');
Route::get('/miembros/buscar', [MiembroController::class, 'buscar'])->name('miembros.buscar');
Route::get('/sociedades/edit/{nombre}', [SociedadController::class, 'edit'])->name('sociedades.edit');
Route::put('/sociedades/{nombre}', [SociedadController::class, 'update'])->name('sociedades.update');
