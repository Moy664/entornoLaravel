<x-app-layout>
    <h1>Aqui se agregara un formulario par aun nuevo post</h1>
    <form action="{{route('posts.update', $post)}}" method="POST">
        @csrf
        @method('PATCH')
        <label for="title">
            Titulo:
            <input type="text" name="title" value="{{ old('title',$post->title) }}">
        </label>
        @error('title')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <br>
        <label for="slug">
            Slug:
            <input type="text" name="slug" value="{{old('slug',$post->slug)}}">
        </label>
        @error('slug')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <br>
        <label for="category">
            Categoria:
            <input type="text" name="category" value="{{ old('category',$post->category) }}">
        </label>
        @error('category')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <br>
        <label for="content">
            Contenido:
            <textarea name="content" >{{ old('content',$post->content) }}</textarea>
        </label>
        @error('content')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <br>
        <input type="submit" value="Actualizar Post">
    </form>
</x-app-layout>