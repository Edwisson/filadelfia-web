<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{
    public function mensajes()
    {
        $eventos = Evento::paginate(10);
        
        // Mostrar la vista mensajes
        return view('evento.mensajes', compact('eventos'));
    }

    public function create()
    {
        return view('evento.create');
    }

    public function store(Request $request)
    {
        Evento::create($request->all());

        return redirect()->route('evento.mensajes');
    }

    public function show($id)
    {
        $evento = Evento::findOrFail($id);
    
        return view('evento.show', compact('evento'));
    }
}



