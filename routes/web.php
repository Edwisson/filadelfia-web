<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

<<<<<<< HEAD
Route::get('/', function () {
    return view('index');
});
=======
// Route::get('/', function () {
//     return view('welcome');
// });
>>>>>>> 773c907a2b097b807685bd5b381aa855d3e80eb4



Route::get('/contactos',[ContactoController::class,  'index'])->name('contactos.index');
Route::get('/contactos/create', [ContactoController::class, 'create'])->name('contactos.create');
Route::post('/contactos/store', [ContactoController::class, 'store'])->name('contacto.store');
