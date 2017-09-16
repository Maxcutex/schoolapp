<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->increments('id');
            $table->string('child_code')->unique();
            $table->string('firstname');
            $table->string('lastname');
            $table->date('dob');
            $table->string('current_class');
            $table->integer('guardian_id');
            $table->integer('school_id');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('school_id')->references('id')->on('schools');
            $table->foreign('guardian_id')->references('id')->on('guardians');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('children');
    }
}
