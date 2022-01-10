<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorySpecificTimeRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_specific_time_rewards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reward_points')->default(0);
            $table->dateTime('start_time',0)->default(NULL);
            $table->dateTime('end_time',0)->default(NULL);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_specific_time_rewards');
    }
}
