<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombreEmpresa');
            $table->string('razonSocial');
            $table->string('rfc');
            $table->string('direccion');
            $table->string('lat');
            $table->string('lng');
            $table->string('telefono');
            $table->string('correoContacto');
            $table->string('correoFacturacion');
            $table->string('inscripcion');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
