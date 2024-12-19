<?php

namespace Database\Seeders;

use App\Models\Secretaria;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // First call RoleSeeder to create roles and permissions
        $this->call([
            RoleSeeder::class,
        ]);

        // Create Admin User
        $adminUser = User::updateOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Administrador',
                'password' => Hash::make('12345678'),
            ]
        );
        $adminUser->assignRole('admin');

        // Create Secretaria User and Profile
        $secretariaUser = User::updateOrCreate(
            ['email' => 'secretaria@admin.com'],
            [
                'name' => 'Secretaria',
                'password' => Hash::make('12345678'),
            ]
        );
        $secretariaUser->assignRole('secretaria');

        // Create Secretaria profile with all required fields
        Secretaria::updateOrCreate(
            ['user_id' => $secretariaUser->id],
            [
                'nombres' => 'Maria',
                'apellidos' => 'González', // Agregado el campo apellidos
                'cedula' => '1',
                'celular' => '777777777777',
                'fecha_nacimiento' => '2020-10-10',
                'direccion' => 'Miraflores',
            ]
        );

        // Create Doctor User
        $doctorUser = User::updateOrCreate(
            ['email' => 'doctor@admin.com'],
            [
                'name' => 'Doctor',
                'password' => Hash::make('12345678'),
            ]
        );
        $doctorUser->assignRole('doctor');

        // Create Paciente User
        $pacienteUser = User::updateOrCreate(
            ['email' => 'paciente@admin.com'],
            [
                'name' => 'Paciente',
                'password' => Hash::make('12345678'),
            ]
        );
        $pacienteUser->assignRole('paciente');

        // Create Usuario1
        $usuario1User = User::updateOrCreate(
            ['email' => 'Usuario1@admin.com'],
            [
                'name' => 'Usuario1',
                'password' => Hash::make('12345678'),
            ]
        );
        $usuario1User->assignRole('paciente');
    }
}
