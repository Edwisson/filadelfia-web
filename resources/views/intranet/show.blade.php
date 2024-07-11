@extends('layouts.app')

@section('content')
<section class="contenedor_mostrar_flex">
    <div class="mostrar">
        <h1>{{ $contactos->nombre }} {{ $contactos->apellido }}</h1>
        <p>Email: {{ $contactos->email }}</p>
        <p>Teléfono: {{ $contactos->telefono }}</p>
        <p>Fecha de creación: {{ $contactos->created_at }}</p>
        <p>Mensaje: </p>
        <div class="mostrar_largo">
            <p>
                {{ $contactos->mensaje }}
            </p>
        </div>
    </div>
</section>


@endsection