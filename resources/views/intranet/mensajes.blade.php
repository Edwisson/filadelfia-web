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
</section>

{{ $contactos->links() }}
@endsection