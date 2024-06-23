<?php

namespace App\Http\Controllers;

use App\Models\MiembroSociedad;
use Illuminate\Http\Request;

class MiembroSociedadController extends Controller
{
    public function lista()
    {
        $miembrosociedades = MiembroSociedad::paginate(10);
        
        // CAMBIAR RUTA
        // return view('sociedades.lista', compact('miembrosociedades'));
    }

    public function create()
    {
        // CAMBIAR RUTA
        // return view('sociedades.create');
    }

    public function store(Request $request)
    {
        MiembroSociedad::create($request->all());

        // CAMBIAR RUTA
        // return redirect()->route('sociedades.lista');
    }




    // public function show($nombre)
    // {
    //     $sociedades = Sociedad::findOrFail($nombre);
    
    //     return view('sociedades.show', compact('sociedades'));
        
    // }

    public function show()
    {
        $miembrosociedades = MiembroSociedad::with('miembrosSociedad');
        return view('sociedades.show', compact('miembrosociedades'));
    }
}
