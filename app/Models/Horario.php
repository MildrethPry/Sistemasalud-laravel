<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'horarios';

    protected $fillable = [
        'dia',
        'hora_inicio',
        'hora_fin',
        'doctor_id',
        'consultorio_id'
    ];

    // Asegúrate que estas relaciones estén correctamente definidas
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function consultorio()
    {
        return $this->belongsTo(Consultorio::class, 'consultorio_id');
    }
}
