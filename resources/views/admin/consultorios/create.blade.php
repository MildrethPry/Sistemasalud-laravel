@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Registro de un nuevo consultorio</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-10">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Complete los datos</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/consultorios/create') }}" method="POST">

                        @csrf

                        <!-- Información Personal -->
                        <h5 class="mb-3">Información general del consultorio</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nombre">Nombre del consultorio</label>
                                <input type="text" value="{{ old('nombre') }}" name="nombre" class="form-control" required>
                                @error('nombre')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="ubicacion">Ubicación</label>
                                <input type="text" value="{{ old('ubicacion') }}" name="ubicacion" class="form-control" required>
                                @error('ubicacion')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="capacidad">Capacidad</label>
                                <input type="text" value="{{ old('capacidad') }}" name="capacidad" class="form-control" required>
                                @error('capacidad')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="telefono">Télefono</label>
                                <input type="text" value="{{ old('telefono') }}" name="telefono" class="form-control" required>
                                @error('telefono')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- Información de Contacto -->
                        <h5 class="mt-4 mb-3">Información de estado </h5>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="especialidad">Especialidad</label>
                                <input type="text" value="{{ old('especialidad') }}" name="especialidad" class="form-control" required>
                                @error('especialidad')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="estado">Estado</label>
                                <select name="estado" class="form-control" required>
                                    <option value="ACTIVO" >Activo</option>
                                    <option value="INACTIVO" >Inactivo</option>
                                </select>
                            </div>
                        </div>


                        <!-- Botones -->
                        <div class="row mt-4">
                            <div class="col-md-12 text-right">
                                <a href="{{ url('admin/consultorios') }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
