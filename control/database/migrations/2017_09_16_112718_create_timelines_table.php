<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimelinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timelines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activity_id');
            $table->integer('child_id');
            $table->string('activity_description');
            $table->string('activity_image')->nullable();
            $table->string('activity_loom')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('child_id')->references('id')->on('children')->onDelete('cascade');
            $table->foreign('activity_id')->reference('id')->on('activities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timelines');
    }
}
