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
             $table->integer('level_id');
            $table->string('class_name');
            $table->string('class_descriptions')->nullable();
            $table->string('input_by');
            $table->string('authorized_by');
            $table->dateTime('authorized_date');
            $table->string('remarks')->nullable();
            $table->string('status')->nullable();
            $table->string('current_year');
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
