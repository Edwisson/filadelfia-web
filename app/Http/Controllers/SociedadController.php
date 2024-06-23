<?php

namespace App\Http\Controllers;

use App\Models\Sociedad;
use Illuminate\Http\Request;

class SociedadController extends Controller
{
    public function lista()
    {
        $sociedades = Sociedad::paginate(10);
        
        // Mostrar la vista mensajes
        return view('sociedades.lista', compact('sociedades'));
    }

    public function create()
    {
        return view('sociedades.create');
    }

    public function store(Request $request)
    {
        Sociedad::create($request->all());

        return redirect()->route('sociedades.lista');
    }

    // public function show($nombre)
    // {
    //     $sociedades = Sociedad::findOrFail($nombre);
    
    //     return view('sociedades.show', compact('sociedades'));
        
    // }

    public function show($nombre)
    {
        $sociedades = Sociedad::with('miembrosSociedad')->findOrFail($nombre);
        return view('sociedades.show', compact('sociedades'));
    }

}
