@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Actualizar datos de : {{$secretaria->nombres}} {{$secretaria->apellidos}}</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Complete los datos</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/secretarias',$secretaria->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- Primera fila -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombres">Nombres </label>
                                    <input type="text" value="{{ $secretaria->nombres}}" name="nombres" class="form-control" required>
                                    @error('nombres')
                                    <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="apellidos">Apellidos </label>
                                    <input type="text" value="{{ $secretaria->apellidos}}" name="apellidos" class="form-control" required>
                                    @error('apellidos')
                                    <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cedula">Cédula</label>
                                    <input type="text" value="{{ $secretaria->cedula}}" name="cedula" class="form-control" required>
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
                                    <label for="celular">Celular </label>
                                    <input type="text" value="{{ $secretaria->celular}}" name="celular" class="form-control" required>
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
                                    <label for="fecha_nacimiento">Fecha de Nacimiento </label>
                                    <input type="date" value="{{ $secretaria->fecha_nacimiento}}" name="fecha_nacimiento" class="form-control" required>
                                    @error('fecha_nacimiento')
                                    <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="direccion">Dirección </label>
                                    <input type="text" value="{{ $secretaria->direccion}}" name="direccion" class="form-control" required>
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
                                    <label for="email">Email </label>
                                    <input type="email" value="{{ $secretaria->user->email}}" name="email" class="form-control" required>
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
                                    <label for="password">Contraseña </label>
                                    <input type="password" name="password" class="form-control" >
                                    @error('password')
                                    <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password_confirmation">Confirme la Contraseña </label>
                                    <input type="password" name="password_confirmation" class="form-control">
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
                                <button type="submit" class="btn btn-success">Actualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
