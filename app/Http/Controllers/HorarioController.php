<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Consultorio;

class HorarioController extends Controller
{
    public function index()
    {
        $consultorios = Consultorio::all();
        $horarios = Horario::with('doctor', 'consultorio')->get();
        return view('admin.horarios.index', compact('horarios','consultorios'));
    }

    public function create()
    {
        $doctores = Doctor::all();
        $consultorios = Consultorio::all();
        $horarios = Horario::with('doctor', 'consultorio')->get(); // Ya estás obteniendo los horarios

        // Asegúrate de pasar la variable $horarios a la vista
        return view('admin.horarios.create', compact('doctores', 'consultorios', 'horarios'));
    }
    public function cargar_datos_consultorios($id)
    {
        try {
            // Verificar si el consultorio existe
            $consultorio = Consultorio::findOrFail($id);

            // Obtener los horarios
            $horarios = Horario::with(['doctor' => function($query) {
                $query->select('id', 'nombres', 'apellidos', 'especialidad');
            }])
                ->where('consultorio_id', $id)
                ->get();

            \Log::info('Horarios encontrados:', ['count' => $horarios->count(), 'consultorio_id' => $id]);

            return view('admin.horarios.cargar_datos_consultorios', compact('horarios'))
                ->render();

        } catch (\Exception $e) {
            \Log::error('Error específico al cargar datos del consultorio: ' . $e->getMessage(), [
                'consultorio_id' => $id,
                'file' => $e->getFile(),
                'line' => $e->getLine()
            ]);

            return response()->json([
                'error' => true,
                'mensaje' => 'Error al cargar los datos: ' . $e->getMessage()
            ], 500);
        }
    }
    public function edit($id)
    {
        // Buscar el horario por su ID
        $horario = Horario::findOrFail($id);

        // Obtener los doctores y consultorios para pasarlos a la vista
        $doctores = Doctor::all();
        $consultorios = Consultorio::all();

        // Retornar la vista de edición con los datos del horario
        return view('admin.horarios.edit', compact('horario', 'doctores', 'consultorios'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'dia' => 'required|string',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i|after:hora_inicio',
            'doctor_id' => 'required|exists:doctors,id',
            'consultorio_id' => 'required|exists:consultorios,id'
        ]);

        // Verificar si el horario ya existe para ese día y rango de horas
        $horarioExistente = Horario::where('dia', $validated['dia'])
            ->where('doctor_id', $validated['doctor_id']) // Verificar para el mismo doctor
            ->where(function ($query) use ($validated) {
                $query->where(function ($query) use ($validated) {
                    $query->where('hora_inicio', '<', $validated['hora_fin'])
                        ->where('hora_fin', '>', $validated['hora_inicio']);
                });
            })
            ->exists();

        if ($horarioExistente) {
            return redirect()->back()
                ->withInput()
                ->with('mensaje', 'Ya existe un horario que se superpone con el horario ingresado para el doctor seleccionado.')
                ->with('icono', 'error');
        }

        try {
            // Crear y guardar el horario
            $horario = new Horario();
            $horario->dia = $validated['dia'];
            $horario->hora_inicio = $validated['hora_inicio'];
            $horario->hora_fin = $validated['hora_fin'];
            $horario->doctor_id = $validated['doctor_id'];
            $horario->consultorio_id = $validated['consultorio_id'];
            $horario->save();

            return redirect()
                ->route('admin.horarios.index')
                ->with('message', 'Horario creado con éxito')
                ->with('icono', 'success');
        } catch (\Exception $e) {
            \Log::error('Error al guardar el horario: ' . $e->getMessage());

            return back()
                ->withInput()
                ->with('error', 'Error al guardar el horario. Por favor, inténtalo de nuevo.');
        }
    }


    public function show($id)
    {
        // Buscar el horario por su id
        $horario = Horario::findOrFail($id);

        // Retornar la vista con los datos del horario
        return view('admin.horarios.show', compact('horario'));
    }


    // ... resto de métodos permanecen igual
}
