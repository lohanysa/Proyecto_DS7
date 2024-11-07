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
        Schema::create('platos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_plato');
            $table->string('descripcion_plato');
            $table->float('precio_plato');
            $table->string('foto_plato');
            $table->unsignedBigInteger('id_categoria')->NotnotNullable();
            $table->unsignedBigInteger('id_usuario')->notNullable();
            $table->timestamps();
            $table->foreign("id_usuario")->references("id")->on("usuarios");
            $table->foreign("id_categoria")->references("id")->on("categoriaplatos");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platos');
    }
};
