<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 12 | Posts</title>
</head>
<body>
    <!-- <h1>Aqui se mostrara el post <?php 
        // echo $post; 
        ?>
        </h1> -->
    {{-- <h1>Aqui se mostrara el post 
        <?= 
    // $post; 
    ?>
    </h1> --}}
    {{-- //esta es la forma correcta de mostrar una variable en blade, ya que esta escapara los caracteres especiales y evitara ataques de inyeccion de codigo --}}
    <a href="{{route('posts.index')}}">Volver a posts</a>
    <h1>Titulo: {{ $post->title }} </h1> 
    <p>
        <b>Categoria: </b> {{ $post->category }} 
        {{-- //esta es la forma correcta de mostrar una variable en blade, ya que esta escapara los caracteres especiales y evitara ataques de inyeccion de codigo --}}
    </p>

    <p>
        {{ $post->content }} 
        {{-- //esta es la forma correcta de mostrar una variable en blade, ya que esta escapara los caracteres especiales y evitara ataques de inyeccion de codigo --}}
    </p>

    <a href="{{ route('posts.edit', $post->id) }}">Editar posts</a>

    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar post</button>
    </form>

    {{-- Funciones directivas para modificar la vista conforme a las necesidades, las directivas son con @ --}}
    {{-- @if(true)
        <p>Es verdadero</p>
    @endif

    @if(false)
        <p>Es falso</p>
    @elseif(true)
        <p>Es verdadero</p>
    @else
        <p>Es falso</p>
    @endif --}}

</body>
</html>