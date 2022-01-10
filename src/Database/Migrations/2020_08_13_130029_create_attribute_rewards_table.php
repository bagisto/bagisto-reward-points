<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_rewards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reward_points')->default(0);
            $table->integer('attribute_id')->unsigned()->nullable();
            $table->tinyInteger('status')->default(1);
            $table->date('end_date')->default(NULL);
            $table->timestamps();
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attribute_rewards');
    }
}
