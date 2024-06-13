@extends('layouts.app')

@section('title', 'Crear')

@section('content')
<a href="{{ route('contactos.index') }}">Inicio</a>
    <h1>Formulario de Contacto</h1>
    <form action="{{ route('contacto.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br><br>

        <label for="apellido">Apellido:</label><br>
        <input type="text" id="apellido" name="apellido"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="telefono">Teléfono:</label><br>
        <input type="tel" id="telefono" name="telefono"><br><br>

        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" rows="4"></textarea><br><br>

        <button type="submit">Enviar</button>
    </form>
@endsection
