{{-- Forma 1 de crear una plantilla con uso de componentes --}}
{{-- <x-app-layout>
    <div class ="max-w-4xl mx-auto px-4 ">
        <h1>Bienvenido a Laravel 12</h1>
        {{-- Llamo al comonente creado usando x-{nombre del componente} -}}
        <x-alert2 type="warning" class='mb-4'>
            <x-slot name="title">
                Informacion wuuu
            </x-slot>
            Contenido del alert
        </x-alert2>
        <p> Hola mundo</p>
    </div>
</x-app-layout> --}}

{{-- Forma 2 de crear una plantilla con uso de layouts --}}
@extends('layouts.app') 

{{-- Otra manera pasar contenido pero es solo de una sola linea --}}
@section('title', 'Bienvenido a Laravel 12')
    
{{-- Funciona con la directiva stack --}}
@push('css')
    <style>
        body{
            background-color: #f3f3f3;
        }
    </style>
@endpush

@section('content')
    <div class ="max-w-4xl mx-auto px-4 ">
        <h1>Bienvenido a Laravel 12</h1>
        {{-- Llamo al comonente creado usando x-{nombre del componente} --}}
        <x-alert2 type="warning" class='mb-4'>
            <x-slot name="title">
                Informacion wuuu
            </x-slot>
            Contenido del alert
        </x-alert2>
        <p> Hola mundo</p>
    </div>
@endsection