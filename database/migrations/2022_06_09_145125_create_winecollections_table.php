<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('winecollections', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('type');
            $table->string('color');
            $table->string('country');
            $table->string('region');
            $table->string('varietal');
            $table->integer('vintage');
            $table->string('maker');
            $table->string('foodsuggestion');
            $table->integer('sugarcontent');
            $table->string('emmastory');
            $table->integer('stars');
            $table->string('picture');
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
        Schema::dropIfExists('winecollections');
    }
};
