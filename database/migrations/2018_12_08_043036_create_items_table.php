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
            $table->boolean('is_inventorial');
            $table->string('title');
            $table->string('refence_code')->nullable();
            $table->double('sale_price')->default(0);
            $table->text('description')->nullable();
            $table->integer('tax');
            $table->string('unit_measure')->default('');
            $table->double('unit_price')->default(0);
            $table->integer('initial_amount')->default(0);
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
