@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Modificar paciente: {{$paciente->nombres}} {{$paciente->apellidos}}</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-10">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Complete los datos</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/pacientes/'.$paciente->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- Información Personal -->
                        <h5 class="mb-3">Información Personal</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nombres">Nombres</label>
                                <input type="text" value="{{ $paciente->nombres }}" name="nombres" class="form-control" required>
                                @error('nombres')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" value="{{ $paciente->apellidos }}" name="apellidos" class="form-control" required>
                                @error('apellidos')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="cedula">Cédula</label>
                                <input type="text" value="{{$paciente->cedula  }}" name="cedula" class="form-control" required>
                                @error('cedula')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="nro_seguro">Nro de seguro</label>
                                <input type="text" value="{{$paciente->nro_seguro }}" name="nro_seguro" class="form-control" required>
                                @error('nro_seguro')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- Información de Contacto -->
                        <h5 class="mt-4 mb-3">Información de Contacto</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="celular">Celular</label>
                                <input type="text" value="{{ $paciente->celular }}" name="celular" class="form-control" required>
                                @error('celular')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="correo">Correo</label>
                                <input type="email" value="{{ $paciente->correo }}" name="correo" class="form-control" required>
                                @error('correo')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label for="direccion">Dirección</label>
                                <input type="text" value="{{ $paciente->direccion }}" name="direccion" class="form-control" required>
                                @error('direccion')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- Información Médica -->
                        <h5 class="mt-4 mb-3">Información Médica</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                <input type="date" value="{{ $paciente->fecha_nacimiento  }}" name="fecha_nacimiento" class="form-control" required>
                                @error('fecha_nacimiento')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="sexo">Sexo</label>
                                <select name="sexo" class="form-control" required>
                                   @if($paciente->genero=='M')
                                       <option value="M">MASCULINO</option>
                                        <option value="F">FEMENINO</option>
                                    @else
                                        <option value="F">FEMENINO</option>
                                        <option value="M">MASCULINO</option>
                                    @endif

                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="grupo_sanguineo">Grupo Sanguíneo</label>
                                <select name="grupo_sanguineo" class="form-control" required>
                                    <option value="A+" @selected($paciente->grupo_sanguineo =='A+')>A+</option>
                                    <option value="A-" @selected($paciente->grupo_sanguineo =='A-')>A-</option>
                                    <option value="B+"@selected($paciente->grupo_sanguineo =='B+')>B+</option>
                                    <option value="B-"@selected($paciente->grupo_sanguineo =='B-')>B-</option>
                                    <option value="O+"@selected($paciente->grupo_sanguineo =='O+')>O+</option>
                                    <option value="O-"@selected($paciente->grupo_sanguineo =='O-')>O-</option>
                                    <option value="AB+"@selected($paciente->grupo_sanguineo =='AB+')>AB+</option>
                                    <option value="AB-"@selected($paciente->grupo_sanguineo =='AB-')>AB-</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="alergias">Alergias</label>
                                <input type="text" value="{{$paciente->alergias }} " name="alergias" class="form-control">
                                @error('alergias')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- Otros -->
                        <h5 class="mt-4 mb-3">Otros</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="contacto_emergencia">Contacto de Emergencia</label>
                                <input type="text" value="{{ $paciente->contacto_emergencia  }}" name="contacto_emergencia" class="form-control" required>
                                @error('contacto_emergencia')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="observaciones">Observaciones</label>
                                <input type="text" value="{{ $paciente->observaciones  }}" name="observaciones" class="form-control">
                                @error('observaciones')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <!-- Botones -->
                        <div class="row mt-4">
                            <div class="col-md-12 text-right">
                                <a href="{{ url('admin/pacientes') }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-success">Actualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
