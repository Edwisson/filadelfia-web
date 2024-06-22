<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('miembros', function (Blueprint $table) {
            $table->unsignedInteger('cedula')->primary();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('direccion');
            $table->unsignedInteger('telefono');
            $table->enum('estado_civil',['soltero','casado','viudo']);
            $table->unsignedSmallInteger('edad');
            $table->varchar('estado_salud');
            $table->text('descripcion_salud');
            $table->varchar('estado_economico');
            $table->text('descripcion_economica');
            $table->text('necesidades');
            $table->varchar('bautizado');
            $table->timestamps();
            $table->varchar('genero');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('miembros');
    }
};
