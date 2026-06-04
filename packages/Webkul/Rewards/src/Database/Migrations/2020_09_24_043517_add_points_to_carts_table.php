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
        if (! Schema::hasColumn('cart', 'points')) {
            Schema::table('cart', function (Blueprint $table) {
                $table->integer('points')->nullable();
            });
        }

        if (! Schema::hasColumn('orders', 'points')) {
            Schema::table('orders', function (Blueprint $table) {
                $table->integer('points')->nullable();
            });
        }

        if (! Schema::hasColumn('order_items', 'points')) {
            Schema::table('order_items', function (Blueprint $table) {
                $table->integer('points')->nullable();
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
        if (Schema::hasColumn('cart', 'points')) {
            Schema::table('cart', function (Blueprint $table) {
                $table->dropColumn('points');
            });
        }

        if (Schema::hasColumn('orders', 'points')) {
            Schema::table('orders', function (Blueprint $table) {
                $table->dropColumn('points');
            });
        }

        if (Schema::hasColumn('order_items', 'points')) {
            Schema::table('order_items', function (Blueprint $table) {
                $table->dropColumn('points');
            });
        }
    }
};
