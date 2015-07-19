<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_setups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('current_year');
            $table->string('school_id');
            $table->string('input_by');
            $table->string('approved');
            $table->string('approved_by');
            $table->string('date_settled');
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
        Schema::drop('academic_setups');
    }
}
