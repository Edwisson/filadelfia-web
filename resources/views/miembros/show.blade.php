@extends('layouts.app')

@section('content')
<h1>{{ $evento->tipo }}</h1>

<p>ID: {{ $evento->id }}</p>
<p>Tipo: {{ $evento->tipo }}</p>
<p>Fecha: {{ $evento->fecha }}</p>
<p>Ubicación: {{ $evento->ubicacion }}</p>
<p>Descripción: {{ $evento->descripcion }}</p>

<p>Fecha de creación: {{ $evento->created_at }}</p>
@endsection
