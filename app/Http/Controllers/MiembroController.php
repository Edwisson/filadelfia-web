<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Miembro;
use App\Models\Sociedad;
use App\Models\MiembroSociedad;

class MiembroController extends Controller
{
    public function mensajes()
    {
        $miembros = Miembro::paginate(10);
        return view('miembros.miembros', compact('miembros'));
    }

    public function create()
    {
        return view('miembros.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'cedula' => 'required|string|max:255|unique:miembros,cedula',
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'estado_civil' => 'required|string|max:255',
            'edad' => 'required|integer',
            'estado_salud' => 'required|string|max:255',
            'descripcion_salud' => 'nullable|string',
            'estado_economico' => 'required|string|max:255',
            'descripcion_economica' => 'nullable|string',
            'necesidades' => 'nullable|string',
            'bautizado' => 'required|boolean',
            'genero' => 'required|string|max:255', // Asegúrate de que 'genero' esté incluido en el formulario
        ]);

        // Crear un nuevo miembro
        $miembro = Miembro::create($validatedData);

        // Determinar la sociedad en base a la edad y género del miembro
        $sociedadNombre = $this->determinarSociedad($miembro->edad, $miembro->genero);
        $sociedad = Sociedad::where('nombre', $sociedadNombre)->first();

        if ($sociedad) {
            // Asignar la sociedad al miembro
            MiembroSociedad::create([
                'miembro' => $miembro->cedula,
                'sociedad' => $sociedad->nombre,
            ]);
        }

        return redirect()->route('miembros.miembros')->with('success', 'Miembro registrado exitosamente');
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
                if ($genero == 'hombre') {
                    return 'Caballeros';
                } else {
                    return 'Damas';
                }
            default:
                return 'No pertenece a ninguna sociedad';
        }
    }
    
    public function show($cedula)
    {
        $miembro = Miembro::findOrFail($cedula);
        return view('miembros.show', compact('miembro'));
    }
}
