@if($horarios->isEmpty())
    <div class="alert alert-info">
        No hay horarios disponibles para este consultorio.
    </div>
@else
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
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
                $horas = [
                    '08:00:00 - 09:00:00',
                    '09:00:00 - 10:00:00',
                    '10:00:00 - 11:00:00',
                    '11:00:00 - 12:00:00',
                    '13:00:00 - 14:00:00',
                    '14:00:00 - 15:00:00',
                    '15:00:00 - 16:00:00',
                    '16:00:00 - 17:00:00',
                    '17:00:00 - 18:00:00'
                ];
                $diasSemana = ['LUNES', 'MARTES', 'MIERCOLES', 'JUEVES', 'VIERNES', 'SABADO', 'DOMINGO'];
            @endphp

            @foreach($horas as $hora)
                @php
                    list($hora_inicio, $hora_fin) = explode(' - ', $hora);
                @endphp
                <tr>
                    <td class="font-weight-bold">{{ $hora }}</td>
                    @foreach($diasSemana as $dia)
                        @php
                            $nombre_doctor = '';
                            $especialidad = '';
                            foreach ($horarios as $horario) {
                                if (strtoupper($horario->dia) == $dia &&
                                    $hora_inicio >= $horario->hora_inicio &&
                                    $hora_fin <= $horario->hora_fin) {
                                    $nombre_doctor = $horario->doctor->nombres . ' ' . $horario->doctor->apellidos;
                                    $especialidad = $horario->doctor->especialidad;
                                    break;
                                }
                            }
                        @endphp
                        <td>
                            @if($nombre_doctor)
                                <div>{{ $nombre_doctor }}</div>
                                <small class="text-muted">{{ $especialidad }}</small>
                            @endif
                        </td>
                    @endforeach
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endif
