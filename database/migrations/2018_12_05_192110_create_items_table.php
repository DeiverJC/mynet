<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type_item');
            $table->string('title');
            $table->string('refence')->nullable();
            $table->double('sale_price')->default(0);
            $table->text('description')->nullable();
            $table->string('tax');
            $table->string('unit_measure');
            $table->double('unit_price')->default(0);
            $table->integer('initial_amount');
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
        Schema::drop('items');
    }
}
