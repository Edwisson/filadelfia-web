@extends('layouts.app')

@section('content')
    <h1>Lista de Contactos</h1>
    <table border="1">

        @foreach($contactos as $contacto)
            <tr>

                <td>
                    <p>
                        {{ $contacto->nombre }}
                        {{ $contacto->apellido }}
                        {{ $contacto->id }}
                        {{ $contacto->created_at }}
                    </p>

                    <a href="{{ route('intranet.show', ['id' => $contacto->id]) }}">ENLACE {{$contacto->id}}</a>
                </td>

            </tr>
        @endforeach
    </table>
    {{ $contactos->links() }}
@endsection


