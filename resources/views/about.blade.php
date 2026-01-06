<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel | About</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-3xl font-bold mb-4">About Page</h1>
        <h2>Hola desde el controlador de PostController</h2>
        <h3>El valor ingresado del parámetro es:{{$parametro}}</h3>
        <x-alert type="Danger" class="mb-4">
            <!-- slot es una variable que representa el contenido dentro del componente -->
            <x-slot name="title">Título de la alerta</x-slot>
            Este es un mensaje de alerta personalizado. 
        </x-alert>
        <p>Hola mundo</p>
    </div>
    <!-- El siguiente fragmento es el uso de directivas basadas en blade -->
    @if(!empty($nombre))
        <h4>El nombre ingresado es:{{$nombre}}</h4>
    @endif
</body>
</html>