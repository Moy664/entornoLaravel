{{-- Componente de clase para alertas en Laravel, este componente es un ejemplo de como crear un componente de clase en Laravel, el cual permite crear componentes mas complejos y reutilizables. --}}
{{-- Se crea una carpeta dentro de app/View/Components donde separa logica de la vista --}}

<div  {{ $attributes -> merge(['class' => 'p-4 text-sm rounded-lg ' . $class]) }} role="alert">
    <span class="font-medium">{{$title ?? 'Information Alert!'}}</span> {{ $slot }}
</div>