@extends('layouts.app')

@section('content')

<section class="contenedor_mostrar_flex">
    <div class="mostrar_grande">
        <h1>{{ $miembros->nombres }} {{ $miembros->apellidos }}</h1>
        <table class="mostrar_tabla">
            <tr>
                <td>Cédula</td>
                <td>{{ $miembros->cedula }}</td>
            </tr>
            <tr>
                <td>Dirección</td>
                <td>{{ $miembros->direccion }}</td>
            </tr>
            <tr>
                <td>Teléfono</td>
                <td>{{ $miembros->telefono }}</td>
            </tr>
            <tr>
                <td>Estado Civil</td>
                <td>{{ $miembros->estado_civil }}</td>
            </tr>
            <tr>
                <td>Bautizado</td>
                <td>{{ $miembros->bautizado }}</td>
            </tr>
            <tr>
                <td>Edad</td>
                <td>{{ $miembros->edad }}</td>
            </tr>
            <tr>
                <td>Estado de Salud</td>
                <td>{{ $miembros->estado_salud }}</td>
            </tr>
            <tr>
                <td>Descripción de Salud</td>
                <td>{{ $miembros->descripcion_salud }}</td>
            </tr>
            <tr>
                <td>Estado Económico</td>
                <td>{{ $miembros->estado_economico }}</td>
            </tr>
            <tr>
                <td>Descripción Económica</td>
                <td>{{ $miembros->descripcion_economica }}</td>
            </tr>
            <tr>
                <td>Necesidades</td>
                <td>{{ $miembros->necesidades }}</td>
            </tr>
        </table>
        <a href="{{route('miembros.edit', $miembros)}}" class="btn btn-primary">Editar</a>
    </div>
</section>

@endsection