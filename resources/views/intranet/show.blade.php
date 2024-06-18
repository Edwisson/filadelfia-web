@extends('layouts.app')

@section('content')
    <h1>{{ $contactos->nombre }} {{ $contactos->apellido }}</h1>
    <p>Email: {{ $contactos->email }}</p>
    <p>Teléfono: {{ $contactos->telefono }}</p>
    <p>Mensaje: {{ $contactos->mensaje }}</p>
    <p>Fecha de creación: {{ $contactos->created_at }}</p>
@endsection
