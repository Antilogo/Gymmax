<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->integer('order_total');
            $table->string('status');
            $table->timestamps();
        });
        Schema::table('product', function(Blueprint $table) {

            $table->bigInteger('order_id')->unsigned()->index(); // this is working
            $table->foreign('order_id')->references('order_id')->on('order_detail')->onDelete('cascade');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_order');
    }
}
