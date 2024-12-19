@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Registro de un nuevo paciente</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-10">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Complete los datos</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/pacientes/create') }}" method="POST">

                    @csrf

                        <!-- Información Personal -->
                        <h5 class="mb-3">Información Personal</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nombres">Nombres</label>
                                <input type="text" value="{{ old('nombres') }}" name="nombres" class="form-control" required>
                                @error('nombres')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" value="{{ old('apellidos') }}" name="apellidos" class="form-control" required>
                                @error('apellidos')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="cedula">Cédula</label>
                                <input type="text" value="{{ old('cedula') }}" name="cedula" class="form-control" required>
                                @error('cedula')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="nro_seguro">Nro de seguro</label>
                                <input type="text" value="{{ old('nro_seguro') }}" name="nro_seguro" class="form-control" required>
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
                                <input type="text" value="{{ old('celular') }}" name="celular" class="form-control" required>
                                @error('celular')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="correo">Correo</label>
                                <input type="email" value="{{ old('correo') }}" name="correo" class="form-control" required>
                                @error('correo')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label for="direccion">Dirección</label>
                                <input type="text" value="{{ old('direccion') }}" name="direccion" class="form-control" required>
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
                                <input type="date" value="{{ old('fecha_nacimiento') }}" name="fecha_nacimiento" class="form-control" required>
                                @error('fecha_nacimiento')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="sexo">Sexo</label>
                                <select name="sexo" class="form-control" required>
                                    <option value="M" {{ old('sexo') == 'M' ? 'selected' : '' }}>Masculino</option>
                                    <option value="F" {{ old('sexo') == 'F' ? 'selected' : '' }}>Femenino</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="grupo_sanguineo">Grupo Sanguíneo</label>
                                <select name="grupo_sanguineo" class="form-control" required>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="alergias">Alergias</label>
                                <input type="text" value="{{ old('alergias') }}" name="alergias" class="form-control">
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
                                <input type="text" value="{{ old('contacto_emergencia') }}" name="contacto_emergencia" class="form-control" required>
                                @error('contacto_emergencia')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="observaciones">Observaciones</label>
                                <input type="text" value="{{ old('observaciones') }}" name="observaciones" class="form-control">
                                @error('observaciones')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- Contraseña -->
                        <h5 class="mt-4 mb-3">Credenciales</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" class="form-control" required>
                                @error('password')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="password_confirmation">Confirme la Contraseña</label>
                                <input type="password" name="password_confirmation" class="form-control" required>
                                @error('password_confirmation')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- Botones -->
                        <div class="row mt-4">
                            <div class="col-md-12 text-right">
                                <a href="{{ url('admin/pacientes') }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
