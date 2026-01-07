@extends('layouts.app')

<!-- Si el contenido abarca más de una líne se puede utilizar la siguiente estructura, caso contrario se puede utilizar la misma directiva de section pasando como segundo parametro el nombre del título-->
@section('title', 'Laravel 12 | Contacto')

@push('css')
    <style>
        body{
            background-color: #f3f3f3;
        }
    </style>
@endpush

@push('css')
    <style>
        h1{
            color: red;
        }
    </style>
@endpush

@section('content')
    <div class="max-w-4xl mx-auto px-4">
        <h1>Entrando a la sección de Contacto</h1>
        <p>Aquí va el contenido del contacto</p>
    </div>
@endsection
