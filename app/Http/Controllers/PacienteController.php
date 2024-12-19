<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('admin.pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request-> validate([

            'nombres' => 'required',
            'apellidos' => 'required',
            'cedula' => 'required|unique:pacientes',
            'nro_seguro' => 'required|unique:pacientes',
            'fecha_nacimiento' => 'required',
            'sexo' => 'required',
            'celular' => 'required',
            'correo'=>'required |max:250|unique:pacientes',
            'direccion' => 'required',
            'grupo_sanguineo' => 'required',
            'alergias' => 'required',
            'contacto_emergencia' => 'required',
        ]);

        $paciente =new Paciente();
        $paciente-> nombres = $request->nombres;
        $paciente-> apellidos = $request-> apellidos;
        $paciente-> cedula = $request->cedula;
        $paciente-> nro_seguro = $request->nro_seguro;
        $paciente-> fecha_nacimiento = $request->fecha_nacimiento;
        $paciente-> sexo = $request->sexo;
        $paciente-> correo = $request->correo;
        $paciente-> sexo = $request->sexo;
        $paciente->celular =$request->celular;
        $paciente-> direccion = $request->direccion;
        $paciente-> grupo_sanguineo = $request-> grupo_sanguineo;
        $paciente-> alergias = $request->alergias;
        $paciente-> contacto_emergencia = $request->contacto_emergencia;
        $paciente-> observaciones = $request->observaciones;
         $paciente->save();

        return redirect()->route('admin.pacientes.index')
            ->with('mensaje', 'El paciente ha sido registrado con éxito.')
            ->with('icono', 'success');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
      $paciente = Paciente::findOrFail($id) ;
        return view('admin.pacientes.show', compact('paciente'));



    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Utilizar el método correcto: findOrFail
        $paciente = Paciente::findOrFail($id);

        // Retornar la vista con el paciente
        return view('admin.pacientes.edit', compact('paciente'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Buscar al paciente por ID
        $paciente = Paciente::find($id);

        // Validación de los datos del paciente
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'cedula' => 'required|unique:pacientes,cedula,'.$paciente->id,
            'nro_seguro' => 'required|unique:pacientes,nro_seguro,' . $paciente->id,
            'fecha_nacimiento' => 'required',
            'sexo' => 'required',
            'celular' => 'required',
            'correo' => 'required|max:250|unique:pacientes,correo,'.$paciente->id,
            'direccion' => 'required',
            'grupo_sanguineo' => 'required',
            'alergias' => 'required',
            'contacto_emergencia' => 'required',
        ]);

        // Actualizar los datos del paciente con la información del formulario
        $paciente->nombres = $request->nombres;
        $paciente->apellidos = $request->apellidos;
        $paciente->cedula = $request->cedula;
        $paciente->nro_seguro = $request->nro_seguro;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->sexo = $request->sexo;
        $paciente->correo = $request->correo;
        $paciente->celular = $request->celular;
        $paciente->direccion = $request->direccion;
        $paciente->grupo_sanguineo = $request->grupo_sanguineo;
        $paciente->alergias = $request->alergias;
        $paciente->contacto_emergencia = $request->contacto_emergencia;
        $paciente->observaciones = $request->observaciones;

        // Guardar los cambios
        $paciente->save();

        // Redirigir con un mensaje de éxito
        return redirect()->route('admin.pacientes.index')
            ->with('mensaje', 'El paciente ha sido actualizado con éxito.')
            ->with('icono', 'success');
    }

    public function confirmDelete($id)
    {
        // Buscar el paciente por ID
        $paciente = Paciente::findOrFail($id);

        // Retornar la vista de confirmación
        return view('admin.pacientes.delete', compact('paciente'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       Paciente::destroy($id);
       return redirect()->route('admin.pacientes.index')
           ->with('mensaje','se eliminno el paciente de la manera correcta')
           ->with('icono','sucess');
    }



}
