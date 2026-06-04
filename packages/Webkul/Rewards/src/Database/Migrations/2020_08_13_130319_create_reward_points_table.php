<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reward_points', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('reward_points')->default(0);

            $table->enum('status', [
                'processing',
                'approved',
                'closed',
                'pending',
                'fraud',
                'expire',
                'used',
                'canceled',
                'disapproved',
            ])->default('pending');

            $table->text('note')->nullable();

            $table->date('exp_date')->nullable();

            $table->tinyInteger('product_purchased')->default(0);
            $table->tinyInteger('product_reviewed')->default(0);
            $table->tinyInteger('customer_registed')->default(0);
            $table->tinyInteger('product_category')->default(0);
            $table->tinyInteger('product_attribute')->default(0);
            $table->tinyInteger('order_cart')->default(0);
            $table->tinyInteger('customer_dob')->default(0);

            /*
            |--------------------------------------------------------------------------
            | Foreign Keys
            |--------------------------------------------------------------------------
            */

            $table->unsignedInteger('order_id')->nullable();
            $table->unsignedInteger('product_id')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->unsignedInteger('attribute_id')->nullable();
            $table->unsignedInteger('customer_id')->nullable();

            $table->timestamps();

            /*
            |--------------------------------------------------------------------------
            | Constraints
            |--------------------------------------------------------------------------
            */

            $table->foreign('order_id')
                ->references('id')
                ->on('orders')
                ->onDelete('cascade');

            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');

            $table->foreign('attribute_id')
                ->references('id')
                ->on('attributes')
                ->onDelete('cascade');

            $table->foreign('customer_id')
                ->references('id')
                ->on('customers')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('reward_points');
    }
};
