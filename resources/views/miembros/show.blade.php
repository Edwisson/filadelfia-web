@extends('layouts.app')

@section('content')

<section class="contenedor_mostrar_flex">
    <div class="mostrar_grande">
        <h1>{{ $miembro->nombres }} {{ $miembro->apellidos }}</h1>
        <table class="mostrar_tabla">
            <tr>
                <td>Cédula</td>
                <td>{{ $miembro->cedula }}</td>
            </tr>
            <tr>
                <td>Dirección</td>
                <td>{{ $miembro->direccion }}</td>
            </tr>
            <tr>
                <td>Teléfono</td>
                <td>{{ $miembro->telefono }}</td>
            </tr>
            <tr>
                <td>Estado Civil</td>
                <td>{{ $miembro->estado_civil }}</td>
            </tr>
            <tr>
                <td>Bautizado</td>
                <td>{{ $miembro->bautizado }}</td>
            </tr>
            <tr>
                <td>Edad</td>
                <td>{{ $miembro->edad }}</td>
            </tr>
            <tr>
                <td>Estado de Salud</td>
                <td>{{ $miembro->estado_salud }}</td>
            </tr>
            <tr>
                <td>Descripción de Salud</td>
                <td>{{ $miembro->descripcion_salud }}</td>
            </tr>
            <tr>
                <td>Estado Económico</td>
                <td>{{ $miembro->estado_economico }}</td>
            </tr>
            <tr>
                <td>Descripción Económica</td>
                <td>{{ $miembro->descripcion_economica }}</td>
            </tr>
            <tr>
                <td>Necesidades</td>
                <td>{{ $miembro->necesidades }}</td>
            </tr>
        </table>
        <a href="{{route('miembros.edit', $miembros)}}" class="btn btn-primary">Editar</a>
    </div>
</section>

@endsection