<x-app-layout>
    <h1>Aqui se agregara un formulario par aun nuevo post</h1>
    <form action="/posts/{{ $post->id }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="title">
            Titulo:
            <input type="text" name="title" required value="{{ $post->title }}">
        </label>
        <br>
        <br>
        <label for="category">
            Categoria:
            <input type="text" name="category" required value="{{ $post->category }}">
        </label>
        <br>
        <br>
        <label for="content">
            Contenido:
            <textarea name="content" required>{{ $post->content }}</textarea>
        </label>
        <br>
        <br>
        <input type="submit" value="Actualizar Post">
    </form>
</x-app-layout>