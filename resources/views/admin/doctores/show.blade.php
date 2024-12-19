@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Doctor : {{ $doctor->nombres }}  {{ $doctor->apellidos }} </h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Complete los datos</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/doctores/create') }}" method="POST">
                        @csrf

                        <!-- Datos personales -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombres">Nombres <b>*</b></label>
                                    <p>{{$doctor->nombres}}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="apellidos">Apellidos <b>*</b></label>
                                    <p>{{$doctor->apellidos}}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Contacto -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telefono">Teléfono <b>*</b></label>
                                    <p>{{$doctor->telefono}}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email <b>*</b></label>
                                    <p>{{$doctor->user->email}}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Información profesional -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="licencia_medica">Licencia médica <b>*</b></label>
                                    <p>{{$doctor->licencia_medica}}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="especialidad">Especialidad <b>*</b></label>
                                    <p>{{$doctor->especialidad}}</p>
                                </div>
                            </div>
                        </div>


                        <!-- Botones -->
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <a href="{{ url('admin/doctores') }}" class="btn btn-secondary">Volver</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
