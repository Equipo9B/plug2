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
        Schema::create('mensajes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idmatch');
            $table->unsignedBigInteger('id1')->nullable();
            $table->unsignedBigInteger('id2')->nullable();
            $table->string('mensaje1')->nullable();
            $table->string('mensaje2')->nullable();
            $table->timestamps();

            $table->foreign('id1')->references('id')
            ->on('usuarios');
            $table->foreign('id2')->references('id')
            ->on('usuarios');
            $table->foreign('idmatch')->references('id')
            ->on('coincidencias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensajes');
    }
};
