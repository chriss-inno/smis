<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_levels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id');
            $table->string('level_name');
            $table->string('level_descriptions')->nullable();
            $table->string('input_by');
            $table->string('authorized_by');
            $table->dateTime('authorized_date');
            $table->string('current_year');
            $table->string('remarks')->nullable();
            $table->string('status');
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
        Schema::drop('education_levels');
    }
}
