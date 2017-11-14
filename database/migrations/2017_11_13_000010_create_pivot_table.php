<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('races_has_competitors', function (Blueprint $table) {
            $table->integer('race_id')->unsigned()->index();
            $table->integer('competitor_id')->unsigned()->index();
            $table->integer('position')->unsigned();
            $table->integer('position_final')->unsigned()->default(0)->nullable();
            $table->primary(['race_id', 'competitor_id']);
            $table->foreign('race_id')->references('id')->on('races')->onDelete('cascade');
            $table->foreign('competitor_id')->references('id')->on('competitors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('races_has_competitors');
    }
}
