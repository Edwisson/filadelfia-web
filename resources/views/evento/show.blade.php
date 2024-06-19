<!DOCTYPE html>
<html>
<head>
    <title>Información del Evento</title>
</head>
<body>
    <h1>Información del Evento</h1>
    <p>Evento ID: {{ $evento->id }}</p>
    <p>Tipo: {{ $evento->tipo }}</p>
    <p>Fecha: {{ $evento->fecha }}</p>
    <p>Ubicación: {{ $evento->ubicacion }}</p>
    <p>Descripción: {{ $evento->descripcion }}</p>
    <p><a href="{{ route('evento.create') }}">Crear nuevo evento</a></p>
    <a href="{{ url('/evento/create') }}" class="boton-atras">Volver al formulario de creación</a>
</body>
</html>