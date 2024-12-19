@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Datos del paciente {{$paciente->nombres}} {{$paciente->apellidos}}</h1>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-10">
            <div class="card  card-danger">
                <div class="card-header">
                    <h3 class="card-title">Estas seguro de eliminar los registros?</h3>
                </div>
                <div class="card-body">
                    <form action="{{url('/admin/pacientes',$paciente->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                     <!-- Información Personal -->
                     <h5 class="mb-3">Información Personal</h5>
                     <div class="row">
                         <div class="col-md-6">
                             <label for="nombres">Nombres</label>
                             <p>{{$paciente->nombres}}</p>
                         </div>
                         <div class="col-md-6">
                             <label for="apellidos">Apellidos</label>
                             <p>{{$paciente->apellidos}}</p>
                         </div>
                     </div>

                     <div class="row mt-3">
                         <div class="col-md-6">
                             <label for="cedula">Cédula</label>
                             <p>{{$paciente->cedula}}</p>
                         </div>
                         <div class="col-md-6">
                             <label for="nro_seguro">Nro de seguro</label>
                             <p>{{$paciente->nro_seguro}}</p>
                         </div>
                     </div>

                     <!-- Información de Contacto -->
                     <h5 class="mt-4 mb-3">Información de Contacto</h5>
                     <div class="row">
                         <div class="col-md-6">
                             <label for="celular">Celular</label>
                             <p>{{$paciente->celular}}</p>
                         </div>
                         <div class="col-md-6">
                             <label for="correo">Correo</label>
                             <p>{{$paciente->correo}}</p>
                         </div>
                     </div>

                     <div class="row mt-3">
                         <div class="col-md-12">
                             <label for="direccion">Dirección</label>
                             <p>{{$paciente->direccion}}</p>
                         </div>
                     </div>

                     <!-- Información Médica -->
                     <h5 class="mt-4 mb-3">Información Médica</h5>
                     <div class="row">
                         <div class="col-md-6">
                             <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                             <p>{{$paciente->fecha_nacimiento}}</p>
                         </div>
                         <div class="col-md-6">
                             <label for="sexo">Sexo</label>
                             <p>{{$paciente->sexo == 'M' ? 'MASCULINO' : 'FEMENINO'}}</p>
                         </div>
                     </div>

                     <div class="row mt-3">
                         <div class="col-md-6">
                             <label for="grupo_sanguineo">Grupo Sanguíneo</label>
                             <p>{{$paciente->grupo_sanguineo}}</p>
                         </div>
                         <div class="col-md-6">
                             <label for="alergias">Alergias</label>
                             <p>{{$paciente->alergias}}</p>
                         </div>
                     </div>

                     <!-- Otros -->
                     <h5 class="mt-4 mb-3">Otros</h5>
                     <div class="row">
                         <div class="col-md-6">
                             <label for="contacto_emergencia">Contacto de Emergencia</label>
                             <p>{{$paciente->contacto_emergencia}}</p>
                         </div>
                         <div class="col-md-6">
                             <label for="observaciones">Observaciones</label>
                             <p>{{$paciente->observaciones}}</p>
                         </div>
                     </div>

                     <!-- Botones -->
                     <div class="row mt-4">
                         <div class="col-md-12 text-right">
                             <a href="{{ url('admin/pacientes') }}" class="btn btn-secondary">Volver</a>
                             <button type="submit" class="btn btn-danger" >Eliminar paciente </button>
                         </div>
                     </div>
                 </form>
                </div>
            </div>
        </div>
    </div>
@endsection
