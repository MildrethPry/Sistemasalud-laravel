@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Listado de pacientes </h1>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-13">
            <div class="card card-outline card-primary">
                <dv class="card-header">
                    <h3 class="card-title"> Pacientes registrados</h3>
                    <div class="card-tools">
                        <a href="{{url('admin/pacientes/create')}}" class="btn btn-primary">
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
                                <b>Nombres y apellidos</b>
                            </td>
                            <td style="text-align: center">
                                <b>Cedula</b>
                            </td>
                            <td style="text-align: center">
                                <b>Nro de seguro</b>
                            </td>
                            <td style="text-align: center">
                                <b>Fecha de nacimiento</b>
                            </td>
                            <td style="text-align: center">
                                <b>Genero</b>
                            </td>
                            <td style="text-align: center">
                                <b>Celular</b>
                            </td>
                            <td style="text-align: center">
                                <b>Email</b>
                            </td>
                            <td style="text-align: center">
                                <b>Direccion</b>
                            </td>
                            <td style="text-align: center">
                                <b>Acciones</b>
                            </td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $contador = 1;?>

                        @foreach($pacientes as $paciente)
                            <tr>
                                <td>{{$contador++}}</td>
                                <td>{{$paciente->nombres}}{{$paciente->apellidos}}</td>
                                <td>{{$paciente->cedula}}</td>
                                <td>{{$paciente->nro_seguro}}</td>
                                <td>{{$paciente->fecha_nacimiento}}</td>
                                <td>{{$paciente->sexo}}</td>
                                <td>{{$paciente->celular}}</td>
                                <td>{{$paciente->correo}}</td>
                                <td>{{$paciente->direccion}}</td>



                                <td style="text-align:center ">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{url('admin/pacientes/'.$paciente->id)}}"  class="btn btn-info"><i class="bi bi-eye"></i></a>
                                        <a href="{{url('admin/pacientes/'.$paciente->id.'/edit')}}" type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                        <a href="{{url('admin/pacientes/'.$paciente->id.'/confirm-delete')}}" type="button" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
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
                                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Pacientes",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 Pacientes",
                                    "infoFiltered": "(Filtrado de_MAX_total Pacientes)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar_MENU_Pacientes",
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
