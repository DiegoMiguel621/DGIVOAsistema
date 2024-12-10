@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/menuOpcionesEstilos.css') }}">
@endpush
@extends('base')
@section('title', 'Menu principal') <!-- Define el título específico de la página -->
@section('contenido')
<?php $user = session('user'); ?>
<section>
    <h1>contenido Menu</h1>
    

</section>
@endsection
