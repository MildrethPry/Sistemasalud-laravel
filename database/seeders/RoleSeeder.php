<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear los roles usando firstOrCreate para evitar duplicados
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $secretaria = Role::firstOrCreate(['name' => 'secretaria']);
        $doctor = Role::firstOrCreate(['name' => 'doctor']);
        $paciente = Role::firstOrCreate(['name' => 'paciente']);
        $usuario = Role::firstOrCreate(['name' => 'usuario']);

        // Crear permisos y asignar roles usando updateOrCreate
        Permission::updateOrCreate(['name' => 'admin.index'])->syncRoles([$admin]);

        // Rutas para el admin = usuario
        Permission::updateOrCreate(['name' => 'admin.usuarios.index'])->syncRoles([$admin]);
        Permission::updateOrCreate(['name' => 'admin.usuarios.create'])->syncRoles([$admin]);
        Permission::updateOrCreate(['name' => 'admin.usuarios.store'])->syncRoles([$admin]);
        Permission::updateOrCreate(['name' => 'admin.usuarios.show'])->syncRoles([$admin]);
        Permission::updateOrCreate(['name' => 'admin.usuarios.edit'])->syncRoles([$admin]);
        Permission::updateOrCreate(['name' => 'admin.usuarios.update'])->syncRoles([$admin]);
        Permission::updateOrCreate(['name' => 'admin.usuarios.confirmDelete'])->syncRoles([$admin]);
        Permission::updateOrCreate(['name' => 'admin.usuarios.destroy'])->syncRoles([$admin]);

        // Secretarias
        Permission::updateOrCreate(['name' => 'admin.secretarias.index'])->syncRoles([$admin]);
        Permission::updateOrCreate(['name' => 'admin.secretarias.create'])->syncRoles([$admin]);
        Permission::updateOrCreate(['name' => 'admin.secretarias.store'])->syncRoles([$admin]);
        Permission::updateOrCreate(['name' => 'admin.secretarias.show'])->syncRoles([$admin]);
        Permission::updateOrCreate(['name' => 'admin.secretarias.edit'])->syncRoles([$admin]);
        Permission::updateOrCreate(['name' => 'admin.secretarias.update'])->syncRoles([$admin]);
        Permission::updateOrCreate(['name' => 'admin.secretarias.confirmDelete'])->syncRoles([$admin]);
        Permission::updateOrCreate(['name' => 'admin.secretarias.destroy'])->syncRoles([$admin]);

        // Pacientes
        Permission::updateOrCreate(['name' => 'admin.pacientes.index'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.pacientes.create'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.pacientes.store'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.pacientes.show'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.pacientes.edit'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.pacientes.update'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.pacientes.confirmDelete'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.pacientes.destroy'])->syncRoles([$admin, $secretaria]);

        // Consultorios
        Permission::updateOrCreate(['name' => 'admin.consultorios.index'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.consultorios.create'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.consultorios.store'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.consultorios.show'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.consultorios.edit'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.consultorios.update'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.consultorios.confirmDelete'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.consultorios.destroy'])->syncRoles([$admin, $secretaria]);

        // Doctores
        Permission::updateOrCreate(['name' => 'admin.doctores.index'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.doctores.create'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.doctores.store'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.doctores.show'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.doctores.edit'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.doctores.update'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.doctores.confirmDelete'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.doctores.destroy'])->syncRoles([$admin, $secretaria]);

        // Horarios
        Permission::updateOrCreate(['name' => 'admin.horarios.index'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.horarios.create'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.horarios.store'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.horarios.show'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.horarios.edit'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.horarios.update'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.horarios.confirmDelete'])->syncRoles([$admin, $secretaria]);
        Permission::updateOrCreate(['name' => 'admin.horarios.destroy'])->syncRoles([$admin, $secretaria]);

        Permission::updateOrCreate(['name' => 'admin.horarios.cargar_datos_consultorios'])->syncRoles([$admin, $secretaria]);
    }
}
