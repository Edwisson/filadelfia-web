@extends('layouts.app')

@section('content')
<section class="margin_container contenedor_mensaje">
     <div class="mensaje">
        <h1>{{ $contactos->nombre }} {{ $contactos->apellido }}</h1>
        <p>Email: {{ $contactos->email }}</p>
        <p>Teléfono: {{ $contactos->telefono }}</p> 
        <p>Fecha de creación: {{ $contactos->created_at }}</p>
        <p>Mensaje: {{ $contactos->mensaje }}</p>
    </div>
</section>
   
    
@endsection
