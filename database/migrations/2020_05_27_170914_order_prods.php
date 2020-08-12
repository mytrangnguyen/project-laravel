<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderProds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_prods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_order')->unsigned();;
            $table->foreign('id_order')->references('id')->on('orders');
            $table->string('prod_name');
            $table->integer('quantity');
            $table->float('price_out');
            $table->integer('center_id');
            // $table->primary(array('id', 'i/d_order'))/;
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
        //
    }
}
