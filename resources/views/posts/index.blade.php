<x-app-layout>
    <h1>Aqui se muestran todos los posts</h1>
    <a href="{{ route('posts.create') }}">Nuevo post</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>

    {{ $posts->links() }}
</x-app-layout>