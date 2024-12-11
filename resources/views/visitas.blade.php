@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/visitasEstilos.css') }}">
@endpush
@extends('base')
@section('title', 'Visitas') <!-- Define el título específico de la página -->
@section('contenido')
<?php $user = session('user'); ?>
<section>
    <div class="container">
        <h1>Visitas del día</h1>
        <table>
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Dependencia</th>
                    <th>Nombre (Persona física/moral)</th>
                    <th>Asunto</th>
                    <th>Observaciones</th>
                    <th>Teléfono</th>
                    <th>Hora ingreso</th>
                    <th>Hora salida</th>
                    <th>Atendió</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($visitas as $visita)
                    <tr>
                        <td>{{ $visita->fecha }}</td>
                        <td>{{ $visita->dependencia }}{{ $visita->municipio ? ' ' . $visita->municipio : '' }}</td>
                        <td>{{ $visita->nombreVisita }}</td>
                        <td>{{ $visita->asunto }}</td>
                        <td>{{ $visita->observaciones }}</td>
                        <td>{{ $visita->telefono }}</td>
                        <td>{{ $visita->horaIngreso }}</td>
                        <td>{{ $visita->horaSalida ?? 'Pendiente' }}</td>
                        <td>{{ $visita->nomAtendio }}</td>
                        <td>
                            <button class="edit-btn">✏️</button>
                            <button class="delete-btn">🗑️</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10">No hay visitas registradas para hoy.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>
@endsection
