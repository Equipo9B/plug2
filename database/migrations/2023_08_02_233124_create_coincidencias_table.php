<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coincidencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuarioId1');
            $table->unsignedBigInteger('usuarioId2');
            $table->unsignedBigInteger('match1')->nullable();
            $table->unsignedBigInteger('match2')->nullable();
            $table->timestamps();

            $table->foreign('usuarioId1')->references('id')
            ->on('usuarios');
            $table->foreign('usuarioId2')->references('id')
            ->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coincidencias');
    }
};
