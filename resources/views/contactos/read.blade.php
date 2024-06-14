@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<a href="{{ route('contactos.create') }}">Crear Contacto</a>
    <ul>
    
         @forelse ($contactos as $contacto)
            <li>Nombre:   {{ $contacto->nombre }}</li>
            <li>Apellido: {{ $contacto->apellido }}</li>
            <li>Email:    {{ $contacto->email }}</li>
            <li>Telefono: {{ $contacto->telefono }}</li>
            <li>Mensaje:  {{ $contacto->mensaje }}</li>
            
            <li>ID: {{ $contacto->id }}</li>
            <li>Creado en: {{ $contacto->created_at }}</li>
            <br/>
                
            @empty
                <p>No Hay nuevo Registros Actuales</p>
        @endforelse
    </ul>
@endsection




{{-- 
@extends('layouts.app')

@section('content')
    <h1>{{ $contactos->nombre }} {{ $contactos->apellido }}</h1>
    <p>Email: {{ $contactos->email }}</p>
    <p>Teléfono: {{ $contactos->telefono }}</p>
    <p>Mensaje: {{ $contactos->mensaje }}</p>
    <p>ID: {{ $contactos->id }}</p>
    <p>Fecha de creación: {{ $contactos->created_at }}</p>

@endsection --}}