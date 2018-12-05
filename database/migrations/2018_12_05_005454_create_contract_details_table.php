<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContractDetailsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plazos_pago');
            $table->integer('contrato_id')->unsigned()->default(0);
            $table->integer('articulos_id')->unsigned()->default(0);
            $table->double('valor_mensual');
            $table->string('iva');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('contrato_id')->references('id')->on('contract_details');
            $table->foreign('articulos_id')->references('id')->on('contract_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contract_details');
    }
}
