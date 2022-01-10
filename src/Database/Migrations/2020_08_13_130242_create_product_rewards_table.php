<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_rewards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reward_points')->default(0);
            $table->integer('product_id')->unsigned()->nullable();
            $table->string('start_time')->default(NULL);
            $table->string('end_time')->default(NULL);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
           
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });

     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_rewards');
    }
}
