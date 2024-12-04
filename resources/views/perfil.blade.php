@push('styles')
<link rel="stylesheet" type="text/css" href="css/perfilEstilos.css">
@endpush
@extends('base')
@section('title', 'Perfil') <!-- Define el título específico de la página -->
@section('contenido')
<?php $user = session('user'); ?>
<section>
    <h1>contenido perfil</h1>
    

</section>
@endsection
