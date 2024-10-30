@extends('template')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-3xl">Listado de ejemplos</h1>
    <hr class="my-4">

    <x-flash>Mensaje de OK</x-flash>
    <x-flash type="error">Mensaje de ERROR</x-flash>
    <x-flash type="info">Mensaje de INFORMACION</x-flash>
    <x-flash type="warning">Mensaje de ADVERTENCIA</x-flash>
</div>
@endsection