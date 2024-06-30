<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\MiembroEvento;
use App\Models\Miembro;
use App\Models\Sociedad;

class MiembroController extends Controller
{

    public function listas(Request $request)
    {
        $query = $request->get('query'); // Obtener el término de búsqueda desde la URL

        // Obtener todos los miembros o filtrar por búsqueda
        $miembrosQuery = Miembro::query();
        
        if ($query) {
            $miembrosQuery->where('cedula', $query)
                          ->orWhere('nombres', 'like', '%' . $query . '%')
                          ->orWhere('apellidos', 'like', '%' . $query . '%');
        }

        $miembros = $miembrosQuery->paginate(10); // Paginar resultados
        $totalMiembros = Miembro::count();

        // Retornar la vista con los resultados de la búsqueda y el término de búsqueda
        return view('miembros.miembros', compact('miembros', 'totalMiembros', 'query'));
    }

    public function create()
    {
        return view('miembros.create');
    }

    public function store(Request $request)
    {
        // Convertir tipos de datos manualmente
        $data = $request->all();
        $data['cedula'] = (int) $data['cedula'];
        $data['telefono'] = (int) $data['telefono'];
        $data['edad'] = (int) $data['edad'];
        $data['bautizado'] = (bool) $data['bautizado'];
        
        // Asignar la sociedad_id dinámicamente
        $sociedadNombre = $this->determinarSociedad($data['edad'], $data['genero']);
        $sociedad = Sociedad::where('nombre', $sociedadNombre)->first();
        if ($sociedad) {
            $data['sociedad_id'] = $sociedad->id_sociedad;
        }
    
        // Crear una instancia de Request con los datos ajustados
        $adjustedRequest = new Request($data);
    
        // Validar los datos ajustados
        $validatedData = $adjustedRequest->validate([
            'cedula' => 'required|integer',
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|integer',
            'estado_civil' => 'required|in:soltero,casado,viudo',
            'edad' => 'required|integer|min:0',
            'estado_salud' => 'required|string|max:255',
            'descripcion_salud' => 'nullable|string',
            'estado_economico' => 'required|string|max:255',
            'descripcion_economica' => 'nullable|string',
            'necesidades' => 'nullable|string',
            'bautizado' => 'required|boolean',
            'genero' => 'required|string|max:255',
            'sociedad_id' => 'required|integer'
        ]);
        
        // Crear el nuevo miembro
        Miembro::create($validatedData);
    
        return redirect()->route('miembros.miembros');
    }

    private function determinarSociedad($edad, $genero)
    {
        switch (true) {
            case $edad >= 0 && $edad <= 8:
                return 'Niños';
            case $edad >= 9 && $edad <= 11:
                return 'Preadolescentes';
            case $edad >= 12 && $edad <= 17:
                return 'Adolescentes';
            case $edad >= 18 && $edad <= 29:
                return 'Jóvenes';
            case $edad >= 30:
                return $genero === 'hombre' ? 'Caballeros' : 'Damas';
            default:
                return 'Otra Sociedad'; // Manejar caso por defecto o error
        }
    }

    public function show($cedula)
    {
        $miembro = Miembro::findOrFail($cedula);
        return view('miembros.show', compact('miembro'));
    }

    public function edit(Miembro $miembro)
    {
        return view('miembros.edit', compact('miembro'));
    }

    public function update(Request $request, Miembro $miembro): RedirectResponse
    {
        $validatedData = $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|integer',
            'estado_civil' => 'required|in:soltero,casado,viudo',
            'edad' => 'required|integer|min:0',
            'estado_salud' => 'required|string|max:255',
            'descripcion_salud' => 'nullable|string',
            'estado_economico' => 'required|string|max:255',
            'descripcion_economica' => 'nullable|string',
            'necesidades' => 'nullable|string',
            'bautizado' => 'required|boolean',
            'genero' => 'required|string|max:255',
            'sociedad_id' => 'required|integer'
        ]);

        $miembro->update($validatedData);

        return redirect()->route('miembros.miembros')->with('success', 'Miembro actualizado exitosamente');
    }

    public function destroy(Miembro $miembro): RedirectResponse
    {
        $miembro->delete();

        return redirect()->route('miembros.miembros')->with('success', 'Miembro eliminado exitosamente');
    }

    public function asistencias(Miembro $miembro)
    {
        // Obtener las asistencias directamente usando el modelo pivote
        $asistencias = MiembroEvento::where('miembro', $miembro->cedula)->join('eventos', 'miembros-eventos.evento', '=', 'eventos.id')
            ->select('eventos.*')
            ->get();
        $totalAsistencias = $asistencias->count();

        return view('miembros.listaAsistencias', compact('asistencias', 'totalAsistencias', 'miembro'));
    }

}
