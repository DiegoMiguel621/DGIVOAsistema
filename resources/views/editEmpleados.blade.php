@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/editEmpleadosEstilos.css') }}">
@endpush
@extends('base')
@section('title', 'Modificar Empleado') <!-- Define el título específico de la página -->
@section('contenido')
<?php $user = session('user'); ?>

<div class="form-container">
    <h1>Modificar los datos del Empleado</h1>
    <form action="{{ route('empleados.update', $empleado->idUser) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group">
                <label for="primerNombre">Primer Nombre</label>
                <input type="text" id="primerNombre" name="primerNombre" value="{{ $empleado->primerNombre }}" required>
            </div>
            <div class="form-group">
                <label for="segundoNombre">Segundo Nombre</label>
                <input type="text" id="segundoNombre" name="segundoNombre" value="{{ $empleado->segundoNombre }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="apPaterno">Apellido Paterno</label>
                <input type="text" id="apPaterno" name="apPaterno" value="{{ $empleado->apPaterno }}" required>
            </div>
            <div class="form-group">
                <label for="apMaterno">Apellido Materno</label>
                <input type="text" id="apMaterno" name="apMaterno" value="{{ $empleado->apMaterno }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="correo">Correo Electrónico</label>
                <input type="email" id="correo" name="correo" value="{{ $empleado->correo }}" required>
            </div>
            <div class="form-group">
                <label for="contraseña">Nueva Contraseña</label>
                <input type="password" id="contraseña" name="contraseña">
                <small>(Dejar vacío para mantener la contraseña actual)</small>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="direccion">Dirección</label>
                <select id="direccion" name="direccion" required>
                    <option value="DICO" {{ $empleado->direccion == 'DICO' ? 'selected' : '' }}>DICO</option>
                    <option value="DEROA" {{ $empleado->direccion == 'DEROA' ? 'selected' : '' }}>DEROA</option>
                    <option value="General" {{ $empleado->direccion == 'General' ? 'selected' : '' }}>General</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn-guardar">Guardar Cambios</button>
    </form>
</div>
@endsection