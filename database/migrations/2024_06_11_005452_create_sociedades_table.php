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
        Schema::create('sociedades', function (Blueprint $table) {
            $table->string('nombre')->primary();
            
            // Tomar en nota que se puso nullable como prueba, ya que de esta forma funciona la busqueda
            $table->unsignedInteger('n_miembros')->nullable();
            $table->text('descripcion');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sociedades');
    }
};
