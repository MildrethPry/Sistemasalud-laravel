@extends('layouts.admin')
@section('content')

    <div class="row">
        <h1>Listado de doctores</h1>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-16">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Doctores registrados</h3>
                    <div class="card-tools">
                        <a href="{{ url('admin/doctores/create') }}" class="btn btn-primary">
                            Registrar nuevo
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <table id="example1" class="table table-striped table-hover table-bordered table-sm">
                        <thead style="background-color: #c0c0c0">
                        <tr>
                            <th style="text-align: center">Nro</th>
                            <th style="text-align: center">Nombre y apellidos</th>
                            <th style="text-align: center">Teléfono</th>
                            <th style="text-align: center">Licencia médica</th>
                            <th style="text-align: center">Especialidad</th>
                            <th style="text-align: center">Email</th>
                            <th style="text-align: center">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $contador = 1; ?>

                        @foreach($doctores as $doctore)
                            <tr>
                                <td>{{ $contador++ }}</td>
                                <td>{{ $doctore->nombres . ' ' . $doctore->apellidos }}</td>
                                <td>{{ $doctore->telefono }}</td>
                                <td>{{ $doctore->licencia_medica }}</td>
                                <td>{{ $doctore->especialidad }}</td>
                                <td>{{ $doctore->user->email }}</td>
                                <td style="text-align: center">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ url('admin/doctores/' . $doctore->id) }}" class="btn btn-info"><i class="bi bi-eye"></i></a>
                                        <a href="{{ url('admin/doctores/' . $doctore->id . '/edit') }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                        <a href="{{ url('admin/doctores/' . $doctore->id . '/confirm-delete') }}" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ doctores",
                    "infoEmpty": "Mostrando 0 a 0 de 0 doctores",
                    "infoFiltered": "(Filtrado de _MAX_ doctores)",
                    "lengthMenu": "Mostrar _MENU_ doctores",
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

@endsection
