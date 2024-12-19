@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Consultorio :{{$consultorio->nombre}} </h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-10">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Datos registrados</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/consultorios/create') }}" method="POST">

                        @csrf

                        <!-- Información Personal -->
                        <h5 class="mb-3">Información general del consultorio</h5>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nombre">Nombre del consultorio</label>
                                <p>{{$consultorio->nombre }}</p>
                            </div>
                            <div class="col-md-6">
                                <label for="ubicacion">Ubicación</label>
                                <p>{{$consultorio->ubicacion }}</p>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="capacidad">Capacidad</label>
                                <p>{{$consultorio->capacidad }}</p>
                            </div>
                            <div class="col-md-6">
                                <label for="telefono">Télefono</label>
                                <p>{{$consultorio->telefono }}</p>
                            </div>
                        </div>

                        <!-- Información de Contacto -->
                        <h5 class="mt-4 mb-3">Información de estado </h5>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="especialidad">Especialidad</label>
                                <p>{{$consultorio->especialidad }}</p>
                            </div>
                            <div class="col-md-6">
                                <label for="estado">Estado</label>
                                <p>{{$consultorio->estado }}</p>
                            </div>
                        </div>


                        <!-- Botones -->
                        <div class="row mt-4">
                            <div class="col-md-12 text-right">
                                <a href="{{ url('admin/consultorios') }}" class="btn btn-secondary">Cancelar</a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
