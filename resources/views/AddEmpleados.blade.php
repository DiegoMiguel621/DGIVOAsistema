@push('styles')
<link rel="stylesheet" type="text/css" href="css/AddEmpleadosEstilos.css">
@endpush
@extends('base')
@section('title', 'Agregrar Empleado') <!-- Define el título específico de la página -->
@section('contenido')
<?php $user = session('user'); ?>
<div class="form-container">
    <h1>Agregar Nuevo Empleado</h1>
    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="primerNombre">Primer Nombre</label>
            <input type="text" id="primerNombre" name="primerNombre" required>
        </div>
        <div class="form-group">
            <label for="segundoNombre">Segundo Nombre</label>
            <input type="text" id="segundoNombre" name="segundoNombre">
        </div>
        <div class="form-group">
            <label for="apPaterno">Apellido Paterno</label>
            <input type="text" id="apPaterno" name="apPaterno" required>
        </div>
        <div class="form-group">
            <label for="apMaterno">Apellido Materno</label>
            <input type="text" id="apMaterno" name="apMaterno">
        </div>
        <div class="form-group">
            <label for="correo">Correo Electrónico</label>
            <input type="email" id="correo" name="correo" required>
        </div>
        <div class="form-group">
            <label for="contraseña">Contraseña</label>
            <input type="password" id="contraseña" name="contraseña" required>
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <select id="direccion" name="direccion" required>
                <option value="DICO">DICO</option>
                <option value="DEROA">DEROA</option>
                <option value="General">General</option>
            </select>
        </div>
        <button type="submit" class="btn-guardar">Guardar</button>
    </form>
</div>
@endsection