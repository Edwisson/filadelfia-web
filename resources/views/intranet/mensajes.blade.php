@extends('layouts.app')

@section('content')
<h1 class="titulo_listas">Mensajes</h1>
<section class="contenedor_listas margin_container">
    <table border="1" class="tabla_listas">

        @foreach($contactos as $contacto)
        <tr>

            <td class="contenido_listas">
                <a href="{{ route('intranet.show', ['id' => $contacto->id]) }}">
                    {{$contacto->nombre}} {{ $contacto->apellido }}
                    <p>
                        {{ $contacto->created_at }}
                    </p>
                </a>

            </td>

        </tr>
        @endforeach
    </table>
    <div class="boton">
        <a href="{{ url()->previous() }}">Volver</a>
        <a href="{{ route('contactos.create')}}">Crear</a> 
    </div>
</section>

{{ $contactos->links() }}
@endsection