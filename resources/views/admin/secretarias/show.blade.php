@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Secretaria: {{$secretaria->nombres}} {{$secretaria->apellidos}}</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Datos registrados</h3>
                </div>
                <div class="card-body">
                    <!-- Primera fila -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombres">Nombres</label>
                                <p>{{$secretaria->nombres}}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="apellidos">Apellidos</label>
                                <p>{{$secretaria->apellidos}}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Segunda fila -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cedula">Cédula</label>
                                <p>{{$secretaria->cedula}}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="celular">Celular</label>
                                <p>{{$secretaria->celular}}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Tercera fila -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                <p>{{$secretaria->fecha_nacimiento}}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <p>{{$secretaria->direccion}}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Cuarta fila -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <p>{{$secretaria->user->email}}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Botones -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="{{ url('admin/secretarias') }}" class="btn btn-secondary">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
