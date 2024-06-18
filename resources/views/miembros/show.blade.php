@extends('layouts.app')

@section('content')
    <h1>{{ $miembros->nombres }} {{ $miembros->apellidos }}</h1>


    
    <p>Cedula: {{ $miembros->cedula }}</p>
    <p>Nombre: {{ $miembros->nombres }}</p>
    <p>Apellido: {{ $miembros->apellidos }}</p>
    <p>Dirección: {{ $miembros->direccion }}</p>  
    <p>Teléfono: {{ $miembros->telefono }}</p>
    <p>Estado Civil: {{ $miembros->estado_civil }}</p>  
    <p>Edad: {{ $miembros->edad }}</p>  

    <p>Estado de Salud: {{ $miembros->estado_salud }}</p>  
    <p>Descripción de Salud: {{ $miembros->descripcion_salud }}</p>  
    <p>Estado Economico: {{ $miembros->estado_economico }}</p>  

    <p>Descripción Economica: {{ $miembros->descripcion_economica }}</p>  
    <p>Necesidades: {{ $miembros->necesidades }}</p>  
    <p>Bautizado: {{ $miembros->bautizado }}</p>  

    
    <p>Fecha de creación: {{ $miembros->created_at }}</p>
@endsection
