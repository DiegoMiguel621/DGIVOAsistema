@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/visitasEstilos.css') }}">
@endpush
@extends('base')
@section('title', 'Visitas') <!-- Define el título específico de la página -->
@section('contenido')
<?php $user = session('user'); ?>
<section>
    <h1>contenido Visitas</h1>


</section>
@endsection
