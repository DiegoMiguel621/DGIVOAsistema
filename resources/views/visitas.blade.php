@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/visitasEstilos.css') }}">
@endpush
@extends('base')
@section('title', 'Visitas') <!-- Define el título específico de la página -->
@section('contenido')
<?php $user = session('user'); ?>
<section>
    <div class="container">
        <h1 id="txtTitulo">Visitas del día</h1>


        <!-- Menú desplegable, botón de agregar visita y botón de historial -->
            <div class="menu-y-boton">
            <div id="menu-desplegable">
            <select id="tipo-visita" class="select-visita">
            <option value="generales">Visitas Generales</option>
            <option value="mpio_contrat_depend">Visitas MPIO, CONTRAT, DEPEND</option>
            </select>
            </div>
            <div class="botones-derecha">
        <button id="btn-agregar-visita" class="btn-agregar">+ Registrar Visita</button>
        <button id="btn-historial" class="btn-historial">↺ Archivo</button>
    </div>
</div>



        </div>


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
                            <button >
                                <i class="fa-solid fa-pen" style="color: #000000;"></i>
                            </button>
                            <button class="delete-btn">
                                <i class="fa-solid fa-trash-can" style="color: #ff3333;"></i>
                            </button>
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


<!-- Modal para Registrar Visita -->
<div id="modal-agregar-visita" class="modal hidden">
    <div class="modal-content">
        <div class="modal-header">
            <h2 id="txtRegistrarVisita">Registrar visita</h2>
            <div><button id="btn-cerrar-modal" class="close-btn">&times;</button></div>

        </div>
        <div class="modal-body">
            <form id="form-agregar-visita">
                <label for="dependencia" id="txtDependencia">Dependencia:</label>
                <select id="dependencia" name="dependencia">
                    <option value="PF">PF</option>
                    <option value="PM">PM</option>
                    <option value="Municipio">Municipio</option>
                </select>

                <label for="municipio" class="hidden" id="txtMunicipio">Seleccione:</label>
                <input type="text" id="municipio" name="municipio" class="hidden" placeholder="Ingrese el municipio">

                <label for="nombreVisita" id="txtNomVisita">Nombre (Persona física/moral):</label>
                <input type="text" id="nombreVisita" name="nombreVisita" required>

                <label for="asunto" id="txtAsunto">Asunto:</label>
                <input type="text" id="asunto" name="asunto" required>

                <label for="observaciones" id="txtObservaciones">Observaciones:</label>
                <textarea id="observaciones" name="observaciones"></textarea>

                <label for="telefono" id="txtTelefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" required>

                <button type="submit" class="btn-guardar">Guardar</button>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('js/modal-addVisitas.js') }}"></script>




@endsection
