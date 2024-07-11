<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{

    public function index()
    {
        $contactos = Contacto::all();
        return view('contactos.read', compact('contactos')); 
    }



    public function intranetMensajes() //muestra los mensajes de contacto
    {
        $contactos = Contacto::paginate(10);
        
        
        // Mostrar la vista 'intranet.mensajes'
        return view('intranet.mensajes', compact('contactos'));
    }





    public function create() // retorna a la vista con el formulario de contacto
    {
        return view('contactos.create');
        
    }


    public function store(Request $request) // registra el mensaje de contacto
    {
        Contacto::create($request->all());

        return redirect()->route('contactos.create');
    }



    public function show($id) //muestra el contenido de un mensaje
    {
    $contactos = Contacto::findOrFail($id);
    
    return view('intranet.show', compact('contactos'));
    }


}


