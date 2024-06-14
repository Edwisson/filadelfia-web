{{-- @extends('layouts.app')

@section('content')
    <h1>{{ $contacto->nombre }} {{ $contacto->apellido }}</h1>
    <p>Email: {{ $contacto->email }}</p>
    <p>Teléfono: {{ $contacto->telefono }}</p>
    <p>Mensaje: {{ $contacto->mensaje }}</p>
    <p>ID: {{ $contacto->id }}</p>
    <p>Fecha de creación: {{ $contacto->created_at }}</p>
@endsection
--}}





@extends('layouts.app')

@section('content')
    <h1>{{ $contactos->nombre }} {{ $contactos->apellido }}</h1>
    <p>Nombre: {{ $contactos->nombre }}</p>
    <p>Apellido: {{ $contactos->apellido }}</p>
    <p>Email: {{ $contactos->email }}</p>
    <p>Teléfono: {{ $contactos->telefono }}</p>
    <p>Mensaje: {{ $contactos->mensaje }}</p>
    <p>ID: {{ $contactos->id }}</p>
    <p>Fecha de creación: {{ $contactos->created_at }}</p>
@endsection
