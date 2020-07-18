<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('prod_name');
            $table->string('url_img');
            $table->float('price_out');
            $table->float('promotion_price');
            $table->date('date_start')->nullable()->default(null);
            $table->date('date_end')->nullable()->default(null);
            $table->integer('quantity');
            $table->string('description');
            $table->integer('cate_id')->unsigned();
            $table->foreign('cate_id')->references('cate_id')->on('categories');
            $table->string('center_name');
            $table->boolean('status');
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
