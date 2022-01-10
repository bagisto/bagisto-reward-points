<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSpecificTimeRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_specific_time_rewards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reward_points')->default(0);
            $table->integer('product_id')->unsigned()->nullable();
            $table->dateTime('start_time',0)->default(NULL);
            $table->dateTime('end_time',0)->default(NULL);
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
        Schema::dropIfExists('product_specific_time_rewards');
    }
}
