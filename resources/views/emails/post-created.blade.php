{{-- <x-mail::message>
    <h1> Correo por aprobar </h1>
    <p>Se ha creado un nuevo post que necesita ser aprovado</p>
    <a href="{{ route('posts.show',$post) }}">Click para aprovarlo</a>
</x-mail::message> --}}
<x-mail::message>
    # Correo por aprobar
    <x-mail::panel>
        Se ha creado un nuevo post que necesita ser aprovado
    </x-mail::panel>
    <x-mail::button :url="route('posts.show',$post) ">
        Click para aprovarlo
    </x-mail::button>
</x-mail::message>
