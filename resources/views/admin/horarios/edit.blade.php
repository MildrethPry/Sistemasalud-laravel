@extends('layouts.admin')

@section('content')
    <div class="row mb-4">
        <h1 class="col-md-12">Registro de un nuevo Horario</h1>
    </div>
    <hr>
    <div class="row">
        <!-- Columna para el formulario -->
        <div class="col-md-4">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Formulario de Agendamiento</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.horarios.store') }}" method="POST">
                        @csrf

                        <!-- Datos del horario -->
                        <div class="form-group">
                            <label for="dia">Día <b>*</b></label>
                            <select name="dia" class="form-control" required>
                                <option value="LUNES">LUNES</option>
                                <option value="MARTES">MARTES</option>
                                <option value="MIERCOLES">MIERCOLES</option>
                                <option value="JUEVES">JUEVES</option>
                                <option value="VIERNES">VIERNES</option>
                                <option value="SABADO">SABADO</option>
                                <option value="DOMINGO">DOMINGO</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="hora_inicio">Hora de inicio <b>*</b></label>
                            <input type="time" name="hora_inicio" class="form-control" value="{{ old('hora_inicio') }}" required>
                            @error('hora_inicio')
                            <small style="color:red">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="hora_fin">Hora de fin <b>*</b></label>
                            <input type="time" name="hora_fin" class="form-control" value="{{ old('hora_fin') }}" required>
                            @error('hora_fin')
                            <small style="color:red">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="doctor_id">Doctor <b>*</b></label>
                            <select name="doctor_id" class="form-control" required>
                                @foreach($doctores as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->nombres . " " . $doctor->apellidos }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="consultorio_id">Consultorio <b>*</b></label>
                            <select name="consultorio_id" class="form-control" required>
                                @foreach($consultorios as $consultorio)
                                    <option value="{{ $consultorio->id }}">{{ $consultorio->nombre . " - " . $consultorio->apellidos }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Botones -->
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <a href="{{ url('admin/horarios') }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Columna para el calendario -->
        <div class="col-md-8">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Calendario de Agendamiento de Citas</h3>
                </div>
                <div class="card-body">
                    <table style="font-size: 14px" class="table table-striped table-hover table-sm table-bordered">
                        <thead>
                        <tr>
                            <th>Hora</th>
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miércoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                            <th>Sábado</th>
                            <th>Domingo</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $horas = ['08:00:00 - 09:00:00', '09:00:00 - 10:00:00', '10:00:00 - 11:00:00',
                                      '11:00:00 - 12:00:00', '13:00:00 - 14:00:00', '14:00:00 - 15:00:00',
                                      '15:00:00 - 16:00:00', '16:00:00 - 17:00:00', '17:00:00 - 18:00:00'];
                            $diasSemana = ['LUNES', 'MARTES', 'MIERCOLES', 'JUEVES', 'VIERNES', 'SABADO', 'DOMINGO'];
                        @endphp

                        @foreach($horas as $hora)
                            @php
                                list($hora_inicio, $hora_fin) = explode(' - ', $hora);
                            @endphp
                            <tr>
                                <td>{{ $hora }}</td>
                                @foreach($diasSemana as $dia)
                                    @php
                                        $nombre_doctor = '';
                                        foreach ($horarios as $horario) {
                                            if (strtoupper($horario->dia) == $dia &&
                                                $hora_inicio >= $horario->hora_inicio &&
                                                $hora_fin <= $horario->hora_fin) {
                                                $nombre_doctor = $horario->doctor->nombres . ' ' . $horario->doctor->apellidos;
                                                break;
                                            }
                                        }
                                    @endphp
                                    <td>{{ $nombre_doctor }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
