<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPointsToCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cart', function (Blueprint $table) {
            $table->integer('points')->nullable();
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->integer('points')->nullable();
        });

        Schema::table('order_items', function (Blueprint $table) {
            $table->integer('points')->nullable();
        });
    }

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cart', function (Blueprint $table) {
            $table->dropColumn('points');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('points');
        });

        Schema::table('order_items', function (Blueprint $table) {
            $table->dropColumn('points');
        });
    }
}
