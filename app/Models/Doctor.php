<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    // Definir los campos que pueden ser asignados de manera masiva
    protected $fillable = ['nombres', 'apellidos', 'cedula', 'telefono', 'licencia_medica', 'especialidad', 'user_id'];

    // Relación con el modelo Consultorio
    public function consultorio()
    {
        return $this->belongsTo(Consultorio::class);
    }

    // Relación con el modelo Horario (un doctor puede tener muchos horarios)
    public function horarios()
    {
        return $this->hasMany(Horario::class);
    }

    // Relación con el modelo User (un doctor pertenece a un usuario)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
