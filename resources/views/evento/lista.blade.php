@extends('layouts.app')

@section('content')

<h1 class="titulo_listas">Eventos</h1>
<section class="contenedor_listas margin_container">
    <table border="1" class="tabla_listas">

        @foreach($eventos as $evento)
        <tr>
            <td class="contenido_listas">
                <a href="{{ route('evento.show', ['id' => $evento->id]) }}">
                    {{ $evento->tipo }}
                    <p>
                        Fecha: {{ $evento->fecha }}
                    </p>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="boton">
        <a href="{{ url()->previous() }}">Volver</a>
        <a href="{{route('evento.create')}}">Crear</a>
    </div>
</section>

{{ $eventos->links() }}
@endsection