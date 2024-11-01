@extends('template')

@section('content')
<x-nav class="mb-4">
    <x-nav.link href="#">Cursos</x-nav.link>
    <x-nav.link href="#">Planes</x-nav.link>
    <x-nav.link href="#">Documentos</x-nav.link>
    
    <!-- class="rounded-full px-3 py-1 bg-gray-900 text-white" NO SE USA PORQUE LOS BLADE DE NAV NO ESTAN CONFIGURADOS CON MERGE -->
    <x-nav.link href="/login">Login</x-nav.link> 
    <x-nav.link href="/register">Registro</x-nav.link>
</x-nav>

<div class="container mx-auto px-4">
    <h1 class="text-3xl">Listado de ejemplos</h1>
    <hr class="my-4">

    <x-flash>Mensaje de OK</x-flash>
    <x-flash type="error">Mensaje de ERROR</x-flash>
    <x-flash type="info">Mensaje de INFORMACION</x-flash>
    <x-flash type="warning">Mensaje de ADVERTENCIA</x-flash>

    <hr class="my-4">
    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
        <x-card
            img="https://images.unsplash.com/photo-1726711340790-ccaa3ae7e0c9?"
            date="Noviembre, 2024"
            title="Lorem ipsum dolor sit amet"
            content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus ut libero ultrices ultricies. Nullam nec purus ut libero ultrices ultricies."
        ></x-card>
        <x-card
            img="https://images.unsplash.com/photo-1729974354513-758c8a5d196d?"
            date="Noviembre, 2024"
            title="Lorem ipsum dolor sit amet"
            content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus ut libero ultrices ultricies. Nullam nec purus ut libero ultrices ultricies."
        ></x-card>
        <x-card
            img="https://images.unsplash.com/photo-1728873212984-68b67420bccc?"
            date="Noviembre, 2024"
            title="Lorem ipsum dolor sit amet"
            content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus ut libero ultrices ultricies. Nullam nec purus ut libero ultrices ultricies."
        ></x-card>
        <x-card
            img="https://images.unsplash.com/photo-1730344968874-260056df2de6?"
            date="Noviembre, 2024"
            title="Lorem ipsum dolor sit amet"
            content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus ut libero ultrices ultricies. Nullam nec purus ut libero ultrices ultricies."
        ></x-card>
    </div>
</div>
@endsection