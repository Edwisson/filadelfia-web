@extends('layouts.app')

@section('content')
<section class="contenedor_mostrar_flex">
    <div class="mostrar">

        <h1>{{ $evento->tipo }}</h1>
        <p>Tipo: {{ $evento->tipo }}</p>
        <p>Fecha: {{ $evento->fecha }}</p>
        <p>Ubicación: {{ $evento->ubicacion }}</p>
        <p>Descripción:</p>
        <div class="mostrar_largo">
            <p> {{ $evento->descripcion }}</p>
        </div>
        <div class="boton">
             <a href="{{ url()->previous() }}">Volver</a>
             <a href="{{route('evento.edit', $evento)}}" >Editar</a> 
            <a href="{{route('evento.listaAsistencias', $evento)}}" >asistencias</a>
        </div>
       
        
    </div>
</section>
@endsection