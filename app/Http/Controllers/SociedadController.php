<?php

namespace App\Http\Controllers;

use App\Http\Requests\SociedadRequest;
use App\Models\Sociedad;
use App\Models\Miembro;
use Illuminate\Http\Request;

class SociedadController extends Controller
{
    public function lista() //muestra la lista de sociedades
    {
        $sociedades = Sociedad::paginate(10);
        
        // Mostrar la vista mensajes
        return view('sociedades.lista', compact('sociedades'));
    }

    public function create() //retorna al formulario de registro de una sociedad
    {
        return view('sociedades.create');
    }

    public function store(Request $request) //registra la sociedad
    {
        Sociedad::create($request->all());

        return redirect()->route('sociedades.lista');
    }


    public function edit($nombre) //edita la informacion de una sociedad
    {
        $sociedad = Sociedad::where('nombre', $nombre)->firstOrFail();
        return view('sociedades.edit', compact('sociedad'));
    }




    public function update(SociedadRequest $request, $nombre) //actualiza la info de la sociedad
        {
            $sociedad = Sociedad::where('nombre', $nombre)->firstOrFail();

            $sociedad->update($request->all());
            
            return redirect()->route('sociedades.lista')->with('success', 'Sociedad actualizada correctamente.');
        }




    public function show($nombre) // muestra los datos de una sociedad, incluyendo los miembros
    {
        $sociedades = Sociedad::findOrFail($nombre);
        $miembros = Miembro::where('sociedad_id', $sociedades->id_sociedad)->paginate(10);
        $numeroMiembros = Miembro::where('sociedad_id', $sociedades->id_sociedad)->get();
        $totalMiembros = $numeroMiembros->count();
        $nombrePastor = Miembro::where('cedula', $sociedades->pastor)->value('nombres') .' '.  Miembro::where('cedula', $sociedades->pastor)->value('apellidos');
    
        // Obtener el nombre de la pastora
        $nombrePastora = Miembro::where('cedula', $sociedades->pastora)->value('nombres') .' '.  Miembro::where('cedula', $sociedades->pastora)->value('apellidos');
        
        // Verificar si se encontraron los nombres o manejar el caso si no se encuentran
        
        return view('sociedades.show', compact('sociedades', 'miembros', 'totalMiembros', 'nombrePastor', 'nombrePastora'));
}


}

