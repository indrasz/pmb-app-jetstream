<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObstetricHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obstetric_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('patients_id');
            $table->integer('pregnancy_to');
            $table->string('year');
            $table->string('still_born');
            $table->string('aterm_born');
            $table->string('spontant_born');
            $table->string('weight_height');
            $table->string('maternity_place');
            $table->string('condition');
            $table->string('complication');

            $table->softDeletes();
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
        Schema::dropIfExists('obstetric_histories');
    }
}
