<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('session_year')->unsigned();
            $table->integer('school_id')->unsigned();
            $table->integer('is_active')->default(0);
            $table->timestamps();
            $table->foreign('school_id')->references('id')->on('schools');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_sessions');
    }
}
