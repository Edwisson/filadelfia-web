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
        Schema::create('miembros-eventos', function (Blueprint $table) {
            $table->unsignedInteger('miembro');
            $table->unsignedBigInteger('evento');
            $table->timestamps();

            $table->foreign('miembro')->references('cedula')->on('miembros')->onDelete('cascade');
            $table->foreign('evento')->references('id')->on('eventos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('miembros-eventos');
    }
};
