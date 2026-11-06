<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 12 | Posts</title>
</head>
<body>
    <h1>Aqui se agregara un formulario par aun nuevo post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">
            Titulo:
            <input type="text" name="title" required>
        </label>
        <br>
        <br>
        <label for="category">
            Categoria:
            <input type="text" name="category" required>
        </label>
        <br>
        <br>
        <label for="content">
            Contenido:
            <textarea name="content" required></textarea>
        </label>
        <br>
        <br>
        <input type="submit" value="Crear Post">
    </form>
</body>
</html>