<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('secretarias', function (Blueprint $table) {
            $table->string('celular', 15)->nullable(); // Agregar columna celular
        });
    }

    public function down()
    {
        Schema::table('secretarias', function (Blueprint $table) {
            $table->dropColumn('celular'); // Eliminar columna celular si se revierte
        });
    }

};
