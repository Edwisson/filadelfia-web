@extends('layouts.app')

@section('content')
    <h1 class="titulo_lista">Mensajes</h1>
    <section class="contenedor_mensajes margin_container">
        <table border="1" class="tabla_mensajes">

        @foreach($contactos as $contacto)
            <tr>

                <td class="contenido_mensajes">
                    <a href="{{ route('intranet.show', ['id' => $contacto->id]) }}" >
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


