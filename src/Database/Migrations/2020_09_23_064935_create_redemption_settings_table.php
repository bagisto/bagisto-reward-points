<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedemptionSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redemption_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('redemp_over_subtotal')->default(1);
            $table->tinyInteger('apply_points_checkout')->default(1);
            $table->integer('points')->nullable();
            $table->float('conversion_rate', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('redemption_settings');
    }
}
