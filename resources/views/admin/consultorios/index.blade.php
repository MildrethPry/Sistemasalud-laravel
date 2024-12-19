@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Listado de consultorios</h1>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-16">
            <div class="card card-outline card-primary">
                <dv class="card-header">
                    <h3 class="card-title"> Consultorios registrados</h3>
                    <div class="card-tools">
                        <a href="{{url('admin/consultorios/create')}}" class="btn btn-primary">
                            Registrar nuevo
                        </a>
                    </div>

                </dv>
                <div class="card-body">

                    <table id ="example1" class="table table-striped table-hover table-bordered table-sm">
                        <thead style="background-color: #c0c0c0">
                        <tr>
                            <td style="text-align: center"><b> Nro</b>

                            </td>
                            <td style="text-align: center">
                                <b>Consultorio</b>
                            </td>
                            <td style="text-align: center">
                                <b>Ubicación</b>
                            </td>
                            <td style="text-align: center">
                                <b>Capacidad</b>
                            </td>
                            <td style="text-align: center">
                                <b>Télefono</b>
                            </td>
                            <td style="text-align: center">
                                <b>Especialidad</b>
                            </td>
                            <td style="text-align: center">
                                <b>Estado</b>
                            </td>
                            <td style="text-align: center">
                                <b>Acciones</b>
                            </td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $contador = 1; ?>

                        @foreach($consultorios as $consultorio)
                            <tr>
                                <td>{{ $contador++ }}</td>
                                <td>{{ $consultorio->nombre }}</td>
                                <td>{{ $consultorio->ubicacion }}</td>
                                <td>{{ $consultorio->capacidad }}</td>
                                <td>{{ $consultorio->telefono }}</td>
                                <td>{{ $consultorio->especialidad }}</td>
                                <td>{{ $consultorio->estado }}</td>

                                <td style="text-align:center">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ url('admin/consultorios/' . $consultorio->id) }}" class="btn btn-info"><i class="bi bi-eye"></i></a>
                                        <a href="{{ url('admin/consultorios/' . $consultorio->id . '/edit') }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                        <a href="{{ url('admin/consultorios/' . $consultorio->id . '/confirm-delete') }}" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    <script>
                        $(function () {
                            $("#example1").DataTable({
                                "pageLength": 10,
                                "language": {
                                    "emptyTable": "No hay información",
                                    "info": "Mostrando _START_ a _END_ de _TOTAL_ consultorios",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 consultorios",
                                    "infoFiltered": "(Filtrado de_MAX_total consultorios)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar_MENU_consultorios",
                                    "loadingRecords": "Cargando...",
                                    "processing": "Procesando...",
                                    "search": "Buscador:",
                                    "zeroRecords": "Sin resultados encontrados",
                                    "paginate": {
                                        "first": "Primero",
                                        "last": "Ultimo",
                                        "next": "Siguiente",
                                        "previous": "Anterior"
                                    }
                                },
                                "responsive": true, "lengthChange": true, "autoWidth": false,
                                buttons: [{
                                    extend: 'collection',
                                    text: 'Reportes',
                                    orientation: 'landscape',
                                    buttons: [{
                                        text: 'Copiar',
                                        extend: 'copy',
                                    }, {
                                        extend: 'pdf'
                                    },{
                                        extend: 'csv'
                                    },{
                                        extend: 'excel'
                                    },{
                                        text: 'Imprimir',
                                        extend: 'print'
                                    }
                                    ]
                                },
                                    {
                                        extend: 'colvis',
                                        text: 'Visor de columnas',
                                        collectionLayout: 'fixed three-column'
                                    }
                                ],
                            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                        });
                    </script>
                </div>


@endsection