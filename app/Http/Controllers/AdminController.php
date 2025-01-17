<?php

namespace App\Http\Controllers;

use App\Models\Consultorio;
use App\Models\Secretaria;
use App\Models\User;
use App\Models\Paciente;
use App\Models\Horario;
use App\Models\Doctor; // Se agrega la importación de Doctor
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $total_usuarios = User::count();
        $total_secretarias = Secretaria::count();
        $total_pacientes = Paciente::count();
        $total_consultorio = Consultorio::count();
        $total_doctores = Doctor::count();
        $total_horarios = Horario::count();

        return view('admin.index', compact('total_usuarios', 'total_secretarias', 'total_pacientes', 'total_consultorio', 'total_doctores','total_horarios'));
    }
}
