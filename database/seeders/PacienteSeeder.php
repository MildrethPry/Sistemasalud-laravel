<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Paciente; // Importa el modelo Paciente

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Paciente::factory()->count(500)->create()->each(function($user){
         $user->assignRole('paciente');
        });

    }
}
