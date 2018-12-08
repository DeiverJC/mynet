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
            $table->integer('type_contact_id')->unsigned()->default(0);
            $table->string('type_identification');
            $table->bigInteger('indentification');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('address');
            $table->string('state');
            $table->string('city');
            $table->string('cellphone');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('observations')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
