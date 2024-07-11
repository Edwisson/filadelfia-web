@extends('layouts.app')

@section('content')
<section class="margin_container info_listas ">
    <h1>{{ $evento->tipo }} <span>{{ $evento->fecha }}</span></h1>
    <p class="contenido_listas">Asistencias totales: {{ $totalAsistencias}} </p>
</section>
<section class="contenedor_listas margin_container">
    <form action="{{ route('evento.listaAsistencias', $evento) }}" method="GET" class="busqueda">
        <div class="input-group">
            <input type="text" class="inputs_contacto" placeholder="Buscar por cédula o nombre" name="query" value="{{ $query }}">
            <button class="boton_contacto" type="submit">Buscar</button>
        </div>
    </form>

    <table border="1" class="tabla_listas">

        @foreach($asistencias as $asistencia)
        <tr>
            <td class="contenido_listas">
                <a href="{{ route('miembros.show', ['cedula' => $asistencia->cedula]) }}">
                    {{ $asistencia->nombres }}
                    {{ $asistencia->apellidos }}
                </a>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="boton"> <a href="{{ url()->previous() }}">Volver</a></div>
</section>


@endsection