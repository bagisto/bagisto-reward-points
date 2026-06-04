<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasColumn('cart', 'points_amount')) {
            Schema::table('cart', function (Blueprint $table) {
                $table->integer('points_amount')->nullable();
            });
        }

        if (! Schema::hasColumn('orders', 'points_amount')) {
            Schema::table('orders', function (Blueprint $table) {
                $table->integer('points_amount')->nullable();
            });
        }

        if (! Schema::hasColumn('order_items', 'points_amount')) {
            Schema::table('order_items', function (Blueprint $table) {
                $table->integer('points_amount')->nullable();
            });
        }
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('cart', 'points_amount')) {
            Schema::table('cart', function (Blueprint $table) {
                $table->dropColumn('points_amount');
            });
        }

        if (Schema::hasColumn('orders', 'points_amount')) {
            Schema::table('orders', function (Blueprint $table) {
                $table->dropColumn('points_amount');
            });
        }

        if (Schema::hasColumn('order_items', 'points_amount')) {
            Schema::table('order_items', function (Blueprint $table) {
                $table->dropColumn('points_amount');
            });
        }
    }
};
