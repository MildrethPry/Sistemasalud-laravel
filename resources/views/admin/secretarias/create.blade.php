@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Registro de una nueva secretaria</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Complete los datos</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/secretarias/create') }}" method="POST">
                        @csrf
                        <!-- Primera fila -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombres">Nombres <b>*</b></label>
                                    <input type="text" value="{{ old('nombres') }}" name="nombres" class="form-control" required>
                                    @error('nombres')
                                    <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="apellidos">Apellidos <b>*</b></label>
                                    <input type="text" value="{{ old('apellidos') }}" name="apellidos" class="form-control" required>
                                    @error('apellidos')
                                    <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cedula">Cédula <b>*</b></label>
                                    <input type="text" value="{{ old('cedula') }}" name="cedula" class="form-control" required>
                                    @error('cedula')
                                    <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- Segunda fila -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="celular">Celular <b>*</b></label>
                                    <input type="text" value="{{ old('celular') }}" name="celular" class="form-control" required>
                                    @error('celular')
                                    <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- Tercera fila -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fecha_nacimiento">Fecha de Nacimiento <b>*</b></label>
                                    <input type="date" value="{{ old('fecha_nacimiento') }}" name="fecha_nacimiento" class="form-control">
                                    @error('fecha_nacimiento')
                                    <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Dirección -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="direccion">Dirección <b>*</b></label>
                                    <input type="text" value="{{ old('direccion') }}" name="direccion" class="form-control" required>
                                    @error('direccion')
                                    <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Cuarta fila -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email <b>*</b></label>
                                    <input type="email" value="{{ old('email') }}" name="email" class="form-control" required>
                                    @error('email')
                                    <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Quinta fila -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Contraseña <b>*</b></label>
                                    <input type="password" name="password" class="form-control" required>
                                    @error('password')
                                    <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password_confirmation">Confirme la Contraseña <b>*</b></label>
                                    <input type="password" name="password_confirmation" class="form-control" required>
                                    @error('password_confirmation')
                                    <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Botones -->
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <a href="{{ url('admin/secretarias') }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
