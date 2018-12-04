<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_identificacion');
            $table->integer('identificacion');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('departamento');
            $table->integer('tipo_contacto_id')->unsigned()->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('tipo_contacto_id')->references('id')->on('contacts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contacts');
    }
}
