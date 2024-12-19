@extends('layouts.admin')

@section('content')

    <div class="row">
        <h1>Listado de horarios</h1>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Calendario de atención de doctores</h3>
                    <div class="card-tools">
                        <a href="{{ url('admin/horarios/create') }}" class="btn btn-primary">
                            Registrar nuevo
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <table id="example1" class="table table-striped table-hover table-bordered table-sm">
                        <thead style="background-color: #c0c0c0">
                        <tr>
                            <th style="text-align: center">Nro</th>
                            <th style="text-align: center">Doctor</th>
                            <th style="text-align: center">Especialidad</th>
                            <th style="text-align: center">Consultorio</th>
                            <th style="text-align: center">Día de atención</th>
                            <th style="text-align: center">Hora de inicio</th>
                            <th style="text-align: center">Hora de fin</th>
                            <th style="text-align: center">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $contador = 1; @endphp
                        @foreach($horarios as $horario)
                            <tr>
                                <td style="text-align: center">{{ $contador++ }}</td>
                                <td>{{ $horario->doctor->nombres . ' ' . $horario->doctor->apellidos }}</td>
                                <td>{{ $horario->doctor->especialidad }}</td>
                                <td>{{ $horario->consultorio->nombre . " - Ubicación: " . $horario->consultorio->ubicacion }}</td>
                                <td style="text-align: center">{{ $horario->dia }}</td>
                                <td style="text-align: center">{{ $horario->hora_inicio }}</td>
                                <td style="text-align: center">{{ $horario->hora_fin }}</td>
                                <td style="text-align: center">
                                    <div class="btn-group" role="group" aria-label="Acciones">
                                        <a href="{{ url('admin/horarios/' . $horario->id) }}" class="btn btn-info">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ url('admin/horarios/' . $horario->id . '/edit') }}" class="btn btn-success">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="{{ url('admin/horarios/' . $horario->id . '/confirm-delete') }}" class="btn btn-danger">
                                            <i class="bi bi-trash3"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Calendario de agendamiento de citas</h3>

                    </div>



                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="consultorio_id">Consultorio <b>*</b></label>
                                                <select name="consultorio_id" id="consultorio_select" class="form-control" required>
                                                    <option value="">Seleccione un consultorio</option>
                                                    @foreach($consultorios as $consultorio)
                                                        <option value="{{ $consultorio->id }}">
                                                            {{ $consultorio->nombre . " - " . $consultorio->ubicacion }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="consultorio_info" class="mt-4">
                                        <p>Seleccione un consultorio para ver los horarios.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    <script>
        $(function () {
            $("#example1").DataTable({
                "pageLength": 10,
                "language": {
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ horarios",
                    "infoEmpty": "Mostrando 0 a 0 de 0 horarios",
                    "infoFiltered": "(Filtrado de _MAX_ horarios)",
                    "lengthMenu": "Mostrar _MENU_ horarios",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscador:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                buttons: [
                    {
                        extend: 'collection',
                        text: 'Reportes',
                        orientation: 'landscape',
                        buttons: [
                            { extend: 'copy', text: 'Copiar' },
                            { extend: 'pdf' },
                            { extend: 'csv' },
                            { extend: 'excel' },
                            { extend: 'print', text: 'Imprimir' }
                        ]
                    },
                    {
                        extend: 'colvis',
                        text: 'Visor de columnas',
                        collectionLayout: 'fixed three-column'
                    }
                ]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
   <script>
       function cargarDatosConsultorio(consultorio_id) {
           var url = "{{ route('admin.horarios.cargar_datos_consultorios', ':id') }}";
           url = url.replace(':id', consultorio_id);

           $.ajax({
               url: url,
               type: 'GET',
               beforeSend: function() {
                   $('#consultorio_info').html('<div class="text-center"><i class="fas fa-spinner fa-spin"></i> Cargando horarios...</div>');
               },
               success: function (data) {
                   $('#consultorio_info').html(data);
               },
               error: function (xhr, status, error) {
                   console.log('Status:', status);
                   console.log('Error:', error);
                   console.log('Response:', xhr.responseText);

                   let errorMessage = 'Error al cargar los horarios.';
                   try {
                       let response = JSON.parse(xhr.responseText);
                       if(response.mensaje) {
                           errorMessage = response.mensaje;
                       }
                   } catch(e) {
                       console.log('Error parsing response:', e);
                   }

                   $('#consultorio_info').html(`
                <div class="alert alert-danger">
                    ${errorMessage}
                    <br>
                    <small>Si el problema persiste, contacte al administrador.</small>
                </div>
            `);
               }
           });
       }
   </script>



@endsection
