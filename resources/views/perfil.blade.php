@push('styles')
<link rel="stylesheet" type="text/css" href="css/perfilEstilos.css">
@endpush
@extends('base')
@section('title', 'Perfil') <!-- Define el título específico de la página -->
@section('contenido')
<?php $user = session('user'); ?>

<div class="profile-container">
    <!-- Imagen del perfil -->
    <div class="profile-image">
        <img src="images/perfil.png" alt="Imagen de Perfil" class="image">
        <a>
            <i class="fa-solid fa-pen-to-square fa-2xl" style="color: #000000;"></i>
        </a>
    </div>

    <!-- Información del empleado -->
    <div class="profile-info">
        <h1>{{ $user->primerNombre }} {{ $user->segundoNombre }} {{ $user->apPaterno }} {{ $user->apMaterno }}</h1>
        <p><strong>Correo:</strong> {{ $user->correo }}</p>
        <p><strong>Dirección:</strong> {{ $user->direccion }}</p>
    </div>
</div>


    


@endsection
