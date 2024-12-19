@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Datos del horario</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Datos registrados</h3>
                </div>
                <div class="card-body">
                    <!-- Datos del horario -->
                    <div class="row mb-3">
                        <!-- Día -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dia">Doctor</label>
                                <p><strong>{{ $horario->doctor->nombres . " " . $horario->doctor->apellidos }}</strong></p>
                                <p>{{ $horario->doctor->especialidad }}</p>
                            </div>
                        </div>

                        <!-- Día -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dia">Día</label>
                                <p>{{ $horario->dia }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Hora de inicio y fin -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="hora_inicio">Hora de inicio</label>
                                <p>{{ $horario->hora_inicio }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="hora_fin">Hora de fin</label>
                                <p>{{ $horario->hora_fin }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Información del consultorio -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="consultorio_id">Consultorio</label>
                                <p>{{ $horario->consultorio->nombres . " - " . $horario->consultorio->ubicacion }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Botón de Cancelar -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="{{ url('admin/horarios') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
