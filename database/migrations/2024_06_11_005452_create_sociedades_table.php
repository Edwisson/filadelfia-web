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
            $table->id('id_sociedad');
            $table->string('nombre');
            $table->unsignedInteger('n_miembros')->default(0);
            $table->text('descripcion');
            $table->unsignedInteger('pastor');
            $table->unsignedInteger('pastora');
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
