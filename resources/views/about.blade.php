<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel | About</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-3xl font-bold mb-4">About Page</h1>
        <h2>Hola desde el controlador de PostController</h2>
        <h3>El valor ingresado del parámetro es:{{$parametro}}</h3>
        <x-alert2 type="Warning" class="mb-4">
            <!-- slot es una variable que representa el contenido dentro del componente -->
            <x-slot name="title">Título de la alerta</x-slot>
            Este es un mensaje de alerta personalizado. 
        </x-alert2>
        <p>Hola mundo</p>
        <!-- Lista de componentes para botones -->
        <x-button type='success' id='success' class='mb-3'>Botón de Inicio</x-button>
        <x-button type='danger' id='danger'>Botón de Danger</x-button>
        <x-button type='warning' id='warning'>Botón de Warning</x-button>
    </div>
    <!-- El siguiente fragmento es el uso de directivas basadas en blade -->
    @if(!empty($nombre))
        <h4>El nombre ingresado es:{{$nombre}}</h4>
    @endif
</body>
</html>