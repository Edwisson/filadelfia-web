@extends('layouts.app')

@section('content')

<h1>Lista de Mensajes</h1>
<section class="contenedor_tabla_mensajes margin_container">
    <table border="1" class="tabla_mensajes">

    @foreach($eventos as $evento)
        <tr>
            <td class="contenido_mensajes">
                <a href="{{ route('evento.show', ['id' => $evento->id]) }}">
                    {{ $evento->tipo }}
                </a>
                <p>
                    Fecha: {{ $evento->fecha }}
                </p>
                <p>
                    Ubicación: {{ $evento->ubicacion }}
                </p>
                <p>
                    Descripción: {{ $evento->descripcion }}
                </p>
            </td>
        </tr>
    @endforeach
    </table>
</section>

{{ $eventos->links() }}
@endsection