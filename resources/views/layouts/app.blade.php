<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel 12')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @stack('css')
    {{-- La diferencia entre yield y stack es que yield se usa para inyectar una unica vez --}}
    {{-- Mientras que stack se usa para inyectar multiples veces y se le va stackeando cada vez que se llama --}}
</head>
<body>
    <header></header>

    {{-- con yield se crean una plantillas y tiene la funcion de crear un espacio para que se pueda inyectar contenido en la plantilla, 
    es decir, se puede crear una plantilla y luego en otra vista se puede inyectar contenido en ese espacio creado con yield.     --}}
    @yield('content') 

    
    <footer></footer>
</body>
</html>