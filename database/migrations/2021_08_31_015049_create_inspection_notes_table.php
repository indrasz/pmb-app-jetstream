<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_notes', function (Blueprint $table) {
            $table->id();
            $table->integer('patients_id');
            $table->string('examiner');
            $table->string('date');
            $table->string('uk_mg');
            $table->string('bb_kg');
            $table->string('td_mmhg');
            $table->string('lila_cm');
            $table->string('fundus_hight');
            $table->string('fetus_location');
            $table->string('immunization');
            $table->string('add_blood_tablet');
            $table->string('lab');
            $table->string('analysis');
            $table->string('governance');
            $table->string('counseling');
            
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
        Schema::dropIfExists('inspection_notes');
    }
}
