<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewardPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reward_points', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reward_points')->default(0);
            $table->enum('status', array('processing', 'approved','closed','pending','fraud','expire','used','canceled'))->default('pending');
            $table->text('note')->nullable();
            $table->date('exp_date')->nullable();
            $table->tinyInteger('product_purchased')->default(0);
            $table->tinyInteger('product_reviewed')->default(0);
            $table->tinyInteger('customer_registed')->default(0);
            $table->tinyInteger('product_category')->default(0);
            $table->tinyInteger('product_attribute')->default(0);
            $table->tinyInteger('order_cart')->default(0);
            $table->tinyInteger('customer_dob')->default(0);
            $table->timestamps();
            $table->integer('order_id')->unsigned()->nullable();
            $table->foreign('order_id')->references('id')->on('order_items')->onDelete('cascade');
            $table->integer('product_id')->unsigned()->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->integer('attribute_id')->unsigned()->nullable();
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
            $table->integer('customer_id')->unsigned()->nullable();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reward_points');
    }
}
