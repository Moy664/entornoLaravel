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

    {{-- @if ($errors->any())
        <div>
            <h2>Errors:</h2>
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">
            Titulo:
            <input type="text" name="title" value="{{old('title')}}">
        </label>
        @error('title')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <br>
        <label for="slug">
            Slug:
            <input type="text" name="slug" value="{{old('slug')}}" >
        </label>
        @error('slug')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <br>
        <label for="category">
            Categoria:
            <input type="text" name="category" value="{{old('category')}}" >
        </label>
        @error('category')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <br>
        <label for="content">
            Contenido:
            <textarea name="content" >{{old('content')}}</textarea>
        </label>
        @error('content')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <br>
        <input type="submit" value="Crear Post">
    </form>
</body>
</html>