{{-- Componente de alerta anonimo para Laravel --}}

{{-- valor por defecto del tipo de alerta, si no se pasa un valor, será 'info' --}}
@props(['type' => 'info']) 

@php
    switch ($type) {
        case 'info':
            $class = 'bg-blue-100 text-blue-800';
            break;
            
        case 'success':
            $class = 'bg-green-100 text-green-800';
            break;
        case 'warning':
            $class = 'bg-yellow-100 text-yellow-800';
            break;
        case 'error':
            $class = 'bg-red-100 text-red-800';
            break;
        default:
            $class = 'bg-gray-100 text-gray-800';
    }
@endphp

<div  {{ $attributes -> merge(['class' => 'p-4 text-sm rounded-lg ' . $class]) }} role="alert">
    <span class="font-medium">{{$title ?? 'Information Alert!'}}</span> {{ $slot }}

</div>