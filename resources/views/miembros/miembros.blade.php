@extends('layouts.app')

@section('content')
<div class="container">
    <section class="margin_container info_listas">
        <h1>Miembros</h1>
        <p class="contenido_listas">Miembros totales: {{ $totalMiembros }} </p>
    </section>

    <section class="contenedor_listas margin_container">
        <form action="{{ route('miembros.miembros') }}" method="GET" class="busqueda">
            <div class="input-group">
                <input type="text" class="inputs_contacto" placeholder="Buscar por cédula o nombre" name="query" value="{{ $query }}">
                <button class="boton_contacto" type="submit">Buscar</button>
            </div>
        </form>

        <table border="1" class="tabla_listas">
            @foreach($miembros as $miembro)
            <tr>
                <td class="contenido_listas">
                    <a href="{{ route('miembros.show', ['cedula' => $miembro->cedula]) }}">
                        {{ $miembro->nombres }} {{ $miembro->apellidos }} {{ $miembro->cedula }}
                        <p>{{ $miembro->created_at }}</p>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>

        {{ $miembros->appends(['query' => $query])->links() }} <!-- Paginación con término de búsqueda -->
    </section>
</div>
@endsection
