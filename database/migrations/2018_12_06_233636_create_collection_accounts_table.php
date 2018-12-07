<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCollectionAccountsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contract_id')->unsigned()->default(0);
            $table->dateTime('creation');
            $table->dateTime('expiration');
            $table->double('total')->default(0);
            $table->double('paid')->default(0);
            $table->double('to_pay')->default(0);
            $table->string('state');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('contract_id')->references('id')->on('collection_accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('collection_accounts');
    }
}
