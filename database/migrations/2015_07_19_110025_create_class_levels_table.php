<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_levels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id');
            $table->string('level_name');
            $table->string('input_by');
            $table->string('authorized_by');
            $table->dateTime('authorized_date');
            $table->string('current_year');
            $table->string('remarks');
            $table->string('status')->nullable();
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
        Schema::drop('class_levels');
    }
}
