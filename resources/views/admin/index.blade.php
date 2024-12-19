@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1><b>Bienvenidos</b> : {{Auth::user()->email}} /<b> Rol:</b>  {{Auth::user()->roles->pluck('name')->first()}}   </div>
    <hr>

    <div class="row">
        @can('admin.usuarios.index')

        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$total_usuarios}}</h3>

                    <p>Usuarios</p>
                </div>
                <div class="icon">
                   <i class="fas  bi-file-person"></i>
                </div>
                <a href="{{url('admin/usuarios')}}" class="small-box-footer">Mas información <i class="fas  bi-file-person"></i></a>
            </div>
        </div>

        @endcan
        @can('admin.secretarias.index')
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>{{$total_secretarias}}</h3>

                    <p>Secretarias</p>
                </div>
                <div class="icon">
                    <i class="fas  bi bi-person-circle"></i>
                </div>
                <a href="{{ url('admin/secretarias') }}" class="small-box-footer">Mas información <i class="fas  bi-file-person"></i></a>

            </div>
        </div>
            @endcan
            @can('admin.pacientes.index')
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$total_pacientes}}</h3>

                    <p>Pacientes</p>
                </div>
                <div class="icon">
                    <i class="fas bi bi-person-heart"></i>
                </div>
                <a href="{{ url('admin/pacientes') }}" class="small-box-footer">Mas información <i class="fas  bi-file-person"></i></a>

            </div>
        </div>
            @endcan
            @can ('admin.consultorios.index')
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{$total_consultorio}}</h3>

                    <p>Consultorios</p>
                </div>
                <div class="icon">
                    <i class="fas bi bi-building-add"></i>
                </div>
                <a href="{{ url('admin/consultorios') }}" class="small-box-footer">Mas información <i class="fas  bi-file-person"></i></a>

            </div>
        </div>
            @endcan
            @can('admin.doctores.index')
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$total_doctores}}</h3> <!-- Cambiar de $total_doctore a $total_doctores -->
                    <p>Doctor</p>
                </div>
                <div class="icon">
                    <i class="fas bi bi-people-fill"></i>
                </div>
                <a href="{{ url('admin/doctores') }}" class="small-box-footer">Mas información <i class="fas  bi-file-person"></i></a>
            </div>
        </div>
            @endcan
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h3>{{$total_horarios}}</h3> <!-- Cambiar de $total_doctore a $total_doctores -->
                    <p>Horarios</p>
                </div>
                <div class="icon">
                    <i class="fas bi bi-calendar-check"></i>
                </div>
                <a href="{{ url('admin/horarios') }}" class="small-box-footer">Mas información <i class="fas  bi-file-person"></i></a>
            </div>
        </div>

    </div>
@endsection
