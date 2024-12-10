@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/EmpleadosEstilos.css') }}">
@endpush
@extends('base')
@section('title', 'Gestión de Empleados') <!-- Define el título específico de la página -->
@section('contenido')
<?php $user = session('user'); ?>

<div class="empleados-container">
    <!-- Contenedor del título y botón -->
    <div class="header-container">
        <h1>Empleados de DGIVOA</h1>
        <a href="{{ route('addEmpleados') }}" class="add-employee-button">Alta de nuevo empleado</a>
    </div>

    <!-- Tabla de empleados -->
    <table class="empleados-table">
        <thead>
            <tr style="background-color: #9A566A; color: white;">
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo Electrónico</th>
                <th>Dirección</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->primerNombre }}</td>
                <td>{{ $usuario->segundoNombre }}</td>
                <td>{{ $usuario->apPaterno }}</td>
                <td>{{ $usuario->apMaterno }}</td>
                <td>{{ $usuario->correo }}</td>
                <td>{{ $usuario->direccion }}</td>
                <td class="opciones">
                    <div class="cont-iconOpcEmp">
                        <a href="{{ route('empleados.edit', $usuario->idUser) }}">
                            <i class="fa-solid fa-pen-to-square fa-lg" style="color: #000000;"></i>
                        </a>
                    </div>
                    <div class="cont-iconOpcEmp">
                        <i class="fa-solid fa-key" style="color: #000000;"></i>
                    </div>
                    <div class="cont-iconOpcEmp">
                        <i class="fa-solid fa-trash" style="color: #000000;"></i>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
