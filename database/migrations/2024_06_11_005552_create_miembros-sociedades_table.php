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
        Schema::create('miembros-sociedades', function (Blueprint $table) {
           
            $table->unsignedInteger('miembro');
            $table->string('cargo');
            $table->string('sociedad');
            $table->timestamps();

            $table->foreign('miembro')->references('cedula')->on('miembros')->onDelete('cascade');
            $table->foreign('sociedad')->references('nombre')->on('sociedades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('miembros-sociedades');
    }
};
