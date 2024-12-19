@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Doctor : {{$doctor->nombres }} {{$doctor->apellidos }}</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title"> Datos del doctor</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/doctores/'.$doctor->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Datos personales -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombres">Nombres <b>*</b></label>
                                    <input type="text" value="{{ $doctor->nombres }}" name="nombres" class="form-control" required>
                                    @error('nombres')
                                    <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="apellidos">Apellidos <b>*</b></label>
                                    <input type="text" value="{{ $doctor->apellidos  }}" name="apellidos" class="form-control" required>
                                    @error('apellidos')
                                    <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Contacto -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telefono">Teléfono <b>*</b></label>
                                    <input type="number" value="{{ $doctor->telefono  }}" name="telefono" class="form-control" required>
                                    @error('telefono')
                                    <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email <b>*</b></label>
                                    <input type="email" value="{{$doctor->user->email }}" name="email" class="form-control" required>
                                    @error('email')
                                    <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Información profesional -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="licencia_medica">Licencia médica <b>*</b></label>
                                    <input type="text" value="{{ $doctor->licencia_medica }}" name="licencia_medica" class="form-control" required>
                                    @error('licencia_medica')
                                    <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="especialidad">Especialidad <b>*</b></label>
                                    <input type="text" value="{{ $doctor->especialidad}}" name="especialidad" class="form-control" required>
                                    @error('especialidad')
                                    <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Credenciales -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Contraseña <b>*</b></label>
                                    <input type="password" name="password" class="form-control" >
                                    @error('password')
                                    <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password_confirmation">Confirme la contraseña <b>*</b></label>
                                    <input type="password" name="password_confirmation" class="form-control" >
                                    @error('password_confirmation')
                                    <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Botones -->
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <a href="{{ url('admin/doctores') }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-success">Actualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
