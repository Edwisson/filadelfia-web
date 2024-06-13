@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<a href="{{ route('contactos.create') }}">Crear Contacto</a>
    <ul>
    {{-- Esto es para recorrer una lista, pero si no hay usamos el forelse para que no de error --}}
        @forelse ($contactos as $contacto)
        <li>Nombre:   {{ $contacto->nombre }}</li>
        <li>Apellido: {{ $contacto->apellido }}</li>
        <li>Email:    {{ $contacto->email }}</li>
        <li>Telefono: {{ $contacto->telefono }}</li>
        <li>Mensaje:  {{ $contacto->mensaje }}</li>
            
        @empty
            <p>No Hay nuevo Registros Actuales</p>
        @endforelse
    </ul>
@endsection