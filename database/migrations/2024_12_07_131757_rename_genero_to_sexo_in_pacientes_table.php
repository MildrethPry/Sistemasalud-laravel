<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameGeneroToSexoInPacientesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('pacientes', function (Blueprint $table) {
            $table->renameColumn('genero', 'sexo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('pacientes', function (Blueprint $table) {
            $table->renameColumn('sexo', 'genero');
        });
    }
}
