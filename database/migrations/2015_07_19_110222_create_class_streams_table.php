<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassStreamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_streams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stream_name');
            $table->integer('class_id');
            $table->string('input_by');
            $table->string('authorized_by');
            $table->dateTime('authorized_date');
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
        Schema::drop('class_streams');
    }
}
