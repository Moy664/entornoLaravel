<x-app-layout>
    <h1>Aqui se muestran todos los posts</h1>
    <a href="/posts/create">Nuevo post</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
</x-app-layout>